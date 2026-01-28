# Blueprint Core Steps Cheat‑Sheet

Blueprints are executed as an ordered list of steps. Each step performs a specific task to set up your WordPress environment. Here are the most commonly used steps:

| Step | Description | Example usage |
|------|-------------|---------------|
| `installPlugin` | Download and install a plugin from WordPress.org or a URL. | Install Query Monitor: `{ "step": "installPlugin", "pluginZipFile": { "resource": "wordpress.org/plugins", "slug": "query-monitor" } }` |
| `activatePlugin` | Activate a previously installed plugin. | `{ "step": "activatePlugin", "pluginSlug": "query-monitor" }` |
| `installTheme` | Download and install a theme from WordPress.org or a URL. | Install Twenty Twenty‑Four: `{ "step": "installTheme", "themeZipFile": { "resource": "wordpress.org/themes", "slug": "twentytwentyfour" } }` |
| `activateTheme` | Activate a previously installed theme. | `{ "step": "activateTheme", "themeSlug": "twentytwentyfour" }` |
| `setSiteOptions` | Update WordPress options such as site title, tagline, or permalinks. | `{ "step": "setSiteOptions", "options": { "blogname": "Demo Site", "permalink_structure": "/%postname%/" } }` |
| `runPhp` | Execute custom PHP code inside WordPress. Used for simple automation or demonstration purposes. | `{ "step": "runPhp", "code": "<?php wp_insert_post([ 'post_title' => 'Hello', 'post_status' => 'publish' ]); ?>" }` |
| `runWpCliCommand` | Run a WP‑CLI command. Great for bulk tasks or creating content. | `{ "step": "runWpCliCommand", "command": "wp post create --post_title='CLI Post' --post_status=publish" }` |
| `importWxr` | Import content from a WordPress eXtended RSS (WXR) export file. | `{ "step": "importWxr", "file": { "resource": "url", "url": "https://example.com/demo.xml" } }` |
| `writeFile` | Create or overwrite files in the filesystem. Useful for mu‑plugins or configuration files. | `{ "step": "writeFile", "path": "/wp-content/mu-plugins/demo.php", "data": "<?php echo 'Hello'; ?>" }` |
| `login` | Log in automatically using default credentials (`admin` / `password`). Alternatively, set `"login": true` at the root of the blueprint. | `{ "step": "login" }` or `"login": true` |

These steps can be combined and ordered to create complex environments. For the full list of available steps and their parameters, see the official documentation:

<https://wordpress.github.io/wordpress-playground/blueprints/steps/>