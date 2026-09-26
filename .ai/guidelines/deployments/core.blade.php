# Deployment

- This application is deployed with [Laravel Forge](https://forge.laravel.com/), not Laravel Cloud. Do not suggest Laravel Cloud, the `cloud` CLI, or Cloud-specific resources.
- `develop` is the default working branch. Changes land on `develop` (directly or via feature branches) and reach production when the owner opens a PR and merges `develop` into the production branch, which triggers a Forge auto-deploy.
- Never merge into or push to the production branch unless explicitly asked; that is a production release.
- Production configuration (environment variables, deploy script, queue workers, scheduler) is managed in Forge, not in this repository.
