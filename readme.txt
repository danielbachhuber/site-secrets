=== Site Secrets ===
Contributors: danielbachhuber, digitalfirstmedia
Tags: private blog, collaboration
Requires at least: 3.6
Tested up to: 5.4
Stable tag: 0.2.0

Keep your WordPress site private.

== Description ==

Site Secrets is a simple plugin to keep your WordPress site private. When active, it will redirect all unauthenticated users to the login screen.

By default, Site Secrets requires that the user has been added to the site. You can broaden the permissions model to any logged-in users with the following snippet added to your theme's `functions.php` file or a mu-plugin:

`add_filter( 'site_secrets_requires_membership', '__return_false' );`

We're happy to receive feedback, questions, feature suggestions, and [pull requests](https://github.com/DFMdata/Site-Secrets)

== Installation ==

The easiest way to install this plugin is to go to Add New in the Plugins section of your blog admin and search for "Site Secrets." On the far right side of the search results, click "Install."

Activating the plugin will make your site private.

If the automatic process above fails, follow these simple steps to do a manual install:

1. Extract the contents of the zip file into your `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Enjoy the merits of a secret site!

== Frequently Asked Questions ==

Feel free to ask a question in the forums!

== Changelog ==

= 0.2.0 (Dec. 29, 2016) =
* Requires authentication for REST API requests.

= 0.1 (Feb. 26, 2014) =
* Initial release with basic ability to make a WordPress site private.
