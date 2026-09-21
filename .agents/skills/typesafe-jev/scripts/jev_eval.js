#!/usr/bin/env node

/**
 * TypeSafe AI Jev (System One) Evaluation Runner
 *
 * Calls the official TypeSafe AI evaluation endpoint:
 *   POST https://api.typesafe.ai/v1/systemone
 *
 * Credentials:
 *   Reads TYPESAFE_API_KEY securely from process.env.
 *   Never logs or commits API keys.
 *
 * Usage:
 *   node jev_eval.js --state "text to evaluate" --questions '{"is_sw": {"type": "noul", "instructions": "..."}}'
 *   node jev_eval.js --input '{"state": "...", "questions": {...}}'
 *   node jev_eval.js --file ./request.json
 */

const fs = require('fs');

const ENDPOINT = 'https://api.typesafe.ai/v1/systemone';
const DEFAULT_MODEL = 'jev-latest';

function parseArgs(args) {
  const parsed = {};
  for (let i = 0; i < args.length; i++) {
    const arg = args[i];
    if (arg === '--state' && i + 1 < args.length) {
      parsed.state = args[++i];
    } else if (arg === '--questions' && i + 1 < args.length) {
      parsed.questions = JSON.parse(args[++i]);
    } else if (arg === '--model' && i + 1 < args.length) {
      parsed.model = args[++i];
    } else if (arg === '--input' && i + 1 < args.length) {
      const inputObj = JSON.parse(args[++i]);
      Object.assign(parsed, inputObj);
    } else if (arg === '--file' && i + 1 < args.length) {
      const filePath = args[++i];
      const content = fs.readFileSync(filePath, 'utf8');
      const fileObj = JSON.parse(content);
      Object.assign(parsed, fileObj);
    } else if (arg === '--help' || arg === '-h') {
      parsed.help = true;
    }
  }
  return parsed;
}

function printHelp() {
  console.log(`
TypeSafe AI Jev (System One) Evaluation Runner

Usage:
  node jev_eval.js --state "<text>" --questions '<json>'
  node jev_eval.js --input '<json_payload>'
  node jev_eval.js --file <path_to_json>

Options:
  --state <string|json>   State/content to evaluate
  --questions <json>      Map of questions (choice, noul, score)
  --model <string>        Model name (default: "jev-latest")
  --input <json>          Complete request payload as JSON string
  --file <path>           Path to JSON file with request payload
  --help, -h              Show this help message

Environment:
  TYPESAFE_API_KEY        Required. Your TypeSafe AI API key.
`);
}

async function run() {
  const args = process.argv.slice(2);
  const parsed = parseArgs(args);

  if (parsed.help) {
    printHelp();
    process.exit(0);
  }

  const apiKey = process.env.TYPESAFE_API_KEY;
  if (!apiKey || apiKey.trim() === '') {
    console.error(JSON.stringify({
      error: 'AUTHENTICATION_ERROR',
      message: 'TYPESAFE_API_KEY environment variable is not set. Please set it before running evaluations.'
    }, null, 2));
    process.exit(1);
  }

  if (!parsed.state) {
    console.error(JSON.stringify({
      error: 'VALIDATION_ERROR',
      message: 'Missing required field: "state". Provide via --state, --input, or --file.'
    }, null, 2));
    process.exit(1);
  }

  if (!parsed.questions || typeof parsed.questions !== 'object' || Object.keys(parsed.questions).length === 0) {
    console.error(JSON.stringify({
      error: 'VALIDATION_ERROR',
      message: 'Missing required field: "questions". Provide a non-empty questions map via --questions, --input, or --file.'
    }, null, 2));
    process.exit(1);
  }

  const payload = {
    model: parsed.model || DEFAULT_MODEL,
    state: parsed.state,
    questions: parsed.questions
  };

  try {
    const response = await fetch(ENDPOINT, {
      method: 'POST',
      headers: {
        'Authorization': `Bearer ${apiKey.trim()}`,
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(payload)
    });

    const data = await response.json();

    if (!response.ok) {
      console.error(JSON.stringify({
        status: response.status,
        statusText: response.statusText,
        error: data
      }, null, 2));
      process.exit(1);
    }

    console.log(JSON.stringify(data, null, 2));
  } catch (err) {
    console.error(JSON.stringify({
      error: 'NETWORK_ERROR',
      message: err.message
    }, null, 2));
    process.exit(1);
  }
}

run();
