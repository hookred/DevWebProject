<?php

require_once LIB_DIR . '/router.php';

/**
 * Ensemble des routes pour cette application
 *
 * @var array
 */
$routes = [
    '/' => ['home', 'home'],
    '/post' => ['posts', 'show'],
    '/register' => ['users', 'register']
];
