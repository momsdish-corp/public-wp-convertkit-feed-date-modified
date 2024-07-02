# Description

TLDR: This plugin changes the feed from Date Published to Date Modified.

By default, WordPress generates the feed using the original publish date, instead of the date modified. This can be 
problematic for users who want to trigger automations based on the date the post was last modified.

This plugin addresses the issue by both replacing the `<pubDate>` value with date modified, and sorting the feed by the
date modified.

Once installed, the feed is accessible at `https://yourwebsite.com/index.php?feed=convertkit-date-modified`.

# Requirements
- PHP 7 or higher
- WordPress 6 or higher
- Yoast Duplicate Post plugin

# Installation

- Download the [plugin.zip](https://github.com/momsdish-corp/public-wp-convertkit-feed-date-modified/releases/latest/download/plugin.zip) file from the latest releases.
- Upload it to WordPress (Go to Admin Panel -> Plugins -> Add New Plugin -> Upload Plugin) and click to Install Now.
- Activate the plugin (Or go to Plugins -> `ConvertKit Feed by Date Modified` -> Activate).
- Access the feed at `https://yourwebsite.com/index.php?feed=convertkit-date-modified`.

# Legal

This WordPress plugin is provided as-is, without any guarantees or support. We're sharing the code to help anyone else 
dealing with the same issues. The code can be used without any restrictions, both for commercial and non-commercial use.
See [LICENSE.md](LICENSE.md) for more info.
