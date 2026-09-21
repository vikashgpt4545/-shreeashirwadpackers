---
name: typesafe-jev
description: >-
  Use this skill to evaluate application state, route tasks, classify inputs,
  and perform fast, typed decision-making using TypeSafe AI Jev (System One).
---

# TypeSafe AI Jev (System One) Integration

This skill enables Antigravity to use **TypeSafe AI Jev** for fast, calibrated, structured decisions, classifications, and routing.

Jev is a **System One** decision model: it takes an unstructured state and evaluates it against typed questions, returning structured probabilities, choices, and confidence scores rather than generating prose.

## Primitives

Jev supports three evaluation primitives:

1. **`choice`**: Selects one option from a map of criteria.
   - Output: `choice` (string), `probabilities` (map of option -> float), `confidence` (0 to 1).
2. **`noul`**: Evaluates a yes/no statement.
   - Output: `noul` (float between 0 and 1 representing probability of true).
3. **`score`**: Rates state along an ordered rubric array (2 to 10 levels).
   - Output: `score` (probability-weighted float), `legend`, `probabilities`, `confidence`.

## Executing Jev via Script

Use the helper script [jev_eval.js](./scripts/jev_eval.js):

```bash
node .agents/skills/typesafe-jev/scripts/jev_eval.js --file <path-to-payload.json>
```

Or pass `--state` and `--questions`:

```bash
node .agents/skills/typesafe-jev/scripts/jev_eval.js --state "<state text>" --questions '<questions json>'
```

### Authentication

The runner requires the `TYPESAFE_API_KEY` environment variable:
- Windows PowerShell: `$env:TYPESAFE_API_KEY = "your-key"`
- Linux / macOS: `export TYPESAFE_API_KEY="your-key"`

Never hardcode or commit this key to any repository file.

## Example Payloads

### Classification (Choice)

```json
{
  "model": "jev-latest",
  "state": "Classify whether this is a software-development task.",
  "questions": {
    "task_classification": {
      "type": "choice",
      "instructions": "What category does this task fall into?",
      "criteria": {
        "software_development": "Tasks involving writing, debugging, testing, or modifying software code and architecture.",
        "other": "Tasks not involving software engineering or coding."
      }
    }
  }
}
```

### Binary Decision (Noul)

```json
{
  "model": "jev-latest",
  "state": "The user reported: 'Database connection timed out on line 42'.",
  "questions": {
    "is_software_bug": {
      "type": "noul",
      "instructions": "Does this represent a software bug or defect?",
      "criteria": {
        "true": "Clear technical bug or exception",
        "false": "User question or normal behavior"
      }
    }
  }
}
```

### Rubric Rating (Score)

```json
{
  "model": "jev-latest",
  "state": "We need to migrate our entire database schema and rewrite the ORM layer.",
  "questions": {
    "complexity": {
      "type": "score",
      "instructions": "How complex and risky is this technical task?",
      "criteria": ["Low complexity", "Medium complexity", "High complexity / major risk"]
    }
  }
}
```
