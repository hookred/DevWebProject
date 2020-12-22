<?php

require_once './lib/constants.php';
require_once LIB_DIR . '/views.php';

require_once APP_DIR . '/routes.php';

$view = resolve_current_route($routes, URI);
$view_content = get_view_content($view);

echo get_view_content('layouts/default', ['content' => $view_content]);
