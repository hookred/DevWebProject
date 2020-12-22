<?php

function get_view_content($view_name, $context = []) {
    $filename = VIEWS_DIR . '/' . $view_name . '.php';
    if (file_exists($filename)) {
        ob_start();
        extract($context);
        include $filename;
        $content = ob_get_clean();
        return $content;
    }
    throw new Exception($filename . " doesn't exist.");
}

function resolve_current_route($routes, $current_uri) {
    foreach ($routes as $route => $view) {
        if ($route == $current_uri) {
            return $view;
        }
    }
    return '404';
}
