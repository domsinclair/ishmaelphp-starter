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

## License

The IshmaelPHP Starter is open-sourced software licensed under the [MIT license](LICENSE).
