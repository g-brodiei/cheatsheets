# Reverse Proxy Settings in Settings.php file

Ref: [urls with http instead of https](https://www.drupal.org/project/metatag/issues/2842049)

URL links in Drupal are often generated with the use of [base_url] global variable.

> a Loadbalancer is redirecting every http-request to a https-url, then works as a reverse proxy and talking to the drupal VM behind (as well running on a nginx server).
So I assume the original request is done via HTTPS but the problem lies somewhere in the server configuration files of the loadbalancer or the drupal VM.<br>
By Benjen https://www.drupal.org/project/metatag/issues/2842049#comment-11859516

**Snippet**
```php
$settings['reverse_proxy'] = TRUE;
$settings['reverse_proxy_addresses'] = [$_SERVER['REMOTE_ADDR']];
$settings['reverse_proxy_header'] = 'HTTP_X_FORWARDED_FOR';
```