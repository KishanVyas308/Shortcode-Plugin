<?php


/**
 * Plugin Name: Shortcode Plugin
 * Description: A simple WordPress plugin to demonstrate shortcode functionality.
 * Version: 1.0
 * Author: Kishan Vyas
 * Author URI: https://kishanvyas.tech
 * 
 */

// name and email parameters

add_shortcode('employee', 'sp_handle_employee_shortcode');


function sp_handle_employee_shortcode($atts)
{
    // Set default values for the attributes
    $atts = shortcode_atts(
        array(
            'name' => 'Kishan Vyas',
            'email' => 'kishan.vyas@example.com',
        ),
        $atts,
        'employee'
    );

    // Return the employee information
    return '<div style="border:1px solid #ccc; padding:15px; border-radius:8px; background:#f9f9f9; max-width:350px; font-family:sans-serif;">'
        . '<strong style="color:#333;">Employee Name:</strong> <span style="color:#0073aa;">' . esc_html($atts['name']) . '</span><br>'
        . '<strong style="color:#333;">Email:</strong> <span style="color:#555;">' . esc_html($atts['email']) . '</span>'
        . '</div>';
}


// Shortcode with using query 

add_shortcode( 'list-all-posts', 'sp_handle_list_all_post_wp_query' );

function sp_handle_list_all_post_wp_query( $attributes ) 
{

    $attributes = shortcode_atts( array(
        "number" => 4,
    ), $attributes, "list-all-posts" );

    $query = new WP_Query( array(
        "post_per_page" => $attributes["number"],
        "post_status" => "publish"
    ));

    if ( $query -> have_posts()) {

        $outputHtml = '<ul>';
        while ( $query -> have_posts() ) {
            $query -> the_post();
            $outputHtml .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        $outputHtml .= '</ul>';
        return $outputHtml;
    }

    return '<p>No posts found.</p>';

}