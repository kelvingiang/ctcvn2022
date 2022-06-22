    <div id="branch-slider">
        <div class="owl-carousel owl-theme branch-slider-list">
            <div class="branch-slider-item">
                <img class="map-img" src="<?php echo PART_IMAGES . 'branch/900-500.png' ?>" />
            </div>
            <div class="branch-slider-item">
                <img class="map-img" src="<?php echo PART_IMAGES . 'branch/900-500.png' ?>" />
            </div>
            <div class="branch-slider-item">
                <img class="map-img" src="<?php echo PART_IMAGES . 'branch/900-500.png' ?>" />
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('#branch-slider .owl-carousel').owlCarousel({

                loop: true,
                margin: 10,
                nav: true,
                autoplay: false,
                auotplayTimeout: 50000,
                dots: false,
                autoplayHoverPause: true,
                items: 1,
                navText: ["<i class='fa fa-chevron-left branch-left'></i>",
                    "<i class='fa fa-chevron-right branch-right'></i>"
                ]

            });


        });
    </script>