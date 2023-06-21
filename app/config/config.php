<?php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'metalink');

// App Root file
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/metalink');
// Site Logo
define('SITELOGO_LG', '<a href="' . URLROOT . '">
<img src="' . URLROOT . '/assets/images/logo.svg" width="126" height="28" loading="lazy" alt="Metalink home">
</a>');

// Site Logo
define('SITELOGO_SM', '<a href="' . URLROOT . '">
<img src="' . URLROOT . '/assets/images/logo-small.svg" width="40" height="40" alt="Metalink home" class="logo-small">
<img src="' . URLROOT . '/assets/images/logo.svg" width="126" height="28" alt="Metalink home" class="logo">
</a>');

// App Version
define('APPVERSION', '1.0.0');


// die(APPROOT);