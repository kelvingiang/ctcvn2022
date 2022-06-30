<?php
// dien kien where de lay du lieu
$arr = array(
    'post_type' => 'member',
    'meta_query' => array(
        array('key' => 'm_user', 'value' => @$_SESSION['login'])
    ),
);
?>
<!--  
    phan nay kiem tra bang ajax, code xu ky ajax dc viet tai file js va dc add vao o dau trang (checkajax.js)
-->
<div>
    <?php if (!isset($_SESSION['login'])) { ?>
        <div class="login-space">
            <div class="login-from">
                <form id="f_login" name="f_login" method="post" action="">
                    <div>
                        <p id="strMessageLogin" class="error-mess"></p>
                    </div>

                    <div>
                        <label class='label-title'>
                            <?php _e('User Name'); ?>
                        </label>
                    </div>

                    <div>
                        <input type="text" required placeholder="Username" id="l_user" name="l_user" autocomplete="off" />
                    </div>

                    <div style='height: 20px'></div>

                    <div>
                        <label class='label-title'>
                            <?php _e('Password') ?>
                        </label>
                    </div>

                    <div>
                        <input type="password" required placeholder="Password" id="l_pass" name="l_pass" autocomplete="off" />
                    </div>


                    <div class="btn-space" style="margin-top: 2rem">
                        <button type=" submit" class="btn-my" name="btn_login" id="btn_submit">
                            <?php _e('Login', 'suite'); ?>
                        </button>

                        <button type="button" class="btn-my" data-toggle="modal" data-target="#ForgetPass">
                            <?php _e('Forget Password', 'suite'); ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php
    } else {
        if ($_SESSION['login']) {
        ?>
            <!-- lay thông tin user -->
            <?php
            $objMember = current(get_posts($arr));
            //$_SESSION['login_id'] = $objMember->ID;
            if ($objMember) {
                $getMeta = get_post_meta($objMember->ID); // lay gia tri tu metabox 
                $m_image = $getMeta['m_image'][0]; //
            }
            ?>
            <div style=" border: 1px solid #B7C1CC; border-radius: 4px;  padding: 15px; background-color:#DBDBDB ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <h5 style="font-weight: bold;  font-size: 15px">
                            <a href="#" data-toggle="modal" data-target="#myModal" style="margin-right: 10px">
                                <img class="avatar" src="<?php echo PART_IMAGES_AVATAR . $m_image; ?>" />
                            </a>
                            <?php echo $getMeta['m_fullname'][0]; ?> <?php _e('您好 ! ', 'suite'); ?>
                        </h5>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label style=" font-size: 0.8em">帳號 : <?php echo $_SESSION['login']; ?></label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <label>
                            <a href="<?php echo home_url('/register/') ?>" class="btn btn-primary">
                                帳號資料 <i class="my_i"> thông tin tài khoản</i>
                            </a>
                        </label>
                    </div>
                </div>
                <div class="row" style=" text-align: left; margin-top: 10px">
                    <?php
                    if ($_SESSION['login_type'] == 'recruit') {
                        //wp_redirect( home_url('recruitments'));
                    ?>
                        <div class="col-md-3 col-sm-6 col-xs-3 " style="margin: 0px">
                            <a href="<?php echo home_url('/recruit/?dt=4') ?>" class="btn btn-primary" style="letter-spacing: 3px">
                                <?php _e('dangtuyen', 'suite'); ?>
                            </a>
                        </div>
                    <?php
                    } elseif ($_SESSION['login_type'] == 'apply') {
                        //  wp_redirect(home_url('recruiter'));
                    ?>
                        <div class="col-md-3 col-sm-6 col-xs-3" style="margin:0px">
                            <a href="<?php echo home_url('/recruit/?dt=3') ?>" class="btn btn-primary">
                                履歷 <i class="my_i">lý lịch</i>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col-md-3 col-sm-6 col-xs-3">
                            <a href="<?php echo home_url('/article/') ?>" class="btn btn-primary" style="letter-spacing: 3px">
                                <?php _e('Article', 'suite'); ?>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-3">
                            <a href="<?php echo home_url('/recruit/?dt=4') ?>" class="btn btn-primary" style="letter-spacing: 3px">
                                <?php _e('dangtuyen', 'suite'); ?>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="col-md-3 col-sm-6 col-xs-3"><a href="<?php echo home_url('/logout/'); ?>" class="btn btn-primary"><?php _e('Logout', 'suite'); ?> <i class="my_i"> đăng xuất</i></a></div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>

<!-- B ----------  phan cap nhat lai hinh hinh avata cua member ---->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form id="f-avata" name="f-avata" action="" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php _e('Ａvatar', 'suite'); ?></h4>
                    <div style=" clear: both"></div>
                </div>
                <div class="modal-body">
                    <div id="default-imgfe"> </div>
                    <div id="upload-image">
                        <div id="show-img"> </div>
                        <div>
                            <label><?php _e('Choose a Image', 'suite'); ?></label>
                            <input type="file" id="myfile" name="myfile" />
                            <label id="mess"></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="<?php time() ?>" />
                    <input type="submit" value="<?php _e('Submit', 'suite'); ?>" id="btn_changeImg" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- E ----------  phan cap nhat lai hinh hinh avata cua member ---->

<!--FORGET PASSWORD-->
<!--  B----------- hien thi popup lay lai password khi bi quen -->
<div class="modal fade" id="ForgetPass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form name="f-getPass" id="f-getPass" action="" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <?php //_e('Get New Password'); 
                        ?>
                    </h4>
                    <image id="waiting-img" name="waiting-img" src="<?php echo PART_IMAGES . 'loading.gif' ?>" />
                    <div style=" clear: both"></div>
                </div>
                <div class="modal-body row">
                    <div class="col-12">
                        <label class="label-title"><?php _e('User Name') ?></label>
                        <label id="passportMess" class="error-mess"></label>
                    </div>
                    <div class="col-12">
                        <input type="text" placeholder="<?php _e('User Name'); ?>" id="g-passport" name="g-passport" />
                    </div>
                    <div class="col-12" style="height: 2rem;"></div>
                    <div class="col-12">
                        <label class="label-title"><?php _e('E-mail') ?></label>
                        <label id="emailMess" class="error-mess"></label>
                        <label id="forgetPassMess" class="error-mess"></label>
                    </div>
                    <div class="col-12">
                        <input type="text" placeholder="<?php _e('E-mail'); ?>" id="g-email" name="g-email" />
                    </div>
                </div>



                <div class="modal-footer">
                    <div class="btn-space">
                        <button type="submit" id="submit-getPass" class="btn-my"><label>
                                <?php _e('Submit_'); ?>
                        </button>
                        <button type="reset" id="cancel-getPass" class="btn-my">
                            <?php _e('Cancel_'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div><!-- /.modal-content -->




<!--  E----------- hien thi popup lay lai password khi bi quen -->

<script type="text/javascript">
    // show hinh anh truoc khi up len
    jQuery(function() {
        jQuery("#myfile").on("change", function() {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader)
                return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function() { // set image data as background of div
                    jQuery("#show-img").css("background-image", "url(" + this.result + ")");
                };
            }
        });
    });
</script>

<!-- chuyen data den trang ajax  -->
<script type="text/javascript">
    // tại bien de chuyen dg link sang cho js toi file .php de xu va tra ve ket qua sau khi xu ly
    var objLoginData = {
        url: '<?php echo PART_AJAX . 'login.php' ?>'
    };
    // phan quen mat khau xin lai mat khau mmoi    
    var obForgetPass = {
        url: '<?php echo PART_AJAX . 'forgetpass.php' ?>'
    };


    //goi ajax de thay doi hinh avatar cua member
    var objAvatarData = {
        url: '<?php echo PART_AJAX . 'changeavatar.php' ?>'
    };

    jQuery(document).ready(function() {
        jQuery('#btn-registry').click(function() {
            window.location = ('<?php echo home_url('/register/'); ?>');
        });

        // PHAN LAY LAI PASSWORD BI QUEN
        // KHI CLICK SUBMIT CHO SHOW HINIH WIATING
        jQuery('#submit-getPass').click(function() {
            jQuery('#waiting-img').show();
        });
        // KHI NHAP LAI EMAIL XOA CAU THONG BAO
        jQuery('#g-email').keypress(function() {
            jQuery('#forgetPassMess').text('');
            jQuery('#emailMess').text('');
        });
        jQuery('#g-passport').keypress(function() {
            jQuery('#forgetPassMess').text('');
            jQuery('#passportMess').text('');
        });
        //NUT CANCEL
        jQuery('#cancel-getPass').click(function() {
            jQuery('#ForgetPass').modal('hide');
            jQuery('#g-email').val('');
            jQuery('#forgetPassMess').text('');
            jQuery('#emailMess').text('');
            jQuery('#passportMess').text('');
        });


    });
</script>