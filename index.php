<?php

require_once 'lib/constants.php';

require_once 'app/routes.php';

$view = resolve_current_route($routes, URI);
$view_content = get_view_content($view);

echo get_view_content('layouts/default', ['content' => $view_content]);
