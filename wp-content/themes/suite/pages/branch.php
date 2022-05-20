<?php
/*
  Template Name: Branch  Page
 */
// neu bao loi PHP Warning: Cannot modify header information – headers already sent by
get_header();

require_once DIR_CODES . 'my-list.php';
$my_list = new Codes_My_List();
$param = $wp->query_vars;
$branch_name = $my_list->get_country($param['b']);

$posts = get_posts([
    'post_type'  => 'brach',
    'title' => $branch_name,
]);

$branch_ID = $posts[0]->ID;


?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class='head-title'>
            <h2> <?php echo $posts[0]->post_title; ?> </h2>
        </div>
        <div class="info-bg">
            <div>
                <?php echo get_post_meta($branch_ID, 'b_contact', true) ?>
            </div>
            <div>
                <?php echo get_post_meta($branch_ID, 'b_phone', true) ?>
            </div>
            <div>
                <?php echo get_post_meta($branch_ID, 'b_tel', true) ?>
            </div>
            <div>
                <?php echo get_post_meta($branch_ID, 'b_email', true) ?>
            </div>
            <div>
                <?php echo get_post_meta($branch_ID, 'b_address', true) ?>
            </div>
            <div>
                <?php echo $posts[0]->post_content; ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
