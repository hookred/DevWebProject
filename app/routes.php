<?php

require_once 'lib/router.php';

$routes = [
    '/' => 'index',
    '/posts' => 'posts',
    '/register' => 'register'
];

$content = resolve_current_route($routes, URI);
