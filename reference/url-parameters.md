# Playground URL Parameters

Playground links control how WordPress loads by including query parameters on the URL. Here are the most commonly used parameters:

| Parameter | Purpose | Example |
|-----------|---------|---------|
| `php` | Specify the PHP version to run. | `?php=8.2` |
| `wp` | Specify the WordPress version. | `?wp=6.5` or `?wp=latest` |
| `url` | Navigate to a specific path after loading. | `?url=/wp-admin/` |
| `blueprint-url` | Load and execute a remote Blueprint JSON file. | `?blueprint-url=https://example.com/demo.json` |
| `landingPage` (inside Blueprints) | Redirect after steps run. | `"landingPage": "/wp-admin/"` |
| `storage` | Control data persistence (`browser` or `none`). | `?storage=browser` |

### Basic Examples

Run Playground on PHP 8.2 and WordPress 6.5:

```
https://playground.wordpress.net/?php=8.2&wp=6.5
```

Open Playground with admin dashboard as the landing page:

```
https://playground.wordpress.net/?url=/wp-admin/
```

Load a Blueprint hosted at `https://example.com/demo.json`:

```
https://playground.wordpress.net/?blueprint-url=https://example.com/demo.json
```

These parameters can be combined as needed. For example:

```
https://playground.wordpress.net/?php=8.2&wp=latest&blueprint-url=https://example.com/demo.json
```