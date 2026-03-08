<?php
// config.php - central configuration for the site
//define a base URL in case the site lives in a subfolder
//adjust this constant when deploying
if (!defined('BASE_URL')) {
    define('BASE_URL', '/');
}

//site wide constants
if (!defined('SITE_NAME')) {
    define('SITE_NAME', 'ChromaShield Coatings');
}

//you can add database credentials, feature flags, etc. here in future
