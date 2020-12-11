<?php
// HTTP
define('HTTP_SERVER', 'https://radugagrez.palemiya.com/');

// HTTPS
define('HTTPS_SERVER', 'https://radugagrez.palemiya.com/');

// DIR
define('DIR_APPLICATION', '/var/www/palemiya/data/www/radugagrez.palemiya.com/catalog/');
define('DIR_SYSTEM', '/var/www/palemiya/data/www/radugagrez.palemiya.com/system/');
define('DIR_IMAGE', '/var/www/palemiya/data/www/radugagrez.palemiya.com/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'raduga');
define('DB_PASSWORD', 'Qwerty123');
define('DB_DATABASE', 'raduga-grez');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');