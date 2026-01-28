# Exercise 2: Add a Plugin via Blueprint

In this exercise, you'll extend an existing blueprint to install and activate an additional plugin. For example, you can use the "Contact Form 7" plugin.

1. Make a copy of the `demos/03-plugin-demo.json` blueprint into a new JSON file.
2. Add another `installPlugin` step followed by an `activatePlugin` step for the plugin you want to install (e.g., the `contact-form-7` plugin from WordPress.org).
3. Update the `landingPage` value to `/wp-admin/plugins.php` so that you can see the complete list of installed plugins when the environment loads.
4. Load your blueprint via Playground by hosting or pasting its raw URL into the `blueprint-url` parameter.
5. Verify that both the original plugin and your newly added plugin are installed and active.

Tip: You can search for plugin slugs on the WordPress.org plugins directory to find the correct slug for a particular plugin.