# balance-wp
A standard WP install with plugins.

## Folder Structure
Folders noted in the description below assumes / is the root of the WP install.

| Key | Description |
|-|-|
|[1]| Changes only with Core WP Updates|
|[2]| Dynamic content changed regularly, either automatically or manually |
|[3]| Contains secrets, passwords, credentials or server specific data

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


