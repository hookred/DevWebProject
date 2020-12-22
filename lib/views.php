<?php

require_once LIB_DIR . '/router.php';

function get_view($view) {
    echo get_view_content($view);
}
