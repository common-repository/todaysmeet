=== TodaysMeet ===
Contributors: todaysmeet
Tags: todaysmeet, shortcode, embed, chat
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 1.0.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed TodaysMeet rooms directly into your posts and pages with a simple short code.

== Description ==

The [TodaysMeet WordPress plugin](https://todaysmeet.com/help/faq/14/what-is-the-todaysmeet-wordpress-plugin-how-do-i-use-it) makes it easy to embed your TodaysMeet rooms in your WordPress blog with a simple [shortcode](http://codex.wordpress.org/Shortcode).

    [todaysmeet id=12345]

The `id` is required, but there are some optional attributes to the shortcode:

- `type` - set to "`live`" to switch to a [Live Stream](https://todaysmeet.com/help/faq/13/whats-the-difference-between-live-stream-and-transcript).
- `participate` - set to "`yes`" to allow visitors to your blog to join and participate in the room. (Note that `type` *must* be set to "`live`" for `participate` to have an effect.)
- `width` - allows you to control how wide the embedded room is. Defaults to `100%`.
- `height` - allows you to control how tall the embedded room is. Defaults to `400` (pixels).

Here's an example with all the optional attributes:

    [todaysmeet id=12345 type=live participate=no width=50% height=300]


== Installation ==

1. Upload `todaysmeet.php` to the `wp-content/plugins` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Use the `[todaysmeet]` short code in your posts and pages.

For example:

    The conversation was great, you can read the transcript here:

    [todaysmeet id=1234 type=transcript]

== Changelog ==

= 1.0 =
* Initial release.
