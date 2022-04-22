<?php

function query_supervisor_list($val)
{
    $args = array(
        'post_type' => 'supervisor',
        'posts_per_page' => -1,
        'meta_query' => array(array('key' => '_admin_metabox_special', 'value' => $val,)),
        'orderby' => 'meta_value',
        'order' => 'DESC',
        'meta_key' => '_metabox_order',
    );
    $Query = new WP_Query($args);
    return $Query;
}
