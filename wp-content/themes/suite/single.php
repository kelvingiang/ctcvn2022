<?php
// lay phan header
get_header();
wp_link_pages(); // HIEN THI PHAN TRANG BAI VIET KHI TRONG BAI CO CHEN <!--nextpage--> TRONG PHAN text
// moi mot <!--nextpage--> se chia thanh  1 trang
// $category = get_the_category(); echo $category[0]->name;
$mainPostID = $post->ID;
?>
<!-- phan noi dung of trang index --------------------------------------- -->
<div class="row">
    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
        <!-- lay cac bai post  -->
        <div>
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();

            ?>
                    <div class="single-space">
                        <label class="single-space-title"><?php the_title(); ?></label>
                        <div class="single-space-content"><?php echo $post->post_content ?></div>
                    </div>

            <?php
                //get_template_part('content', get_post_format());
                endwhile;
            endif;
            ?>
        </div>
        <div style="margin-top: 2rem; border-top: 2rem #04366c solid">
            <ul id="data-list" class="article-list">
                <?php
                // LAY CAC THONG TIN TRONG POST TYPE FORUM VA VI TRI LAY DONG THONG TIN
                $cate =   get_the_category($post->ID);

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => COUNT_POST_ANOTHER,
                    // 'offset' => COUNT_POST_ANOTHER,
                    'category_name' => $cate[0]->slug,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'meta_query' => array(
                        array(
                            'key'       => '_metabox_language',
                            'value'     =>  $_SESSION['languages'],
                            'compare'   => '=',
                        ),
                    ),
                );

                $myQuery = new WP_Query($args);
                if ($myQuery->have_posts()) :
                    $stt = 1;
                    while ($myQuery->have_posts()) :
                        $myQuery->the_post();
                        // CACH NAY LA AN TIN DANG XEM BANG CSS
                        if ($mainPostID == get_the_ID()) {
                            echo '<li data-id="' . $stt . '" style="display: none;">';
                        } else {
                            echo '<li data-id="' . $stt . '" >';
                        }
                ?>

                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>ssss
                        </a>
                        </li>
                    <?php
                        $stt += 1;
                    endwhile;
                    ?>
            </ul>
            <div id="load-more">
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </div>
        <?php
                endif;
                wp_reset_query();
        ?>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
        <?php get_sidebar('single')
        ?>
    </div>
</div>
<script>
    jQuery(document).ready(function() {
        jQuery('#load-more').click(function() {
            var lastID = jQuery("#data-list > li:last-child").attr("data-id");
            var category = '<?php echo $cate[0]->slug ?>';
            var mainID = '<?php echo $mainPostID ?>';
            jQuery.ajax({
                url: '<?php echo get_template_directory_uri() . '/ajax/load-news.php' ?>', // lay doi tuong chuyen sang dang array
                type: 'post', //                data: $(this).serialize(),
                data: {
                    mainID: mainID,
                    lastID: lastID,
                    category: category
                },
                dataType: 'json',
                success: function(data) { // set ket qua tra ve  data tra ve co thanh phan status va message
                    if (data.status === 'done') {
                        jQuery("#data-list").append(data.html);
                    } else if (data.status === 'empty') {
                        jQuery("#load-more").hide();
                    }
                },
                error: function(xhr) {
                    console.log(xhr.reponseText);
                    //console.log(data.status);
                }
            });
        });
    });
</script>



<?php
// lay phan footer
get_footer();
