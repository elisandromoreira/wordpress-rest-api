<?php 

remove_action('rest_api_init', 'create_initial_rest_routes', 99);

function change_api() {
    return 'json';
}

add_filter('rest_url_prefix', 'change_api');

?>