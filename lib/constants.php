<?php

if (!defined('ROOT')) {
    define('ROOT', dirname(__DIR__));
}

if (!defined('VIEWS_DIR')) {
    define('VIEWS_DIR', ROOT . '/views');
}

if (!defined('LIB_DIR')) {
    define('LIB_DIR', ROOT . '/lib');
}

if (!defined('APP_DIR')) {
    define('APP_DIR', ROOT . '/app');
}

if (!defined('URI')) {
    define('URI', $_SERVER['REQUEST_URI']);
}
