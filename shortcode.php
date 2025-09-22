<?php

/**
 * realty_status_obra
 *
 * @return string
 */
function realty_status_obra()
{
    $post_id = get_the_ID();
    $status_da_obra = get_post_meta($post_id, 'status_da_obra', true);
    $output = '';

    if ($status_da_obra) {
        $output .= '<ul class="ra-status-obra">';
        foreach ($status_da_obra as $item) {
            $progress = $item['porcentagem'];
            $nome = $item['nome'];
            $output .= '<li>';
            $output .= '<circle-progress value="' . $progress . '" max="100" animation-duration="2000" text-format="percent"></circle-progress>';
            $output .= '<span>' . $nome . '</span>';
            $output .= '</li>';
        }
        $output .= '</ul>';
    }
    return $output;
}
add_shortcode('realty_status_obra', 'realty_status_obra');
