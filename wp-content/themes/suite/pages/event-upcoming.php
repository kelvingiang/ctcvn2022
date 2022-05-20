<?php
/*
  Template Name: Event Upcoming Page
 */
get_header();
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <?php get_template_part('templates/template', 'advertising'); ?>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12" style="margin-bottom: 10px">
        <div class='head-title'>
            <div class="title">
                <h2 class="head"> <?php _e('Event Upcoming'); ?> </h2>
            </div>
        </div>

        <?php $my_query = query_custom_post_list('event', 'event-upcoming', COUNT_POST_NEWEST,  $_SESSION['languages']);
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $my_query->the_post();
        ?>
                <div class="gray-group">
                    <div class="gray-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
        <?php
            }
            wp_reset_postdata();
            wp_reset_query();
        }
        ?>

        <div>
            <?php get_template_part('templates/template', 'post-more') ?>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
        <?php get_sidebar() ?>
    </div>
</div>

<?php
get_footer();
  // neu bao loi PHP Warning: Cannot modify header information ??headers already sent by
  // neu bao loi PHP Warning: Cannot modify header information ??headers already sent by
