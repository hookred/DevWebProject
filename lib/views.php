<?php

/**
 * Récupère le contenu d'une vue spécifique et lui passe un contexte.
 * Cette fonction n'affiche pas le contenu du fichier cible.
 *
 * @param string $view_name
 * @param array $content
 * @return string
 */
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

/**
 * Fonction permettant d'afficher le contenu d'une vue.
 *
 * @param string $view
 * @return void
 */
function show_view($view) {
    echo get_view_content($view);
}
