# IshmaelPHP Starter (Seed)

This is a ready-to-copy seed of the new Ishmael Starter application. Copy the entire contents of this folder into your separate starter repo folder, then commit and push there.

Your new private repo details (as provided):
- Remote: https://github.com/domsinclair/ishmaelphp-starter
- Local folder: D:\JetBrainsProjects\PhpStorm\ishmaelphp-starter

## How to copy (PowerShell on Windows)

1) Open a new PowerShell window and run:

```
cd "D:\JetBrainsProjects\PhpStorm\ish"
$src = "Templates/StarterV2/*"
$dst = "D:/JetBrainsProjects/PhpStorm/ishmaelphp-starter"
Copy-Item $src -Destination $dst -Recurse -Force
```

2) In the starter folder, make the first commit and push:

```
cd "D:\JetBrainsProjects\PhpStorm\ishmaelphp-starter"
git status
git add .
git commit -m "feat: initial IshmaelPHP starter scaffold"
git push origin main
```

3) Install dependencies and run locally:

```
composer install
copy .env.example .env
php -S localhost:8080 -t public
# Visit http://localhost:8080
```

If using Laravel Herd or another local server, point the document root to `public/`.

## What’s included

- Minimal, working “Home” module (hello page + simple API route)
- Full set of config files copied/adapted from Core for discoverability
- `.env.example` with common keys (advanced keys commented)
- CLI shim entry (`bin/ish`) to proxy to Core’s CLI when installed
- Storage structure with `.gitignore` for logs/cache
- Placeholders for Tutorials/Blog (add your existing content)
- Docs folder scaffold to keep reference docs inside the Starter (see `Docs/README.md`)

## Composer and Core dependency

This starter expects Ishmael Core to be installed via Composer. For private beta, follow your existing private guide to configure Composer with a GitHub token to access the Core repository. The provided `composer.json` is set up for that workflow.

Optional (local development linking to your local Core checkout):
- You can temporarily add a Composer path repository pointing to your local `IshmaelPHP-Core` to iterate without publishing a tag. See the commented example in `composer.json`.

## Using PHPStorm as your ide?

If you are using phpStorm then Ismael php ships with a command line tool.

Look in the Docs folder for this document [PhpStorm CLI Integration](Docs/Core/guide/phpstorm-cli-integration.md)

## Next steps

- After you confirm the starter runs, we can add the CLI shim commands to offer installation of the Auth and Security modules on demand (`ish make:auth`, `ish make:security`).
- We’ll keep both Starter and Core private until public beta; the README includes private-install pointers.

## Local Docs (optional, recommended for testers)

This seed includes `Docs/` with a helper script to copy the Core documentation into the Starter so you can browse everything inside your IDE. See `Docs/README.md` for instructions.
