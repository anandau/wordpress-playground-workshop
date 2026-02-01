# WordPress Playground Workshop  
### WordCamp Kolhapur 2026

This repository contains **WordPress Playground Blueprints**, Blueprint Bundles, example code and supporting materials used in the hands‑on workshop **"Getting Started with WordPress Playground."**

The workshop shows how WordPress can run entirely in the browser using Playground, and how Blueprints enable you to build **repeatable, shareable WordPress environments** for demos, testing, onboarding, documentation and learning.

---

## 🚀 Quick Start

Open WordPress Playground:

```
https://playground.wordpress.net/
```

This instantly launches a fully working WordPress environment in your browser—no hosting, database or local setup required.

---

## 🧪 Workshop Demo Blueprints

All workshop demos are powered by **Blueprints**—JSON files that describe how WordPress should be configured before it loads. The demos below are numbered in the order used in the workshop to illustrate increasing levels of control and automation.

### 1. Basic Playground (`demos/01-basic.json`)

The simplest Blueprint. It sets a landing page but otherwise leaves WordPress untouched. Use it to demonstrate how Playground launches instantly.

**Features:** Landing page configuration

### 2. Version Control (`demos/02-versions.json`)

Demonstrates setting specific PHP and WordPress versions via the Blueprint. Useful for reproducible testing across different environments.

**Features:** PHP version selection, WordPress version selection

### 3. Plugin Demo (`demos/03-plugin-demo.json`)

Automatically installs and activates the **Query Monitor** plugin. Shows how a single link can set up a plugin demo without manual steps.

**Features:** Plugin installation, plugin activation

### 4. WooCommerce Product via Inline PHP (`demos/04-wc-inline-php-product.json`)

Installs WooCommerce, activates it and uses an inline `runPHP` step to create a demo product. Demonstrates using PHP inside Blueprints for custom automation.

**Features:** Plugin installation, PHP execution, dynamic content creation

### 5. Kitchen Sink: Options, WP‑CLI, Login (`demos/05-kitchen-sink.json`)

Combines multiple capabilities: site option updates, plugin installation and activation, WP‑CLI commands, and PHP execution. Automatically logs in the user. Use this to showcase how complex setups can be encoded in a single file.

**Features:** Site options, plugins, WP‑CLI, runPHP, automatic login

---

## 📦 Blueprint Bundles

Blueprint Bundles extend Blueprints with additional assets (themes, plugins, media, content). They are distributed as ZIP files containing a `blueprint.json` and supporting assets.

### Gaming Blueprint Bundle (`bundles/blueprint-bundle-gaming/`)

A complete demo environment for gaming-themed WordPress sites with pre-configured content, themes, and plugins.

**Contents:**
- `blueprint.json` - Main blueprint configuration
- `content.xml` - WXR export with posts and media
- `spiel.zip` - Theme/plugin files

**Use case:** Rapid setup of gaming community sites with demo content

---

## 📁 Repository Structure

```
wordpress-playground-workshop/
├── README.md                 # This file
├── demos/                    # Individual Blueprint files
│   ├── 01-basic.json
│   ├── 02-versions.json
│   ├── 03-plugin-demo.json
│   ├── 04-wc-inline-php-product.json
│   └── 05-kitchen-sink.json
├── bundles/                  # Blueprint Bundles with assets
│   ├── blueprint-bundle-gaming/
│   │   ├── blueprint.json
│   │   ├── content.xml
│   │   └── spiel.zip
│   └── blueprint-bundle-gaming.zip
├── exercises/                # Hands‑on practice tasks
│   ├── 01-modify-site-options.md
│   ├── 02-add-a-plugin.md
│   ├── 03-add-wpcli-step.md
│   └── 04-make-your-own-demo-link.md
├── scripts/                  # Auxiliary PHP scripts for complex demos
│   └── create-demo-product.php
└── reference/                # Mini handbook and cheat‑sheets
    ├── url-parameters.md
    ├── blueprint-core-steps.md
    └── patterns.md
```

---

## 📘 What is a Blueprint?

A **Blueprint** is a JSON configuration file that tells Playground how to set up WordPress automatically. It can:

* Install and activate plugins or themes
* Update site options (title, tagline, permalinks)
* Run WP‑CLI commands
* Execute custom PHP code inside WordPress
* Write files or import content
* Control which page is shown after setup

In simple terms:

> **Blueprint = WordPress Setup Recipe**

Instead of long instructions, you can share a single URL and everyone gets the same environment.

---

## 📦 What is a Blueprint Bundle?

A **Blueprint Bundle** extends the Blueprint concept by packaging additional assets alongside the blueprint configuration. It includes:

* **blueprint.json** - The core Blueprint configuration
* **Theme/Plugin files** - Pre-built themes and plugins (often in ZIP format)
* **Content exports** - WXR files with posts, pages, media, and metadata
* **Media assets** - Images, videos, and other media files

Blueprint Bundles are useful for:

* **Plugin/Theme Demos** - Test multiple extensions together with realistic content
* **Learning Environments** - Provide complete, pre-configured WordPress sites for workshops
* **Portfolio Projects** - Share client work with all assets and content included
* **Quick Starts** - Enable instant WordPress environments for specific use cases

---

## 🔧 Common Playground URL Parameters

| Parameter         | Purpose                               |
|------------------|---------------------------------------|
| `php`            | Set the PHP version (e.g., `?php=8.2`) |
| `wp`             | Set the WordPress version (e.g., `?wp=6.5`) |
| `url`            | Control the landing page after setup (e.g., `?url=/wp-admin/`) |
| `blueprint-url`  | Load a Blueprint from a URL |

Combine parameters to control the environment. For example:

```
https://playground.wordpress.net/?php=8.2&wp=6.5&url=/wp-admin/&blueprint-url=RAW_URL
```

---

## 🛠 Official Documentation

For the full list of Blueprint steps and advanced features, see the official docs:

* Blueprint Steps Reference: https://wordpress.github.io/wordpress-playground/blueprints/steps/
* Blueprint Overview: https://wordpress.github.io/wordpress-playground/blueprints/
* WordPress Playground Project: https://wordpress.github.io/wordpress-playground/

---

## 🎯 Ideal Use Cases

* Plugin and theme demos
* Testing and debugging
* Bug reproduction
* Contributor onboarding
* Workshops and training
* Documentation examples
* Learning and experimentation

---

## ⚠️ Limitations

* Playground is **not intended for production websites**
* Data is temporary unless persisted
* Some PHP extensions and server features are not available

---

## 🙌 Credits

Workshop designed and delivered by **Anand Upadhyay**  
WordCamp Kolhapur 2026

---

## 📜 License

This repository is licensed under the MIT License. You are free to use, modify, and distribute these examples.
