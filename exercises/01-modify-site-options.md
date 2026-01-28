# Exercise 1: Modify Site Options

In this exercise, you will modify the site title and tagline using the `setSiteOptions` Blueprint step.

1. Copy the contents of `demos/02-versions.json` into a new JSON file.
2. Add a new step after the `preferredVersions` section using the `setSiteOptions` step.
3. Set the site title (`blogname`) to `"My Custom Site"`.
4. Set the tagline (`blogdescription`) to `"Customized via Blueprint"`.
5. Save the file and run your blueprint by loading it in Playground using the `blueprint-url` parameter.

When your environment loads, open the WordPress Settings → General screen to verify that the site title and tagline have been updated.