<?php
/*
  Template Name: About Introduction Page
 */
get_header();
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class='head-title'>
            <h2> <?php _e('The Council of Taiwanese Chambers introduction') ?> </h2>
        </div>
        <div class="info-bg">
            <?php echo get_post_meta('1', '_introduction_' . $_SESSION['languages'], true) ?>
        </div>
    </div>
</div>
<?php
get_footer();
ob_flush();   // neu bao loi PHP Warning: Cannot modify header information ??headers already sent by
