<div class="row">


    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top: 2rem">
        <div class="supervisor-incumbent">
            <?php
            $args = array(
                'post_type' => 'supervisor',
                'posts_per_page' => -1,
                'meta_query' => array(array('key' => '_admin_metabox_special', 'value' => 'on',)),
                'orderby' => 'meta_value',
                'order' => 'DESC',
                'meta_key' => '_metabox_order',
            );
            $Query = new WP_Query($args);
            if ($Query->have_posts()) :
                while ($Query->have_posts()) :
                    $Query->the_post();
                    $images = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
            ?>
                    <div class="supervisor-incumbent-item img-item">
                        <h3> <?php the_title(); ?> </h3>
                        <img src="<?php echo $images[0]; ?>" alt="<?php echo get_the_title(); ?>" />
                        <label><?php the_content(); ?></label>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_query();
            wp_reset_postdata();
            ?>

        </div>
    </div>

</div>
<script>
    var MyanimationElements = document.querySelectorAll(".img-item");
    // TAO HIEU UNG KHI CUON NOI DUNG TRAN WEB
    function myCheck1(element) {
        // LAY VI TRI TOP VA BOTTOM CUA ELEMENT
        var rect = element.getClientRects()[0];
        // XAC DINH DO CAO CUA MAN HINH
        var heightScreen = window.innerHeight;

        if (!(rect.bottom < 0 || rect.top > heightScreen)) {
            element.classList.add("show-president");
        }
    }

    function presidentAnimation() {
        // LAY TAT CA CAC DOI TUONG CO CLASS LA .show-on-scroll
        //var animationElements = document.querySelectorAll('.show-on-scroll')
        // CHAY VONG LAP DE THEM CLASS
        MyanimationElements.forEach((el) => {
            myCheck1(el);
        });
    }
</script>