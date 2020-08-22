<?php
get_header();

echo '<div id="root"></div>';

//reference each js file in /js
$files = scandir(get_stylesheet_directory() . '/js');
foreach ($files as $file) {
    if (!substr($file, -3) == '.js') continue;
    wp_enqueue_script($file, get_stylesheet_directory_uri() . '/js/' . $file);
}

get_footer();