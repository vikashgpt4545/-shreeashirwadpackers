/**
 * Shree Ashirwad Packers and Movers - Frontend Scripts
 * Lightweight, zero dependencies
 */

document.addEventListener('DOMContentLoaded', function() {
    // Dynamic Header & Hero screen-fit synchronization
    function syncHeroHeight() {
        const topbar = document.querySelector('.topbar');
        const header = document.querySelector('.site-header');
        let totalH = 0;
        if (topbar && window.getComputedStyle(topbar).display !== 'none') {
            totalH += topbar.offsetHeight;
        }
        if (header) {
            totalH += header.offsetHeight;
        }
        if (totalH > 0) {
            document.documentElement.style.setProperty('--header-height', totalH + 'px');
        }
    }
    syncHeroHeight();
    window.addEventListener('resize', syncHeroHeight);
    window.addEventListener('load', syncHeroHeight);

    // Mobile navigation toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function() {
            const isExpanded = navMenu.classList.toggle('active');
            mobileToggle.setAttribute('aria-expanded', isExpanded);
        });
    }

    // Lead Quote Form AJAX Submission & Validation
    const quoteForm = document.getElementById('heroQuoteForm');
    const formStatus = document.getElementById('formStatusMessage');

    if (quoteForm && formStatus) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Client-side Phone validation
            const phoneInput = quoteForm.querySelector('input[name="phone"]');
            const phoneVal = phoneInput ? phoneInput.value.replace(/\D/g, '') : '';

            if (phoneVal.length < 10) {
                formStatus.className = 'form-status-message error';
                formStatus.textContent = 'Please enter a valid 10-digit mobile number.';
                formStatus.style.display = 'block';
                if (phoneInput) phoneInput.focus();
                return;
            }

            const submitBtn = quoteForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Submit';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Sending Enquiry...';
            }

            const formData = new FormData(quoteForm);

            fetch(quoteForm.action || 'submit-quote.php', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data && data.success) {
                    formStatus.className = 'form-status-message success';
                    formStatus.textContent = data.message || 'Thank you! Your moving quote request has been received. Our team will contact you shortly.';
                    formStatus.style.display = 'block';
                    quoteForm.reset();
                } else {
                    formStatus.className = 'form-status-message error';
                    formStatus.textContent = (data && data.message) ? data.message : 'Unable to submit request. Please call us directly at +91 9835565233.';
                    formStatus.style.display = 'block';
                }
            })
            .catch(error => {
                formStatus.className = 'form-status-message error';
                formStatus.textContent = 'Thank you! We received your request. For immediate booking, please call +91 9835565233.';
                formStatus.style.display = 'block';
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                }
            });
        });
    }

    // FAQ Accordion Toggle Interaction
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const questionBtn = item.querySelector('.faq-question');
        if (questionBtn) {
            questionBtn.addEventListener('click', function() {
                const isExpanded = questionBtn.getAttribute('aria-expanded') === 'true';
                // Close other open FAQs for clean UX
                faqItems.forEach(otherItem => {
                    const otherBtn = otherItem.querySelector('.faq-question');
                    if (otherBtn && otherBtn !== questionBtn) {
                        otherBtn.setAttribute('aria-expanded', 'false');
                    }
                });
                questionBtn.setAttribute('aria-expanded', !isExpanded);
            });
        }
    });
});

