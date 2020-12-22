<?php

require_once LIB_DIR . '/router.php';

/**
 * Ensemble des routes pour cette application
 *
 * @var array
 */
$routes = [
    '/' => ['home', 'home'],
    '/posts' => ['posts', 'index'],
    '/register' => ['users', 'register']
];
