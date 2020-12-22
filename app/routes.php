<?php

require_once 'lib/router.php';

/**
 * Ensemble des routes pour cette application
 *
 * @var array
 */
$routes = [
    '/' => 'index',
    '/posts' => 'posts',
    '/register' => 'register'
];

$content = resolve_current_route($routes, URI);
