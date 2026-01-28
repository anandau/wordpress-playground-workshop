# WordPress Playground Workshop  
### WordCamp Kolhapur 2026

This repository contains demo **WordPress Playground Blueprints**, example code and supporting materials used in the hands‑on workshop **“Getting Started with WordPress Playground.”**

The workshop shows how WordPress can run entirely in the browser using Playground, and how Blueprints enable you to build **repeatable, shareable WordPress environments** for demos, testing, onboarding, documentation and learning.

---

## 🚀 Quick Start

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

```
https://playground.wordpress.net/?blueprint-url=RAW_URL_FOR_01_BASIC
```

### 2. Version Control (`demos/02-versions.json`)

Demonstrates setting specific PHP and WordPress versions via the Blueprint. Useful for reproducible testing.

```
https://playground.wordpress.net/?blueprint-url=RAW_URL_FOR_02_VERSIONS
```

### 3. Plugin Demo (`demos/03-plugin-demo.json`)

Automatically installs and activates the **Query Monitor** plugin. Shows how a single link can set up a plugin demo without manual steps.

```
https://playground.wordpress.net/?blueprint-url=RAW_URL_FOR_03_PLUGIN_DEMO
```

### 4. WooCommerce Product via Inline PHP (`demos/04-wc-inline-php-product.json`)

Installs WooCommerce, activates it and uses an inline `runPhp` step to create a demo product. Demonstrates using PHP inside Blueprints for simple automation.

```
https://playground.wordpress.net/?blueprint-url=RAW_URL_FOR_04_WC_INLINE_PHP_PRODUCT
```

### 5. Kitchen Sink: Options, WP‑CLI, Login (`demos/05-kitchen-sink.json`)

Combines multiple capabilities: installs and activates a plugin, updates site options, runs a WP‑CLI command to create a post, executes a small PHP snippet and includes a login step. Use this to showcase how complex setups can still be encoded in a single file.

```
https://playground.wordpress.net/?blueprint-url=RAW_URL_FOR_05_KITCHEN_SINK
```

---

## 📁 Repository Structure

```
wp-playground-workshop/
├── README.md                 # This file
├── demos/                    # Blueprint files used in the workshop
│   ├── 01-basic.json
│   ├── 02-versions.json
│   ├── 03-plugin-demo.json
│   ├── 04-wc-inline-php-product.json
│   └── 05-kitchen-sink.json
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

## 📘 What is a Blueprint?

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

Workshop designed and delivered by **Anand Upadhyay**  
WordCamp Kolhapur 2026

---

## 📜 License

This repository is licensed under the MIT License. You are free to use, modify, and distribute these examples.