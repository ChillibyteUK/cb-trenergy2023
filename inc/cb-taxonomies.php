<?php

function cb_register_taxes() {

    $args = [
        "label" => __( "Rooms", "cb-trenergy2023" ),
        "labels" => [
            "name" => __( "Rooms", "cb-trenergy2023" ),
            "singular_name" => __( "Room", "cb-trenergy2023" ),
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "rooms", [ "case-studies" ], $args );

    $args = [
        "label" => __( "Counties", "cb-trenergy2023" ),
        "labels" => [
            "name" => __( "Counties", "cb-trenergy2023" ),
            "singular_name" => __( "County", "cb-trenergy2023" ),
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "counties", [ "case-studies" ], $args );

    $args = [
        "label" => __( "Towns", "cb-trenergy2023" ),
        "labels" => [
            "name" => __( "Towns", "cb-trenergy2023" ),
            "singular_name" => __( "Town", "cb-trenergy2023" ),
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "towns", [ "case-studies" ], $args );

}
add_action( 'init', 'cb_register_taxes' );

