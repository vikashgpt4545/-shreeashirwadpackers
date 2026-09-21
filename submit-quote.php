<?php
/**
 * Lead Enquiry Processor
 * Shree Ashirwad Packers and Movers
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/db.php';

$is_ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
        exit;
    }
    header('Location: ' . SITE_BASE_URL . '/');
    exit;
}

// 1. Honeypot Spam Trap Check
if (!empty($_POST['website_url_hp'])) {
    // Bot detected - simulate success
    if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'message' => 'Thank you! Your quote request has been received.']);
        exit;
    }
    header('Location: ' . SITE_BASE_URL . '/?status=success');
    exit;
}

// 2. CSRF Token Verification
$csrf_token = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';
if (!verify_csrf_token($csrf_token)) {
    if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Session expired. Please refresh the page and try again.']);
        exit;
    }
    header('Location: ' . SITE_BASE_URL . '/?status=csrf_error');
    exit;
}

// 3. Extract and Sanitize Inputs
$name = isset($_POST['name']) ? sanitize_text($_POST['name']) : '';
$phone = isset($_POST['phone']) ? preg_replace('/\D/', '', $_POST['phone']) : '';
$moving_from = isset($_POST['moving_from']) ? sanitize_text($_POST['moving_from']) : '';
$moving_to = isset($_POST['moving_to']) ? sanitize_text($_POST['moving_to']) : '';
$service_type = isset($_POST['service_type']) ? sanitize_text($_POST['service_type']) : 'Residential Shifting';
$message = isset($_POST['message']) ? sanitize_text($_POST['message']) : '';
$source_url = isset($_SERVER['HTTP_REFERER']) ? sanitize_text($_SERVER['HTTP_REFERER']) : '/';
$ip_address = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? substr(sanitize_text($_SERVER['HTTP_USER_AGENT']), 0, 250) : '';

// 4. Validation
if (empty($name) || strlen($name) < 2) {
    if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Please enter your full name.']);
        exit;
    }
    header('Location: ' . SITE_BASE_URL . '/?status=error_name');
    exit;
}

if (empty($phone) || strlen($phone) < 10) {
    if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Please provide a valid 10-digit mobile number.']);
        exit;
    }
    header('Location: ' . SITE_BASE_URL . '/?status=error_phone');
    exit;
}

// 5. Store Lead
$lead_saved = false;

// Attempt Database Insertion
if ($pdo !== null) {
    try {
        $stmt = $pdo->prepare("
            INSERT INTO `leads` (`name`, `phone`, `moving_from`, `moving_to`, `service_type`, `message`, `source_url`, `ip_address`, `user_agent`)
            VALUES (:name, :phone, :moving_from, :moving_to, :service_type, :message, :source_url, :ip_address, :user_agent)
        ");
        $stmt->execute([
            ':name' => $name,
            ':phone' => $phone,
            ':moving_from' => $moving_from,
            ':moving_to' => $moving_to,
            ':service_type' => $service_type,
            ':message' => $message,
            ':source_url' => $source_url,
            ':ip_address' => $ip_address,
            ':user_agent' => $user_agent,
        ]);
        $lead_saved = true;
    } catch (PDOException $e) {
        error_log("Database lead insertion error: " . $e->getMessage());
    }
}

// Fallback JSON Lead Backup (guarantees zero lead loss even if MySQL is temporarily offline)
$lead_entry = [
    'timestamp' => date('Y-m-d H:i:s'),
    'name' => $name,
    'phone' => $phone,
    'moving_from' => $moving_from,
    'moving_to' => $moving_to,
    'service_type' => $service_type,
    'message' => $message,
    'ip' => $ip_address
];

$backup_file = __DIR__ . '/includes/leads_backup.json';
$existing_leads = [];
if (file_exists($backup_file)) {
    $content = file_get_contents($backup_file);
    if ($content) {
        $existing_leads = json_decode($content, true) ?: [];
    }
}
$existing_leads[] = $lead_entry;
@file_put_contents($backup_file, json_encode($existing_leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// 6. Response
if ($is_ajax) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'message' => 'Thank you ' . $name . '! Your quote request has been received. Our moving manager will call you within 15 minutes.'
    ]);
    exit;
}

header('Location: ' . SITE_BASE_URL . '/?status=success');
exit;
