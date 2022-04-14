<style>
    .map {
        background-repeat: no-repeat, repeat;
        background-image: url(" <?php echo PART_IMAGES . 'mapvietnam/vietnam-map-' . $_SESSION['languages'] . '.png' ?> ");
        height: 940px;
        width: 600px;
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */
        position: relative;
    }
</style>
<div id="map-space">
    <div class="map">


        <div class="branch bac-ninh">
            <a class="branch-link" href="#"> <?php _e('Branch Bac Ninh') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/bac-ninh-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style=" visibility: hidden"></div>
        </div>

        <div class="branch ha-noi">
            <a class="branch-link" href="#"> <?php _e('Branch Ha Noi') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/ha-noi-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>
        <div class="branch hai-phong">
            <a class="branch-link" href="#"> <?php _e('Branch Hai Phong') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/hai-phong-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>
        <div class="branch thai-binh">
            <a class="branch-link" href="#"> <?php _e('Branch Thai Binh') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/thai-binh-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>
        <div class="branch ha-tinh">
            <a class="branch-link" href="#"> <?php _e('Branch Ha Tinh') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/ha-tinh-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>

        <div class="branch da-nang">
            <a class="branch-link" href="#"> <?php _e('Branch Da Nang') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/da-nang-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>

        <div class="branch lam-dong">
            <a class="branch-link" href="#"> <?php _e('Branch Lam Dong') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/lam-dong-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>

        <div class="branch dong-nai">
            <a class="branch-link" href="#"> <?php _e('Branch Dong Nai') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/dong-nai-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>

        <div class="branch ho-chi-minh">
            <a class="branch-link" href="#"> <?php _e('Branch Ho Chi Minh') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/ho-chi-minh-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>

        <div class="branch tan-thuan">
            <a class="branch-link" href="#"> <?php _e('Branch Tan Thuan') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/ho-chi-minh-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>

        <div class="branch vung-tau">
            <a class="branch-link" href="#"> <?php _e('Branch Vung Tau') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/vung-tau-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content" style="visibility: hidden"></div>
        </div>

        <div class="branch binh-duong">
            <a class="branch-link show-right" href="#"> <?php _e('Branch Binh Duong') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/binh-duong-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content branch-content-left" style="visibility: hidden"></div>
        </div>

        <div class="branch tay-ninh">
            <a class="branch-link show-right" href="#"> <?php _e('Branch Tay Ninh') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/tay-ninh-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content branch-content-left" style="visibility: hidden"></div>
        </div>

        <div class="branch long-an">
            <a class="branch-link show-right" href="#"> <?php _e('Branch Long An') ?> </a>
            <img class="branch-img" src="<?php echo PART_IMAGES . 'mapvietnam/long-an-' . $_SESSION['languages'] . '.png'  ?>" />
            <div class="branch-content branch-content-left" style="visibility: hidden"></div>
        </div>
    </div>
</div>

<script>
    var branchLink = document.querySelectorAll(".branch-link");
    branchLink.forEach(function(e) {
        e.addEventListener("mouseenter", function() {
            this.nextElementSibling.nextElementSibling.style.visibility = "visible";

            var hasShowRight = this.classList.contains('show-right');
            if (hasShowRight) {
                this.nextElementSibling.nextElementSibling.classList.add('showRight');
                this.nextElementSibling.nextElementSibling.classList.remove('closeRight');
            } else {
                this.nextElementSibling.nextElementSibling.classList.add('show');
                this.nextElementSibling.nextElementSibling.classList.remove('close');
            }

        });

        e.addEventListener("mouseleave", function() {
            var hasShowRight = this.classList.contains('show-right');
            if (hasShowRight) {
                this.nextElementSibling.nextElementSibling.classList.add('closeRight');
                this.nextElementSibling.nextElementSibling.classList.remove('showRight');
            } else {
                this.nextElementSibling.nextElementSibling.classList.add('close');
                this.nextElementSibling.nextElementSibling.classList.remove('show');
            }

            setTimeout(function() {
                e.nextElementSibling.nextElementSibling.style.visibility = "hidden";
            }, 500);
        });
    });
</script>