<?php

// Racine du projet
if (!defined('ROOT')) {
    define('ROOT', dirname(__DIR__));
}

// Répertoire contenant toutes les vues
if (!defined('VIEWS_DIR')) {
    define('VIEWS_DIR', ROOT . '/views');
}

// Répertoire contentant les librairies génériques
if (!defined('LIB_DIR')) {
    define('LIB_DIR', ROOT . '/lib');
}

// Répertoire de l'application
if (!defined('APP_DIR')) {
    define('APP_DIR', ROOT . '/app');
}

// Alias pour l'URI courante
if (!defined('URI')) {
    define('URI', $_SERVER['REQUEST_URI']);
}
