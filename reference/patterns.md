# Common Blueprint Patterns

Blueprints are best thought of as recipes. By combining a few core steps in the right order, you can accomplish common tasks quickly. Here are some useful patterns:

## Install and Activate a Plugin

```json
{
  "steps": [
    {
      "step": "installPlugin",
      "pluginZipFile": {
        "resource": "wordpress.org/plugins",
        "slug": "example-plugin"
      }
    },
    {
      "step": "activatePlugin",
      "pluginSlug": "example-plugin"
    }
  ]
}
```

Replace `example-plugin` with the slug of the plugin you wish to install.

## Set Site Title and Permalinks

```json
{
  "steps": [
    {
      "step": "setSiteOptions",
      "options": {
        "blogname": "My Demo Site",
        "blogdescription": "Powered by Blueprints",
        "permalink_structure": "/%postname%/"
      }
    }
  ]
}
```

Use this pattern at the beginning of your blueprint to customize basic site details.

## Create Content via WP‑CLI

WP‑CLI commands are great for creating posts, pages, and users in bulk:

```json
{
  "steps": [
    {
      "step": "runWpCliCommand",
      "command": "wp post create --post_title='Demo Post' --post_status=publish"
    }
  ]
}
```

You can stack multiple `runWpCliCommand` steps to perform a series of actions.

## Run Custom PHP

For quick one‑off logic, `runPhp` allows you to use WordPress functions directly:

```json
{
  "steps": [
    {
      "step": "runPhp",
      "code": "<?php wp_insert_post([ 'post_title' => 'Inline PHP Post', 'post_status' => 'publish' ]); ?>"
    }
  ]
}
```

Keep PHP snippets short and simple. For longer scripts, use a separate file and include it via `writeFile`.

## Use a Helper Script

When your PHP becomes too long, place it in a file and load it via `runPhp`:

1. Write your script to `/wp-content/mu-plugins/` using `writeFile` or commit it in the `scripts/` folder and reference it.
2. Require it in a `runPhp` step:

```json
{
  "steps": [
    {
      "step": "writeFile",
      "path": "/wp-content/mu-plugins/demo-script.php",
      "data": "<?php // your PHP here ?>"
    },
    {
      "step": "runPhp",
      "code": "<?php require '/wp-content/mu-plugins/demo-script.php'; ?>"
    }
  ]
}
```

This pattern keeps your blueprint readable while allowing more complex logic.