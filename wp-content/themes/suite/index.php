<?php
// lay phan header
get_header();
?>
<!-- phan noi dung of trang index --------------------------------------- -->
<div>
    <?php mySlider('home') ?>
</div>
<div>
    <?php get_template_part('templates/template', 'presidents-current'); ?>
</div>

<div>
    <?php get_template_part('templates/template', 'home-map') ?>
</div>

<?php
// lay phan footer
get_footer();
