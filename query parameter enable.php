<?php
function add_custom_query_var( $vars ){
    $vars[] = "userid";
    return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );

// For Uses

$userid = get_query_var( 'userid' );