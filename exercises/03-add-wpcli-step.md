# Exercise 3: Add a WP‑CLI Step

WP‑CLI is a powerful command‑line interface for WordPress. In this exercise, you'll add a WP‑CLI command to a blueprint to create a new post.

1. Start by copying the `demos/03-plugin-demo.json` blueprint into a new JSON file.
2. After the plugin activation steps, add a `runWpCliCommand` step to create a new post. For example:

   ```json
   {
     "step": "runWpCliCommand",
     "command": "wp post create --post_title='My CLI Post' --post_status=publish"
   }
   ```

3. Set the `landingPage` value to `/wp-admin/edit.php` so that the Posts list is shown when the environment loads.
4. Load your blueprint using the `blueprint-url` parameter. When the site finishes loading, check the Posts list to confirm that the post has been created.

Feel free to experiment with different WP‑CLI commands (see <https://developer.wordpress.org/cli/commands/> for documentation) to extend your blueprint further.