# IshmaelPHP Starter Application

The official starter application for the IshmaelPHP Framework.

## Features

- **Module-First Architecture**: Organized by business logic, not just technical layers.
- **Slim & Fast**: No unnecessary bloat, just what you need to get started.
- **Developer Friendly**: Built-in CLI tools and PHPStorm integration.

## Installation

You can create a new project using Composer:

```bash
composer create-project ishmael/ishmaelphp-starter my-app
```

## Getting Started

1.  **Configure Environment**:
    Copy `.env.example` to `.env` and adjust your settings (database, etc.).
    ```bash
    cp .env.example .env
    ```

2.  **Generate App Key**:
    ```bash
    php vendor/bin/ish key:generate
    ```

3.  **Run the Server**:
    ```bash
    php -S localhost:8080 -t public
    ```
    Visit `http://localhost:8080` in your browser.

## Documentation

Comprehensive documentation for IshmaelPHP can be found in the `Docs` folder or online at [ishmaelphp.org](https://ishmaelphp.org) (coming soon).

## MCP Server

IshmaelPHP has its own mcp server that can provide AI agents with additional information about the framework.
If you are using an ide made by jetbrains it should be discovered automatically.
Unfortunately this is not quite as straightforward for other ide's and you may need to do some additional configuration.

1. VS Code and Claude Dev / Roo Code
   If you are using extensions like Claude Dev (now Roo Code) or Cline in VS Code, they are heavy users of MCP. However, they do not use a jetbrains-mcp.json file.
   Instead, they typically rely on a global configuration file (usually located at %APPDATA%\Code\User\globalStorage\saoudrizwan.claude-dev\settings\cline_mcp_settings.json on Windows). Users have to manually add the server configuration there, or use the extension's UI to point to the php executable and the ish-mcp path.
2. GitHub Copilot
   As of now, GitHub Copilot does not have a native "plug-and-play" discovery mechanism for local MCP servers in the same way JetBrains or specialized Claude extensions do. While Microsoft is moving towards supporting more external "skills" and "extensions," there isn't a single JSON file you can drop into a project root today that will make Copilot automatically start using a local PHP-based MCP server.

### `ide:setup-run-configs`
This tool automatically sets up IDE "Run Configurations," allowing you to execute `ish` commands directly from your IDE's interface.
*   **Supported IDEs**: PhpStorm (more coming soon).
*   **Action**: Generates `.xml` files in `.idea/runConfigurations/` for common tasks like `help`, `migrate`, and `make:module`.
*   **How to use**: Ask your AI assistant to "Set up my IDE run configurations for Ishmael."


## License

The IshmaelPHP Starter is open-sourced software licensed under the [MIT license](LICENSE).
