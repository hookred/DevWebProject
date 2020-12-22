<?php

/**
 * Retourne le nom de la vue correspondant à une URI donné.
 *
 * @param array $routes
 * @param string $current_uri
 * @return string
 */
function resolve_current_route($routes, $current_uri) {
    foreach ($routes as $route => $view) {
        if ($route == $current_uri) {
            return $view;
        }
    }
    return '404';
}
