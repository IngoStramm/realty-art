<?php

// Define the shortcode function
function realty_status_obra($atts)
{
    $post_id = get_the_ID();
    $status_da_obra = get_post_meta($post_id, 'status_da_obra', true); //status_da_obra
    $output = '';
    $output .= '<ul class="ra-status-obra">';

    foreach ($status_da_obra as $item) {
        $progress = $item['porcentagem'];
        $nome = $item['nome'];
        $output .= '<li>';
        $output .= '<circle-progress value="' . $progress . '" max="100" animation-duration="1000" text-format="percent"></circle-progress>';
        $output .= '<span>' . $nome . '</span>';
        $output .= '</li>';
    }
    $output .= '</li>';

    // Generate the output

    // Return the output
    return $output;
}

// Register the shortcode
add_shortcode('realty_status_obra', 'realty_status_obra');
