# WordPress Playground Workshop  
### WordCamp Kolhapur 2026

This repository contains demo **WordPress Playground Blueprints**, examples, and reference material used in the hands-on workshop:

**Getting Started with WordPress Playground**

The goal of this workshop is to help participants understand how WordPress can run entirely in the browser using Playground, and how Blueprints can be used to create **repeatable, shareable WordPress environments** for demos, testing, onboarding, documentation, and learning.

---

## 🚀 Quick Start

Open WordPress Playground:

https://playground.wordpress.net/


This instantly launches a fully working WordPress environment inside your browser.

---

## 🧪 Workshop Demo Blueprints

All workshop demos are based on **Blueprints**, which are JSON files that define how WordPress should be set up automatically.

### 1. Version Controlled Playground

Runs WordPress using PHP 8.2 and WordPress 6.5

https://playground.wordpress.net/?php=8.2&wp=6.5


Used to demonstrate environment control and reproducibility.

---

### 2. Plugin Demo Blueprint

Automatically installs and activates the Query Monitor plugin.

Blueprint file:

blueprints/03-plugin-demo.json

Usage pattern:

https://playground.wordpress.net/?blueprint-url=RAW_FILE_URL


This demonstrates how plugins can be pre-installed for demos, testing, and documentation.

---

### 3. WooCommerce Advanced Demo Blueprint

Installs WooCommerce and automatically creates a demo product using PHP.

Blueprint file:

blueprints/04-woocommerce-demo.json


This demonstrates advanced Playground automation using PHP inside Blueprints.

---

## 📁 Repository Structure

├── README.md
├── blueprints/
│ ├── 01-basic-playground.json
│ ├── 02-version-controlled.json
│ ├── 03-plugin-demo.json
│ └── 04-woocommerce-demo.json
├── php-scripts/
│ └── create-demo-product.php
└── assets/
└── qr-codes/


---

## 📘 What is a Blueprint?

A **Blueprint** is a JSON configuration file that defines:

- WordPress setup steps  
- Plugin and theme installation  
- Site configuration  
- PHP execution  
- Demo environment preparation  

In simple terms:

> Blueprint = WordPress Setup Recipe

Instead of sharing long setup instructions, you can share **a single Playground link**.

---

## 🔧 Common Playground URL Parameters

| Parameter | Purpose |
|-------------|-----------|
| `php` | Set PHP version |
| `wp` | Set WordPress version |
| `url` | Control landing page |
| `blueprint-url` | Load a Blueprint |

Example:

https://playground.wordpress.net/?php=8.2&wp=6.5&url=/wp-admin/


---

## 🛠 Official Documentation

- Blueprint Steps Reference  
  https://wordpress.github.io/wordpress-playground/blueprints/steps/

- Blueprint Overview  
  https://wordpress.github.io/wordpress-playground/blueprints/

- WordPress Playground Project  
  https://wordpress.github.io/wordpress-playground/

---

## 🎯 Ideal Use Cases

- Plugin and theme demos  
- Testing and debugging  
- Bug reproduction  
- Contributor onboarding  
- Workshops and training  
- Documentation examples  
- Learning and experimentation  

---

## ⚠️ Limitations

- Playground is **not intended for production websites**
- Data is **temporary unless persisted**
- Some PHP extensions and server features are not available

---

## 🙌 Credits

Workshop designed and delivered by  
**Anand Upadhyay**

WordCamp Kolhapur 2026

---

## 📜 License

This repository is licensed under the MIT License.  
You are free to use, modify, and distribute these examples.




