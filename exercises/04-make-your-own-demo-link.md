# Exercise 4: Make Your Own Demo Link

In this final exercise, you'll create a completely custom blueprint from scratch and run it in Playground.

Requirements:

1. Define a blueprint that sets the site title to `"My Demo"` using the `setSiteOptions` step.
2. Install and activate the `classic-widgets` plugin from WordPress.org.
3. Use a `runWpCliCommand` step to create a sample page titled `"Sample Page"` via WP‑CLI.
4. Set the `landingPage` value to `/wp-admin/edit.php?post_type=page` so that the Pages list is displayed when the environment loads.

Steps:

1. Create a new JSON file and add the necessary fields. Remember to include a `steps` array.
2. Add the `setSiteOptions` step to set the site title.
3. Add `installPlugin` and `activatePlugin` steps for `classic-widgets`.
4. Add the `runWpCliCommand` step to create the page.
5. Set the `landingPage` field to point to the Pages list.
6. Load your blueprint using the `blueprint-url` parameter. You can host the file or copy‑and‑paste the raw URL from this repository.
7. Share your resulting Playground link with a fellow attendee and see if their site matches yours.

This exercise brings together everything you've learned, giving you complete control over your own WordPress demo environment!