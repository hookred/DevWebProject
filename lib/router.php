<?php

/**
 * Retourne le nom de la vue correspondant à une URI donné.
 *
 * @param array $routes
 * @param string $current_uri
 * @return array
 */
function resolve_current_route($routes, $current_uri) {
    foreach ($routes as $route => $function_path) {
        if ($route == $current_uri) {
            return $function_path;
        }
    }
    return '404';
}


/**
 * Trouve le fichier correspondant à un chemin et appelle la fonction
 * correspondante.
 * Retourne le résultat de cette fonction.
 *
 * @param array $path
 * @return string
 */
function dispatch($path) {
    $filename = APP_DIR . '/http/' . $path[0] . '.php';
    $function_name = $path[1];
    if (!file_exists($filename)) {
        throw new Exception("$filename doesn't exist");
    }

    require $filename;
    return call_user_func($function_name);
}
