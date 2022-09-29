# balance-wp
A standard WP install with plugins.

## Folder Structure
Folders noted in the description below assumes / is the root of the WP install. It it also assumed that the data within each WP install is different from site to site, some sites have either a different theme/plugin/config, more, or the same with different content.

| Key | Description |
|-|-|
|[1]| Changes only with Core WP Updates|
|[2]| Dynamic content changed regularly, either automatically or manually |
|[3]| Contains secrets, passwords, credentials or server specific data |

```
/wp-admin/ [1]
/wp-content/ [2][3]
-- themes/ [2]
-- plugins/ [2][3]
-- uploads/ [2]
----- elementor/ [2]
----- gravity_forms/ [2]
/wp-includes [1]
/.htaccess [2]
/wp-activate.php [1]
/wp-blog-header.php [1]
/wp-comments-post.php [1]
/wp-config-sample.php [1]
/wp-config.php [2][3]
/wp-cron.php [1]
/wp-links-opml.php [1]
/wp-load.php [1]
/wp-login.php [1]
/wp-mail.php [1]
/wp-settings.php [1]
/wp-signup.php [1]
/wp-trackback.php [1]
/xmlrpc.php [1]
```

Within `wp-content/themes` each theme is saved in it's own folder, changes can be made manually by the developer to the `functions.php` (usually in `wp-content/themes/{my_theme}/functions.php`) but when a theme is updated it will change surrounding files and potentially resets the `functions.php` file. In this use-case WordPress added a redundancy where a theme could have a child folder (`{my_theme}-child`) in which the parent would inherit it's files. This would allow changes made in the child to be kept even when the parent theme is updated.

With this in mind, if the developer made changes to `wp-content/my_theme/functions.php` they would be reverted when the theme was updated (although it's not uncommon to make changes to the parent theme) where-as changes to `wp-content/my_theme-child/functions.php` would remain untouched on theme updated and WordPress will include the child files when loading the parent theme.
