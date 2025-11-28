# Starter Docs Folder

This folder lets testers keep Ishmael documentation inside the Starter project for convenient IDE browsing and quick search.

Two options to populate docs:

1) Quick copy from your local Core checkout (PowerShell)
- Edit copy-core-docs.ps1 if needed, then run it. By default it expects Core at:
  D:/JetBrainsProjects/PhpStorm/ish/IshmaelPHP-Core/Documentation
- It will copy those docs into Docs/Core/ in this starter.

2) Manual copy
- Copy any documentation you want (Guides, How-tos) into Docs/Core/.

After copying, you will have, for example:
- Docs/Core/guide/*
- Docs/Core/how-to/*
- Docs/Core/reference/* (if present)

You can link to these from the Starter README.md or your Tutorials.

Commands
- Run the copy script from the Starter repo root:
  PowerShell -ExecutionPolicy Bypass -File .\Docs\copy-core-docs.ps1

If you keep the Starter separate from the Core mono-folder, adjust the $source path in the script.
