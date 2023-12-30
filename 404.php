<?php


$args = [
    'wfPage' => '6566f34d0e7954710809aa8b',
    'body' => '',
    'head' => 'head/front-page',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('404');
}
     
get_header('', $args);

udesly_get_content_template( '404' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('404');
}

get_footer('', $args);
