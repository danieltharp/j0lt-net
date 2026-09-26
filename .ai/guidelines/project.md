# Project Architecture

This application is a personal multi-purpose site that performs many different tasks, some of which may appear to overlap.

- Give each task its own migrations, models, and controllers, even when it resembles an existing task.
- Do not generalize an existing model, table, or controller to serve a second, similar task, and do not propose merging similar tasks into shared, polymorphic, or "type"-column structures.
- Some duplication between tasks is expected and acceptable. Do not flag it as a problem or refactor it away unless asked.
- Rationale: code organized per task is easier to understand and troubleshoot, and it avoids edge-case bugs that come from stretching one model across tasks that are similar but meaningfully different.
