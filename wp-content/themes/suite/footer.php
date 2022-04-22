           </div>
           </div> <!-- end coontaineer -->
           <?php if (!is_page('check-in')) { ?>
               <div id="back-top-wrapper">
                   <a id="back-top">
                       <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                   </a>
               </div>
               <?php wp_footer(); ?>


               <div id="footer">
                   <div class="footer-bg">
                       <div class="footer-content">
                           <div>
                               <table style="width: 100%">
                                   <tr>
                                       <td style="width: 25%"> <a href="<?php echo home_url('about-main'); ?>">總會章程</a>
                                       </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('about-brach'); ?>">聯絡商會</a>
                                       </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('info-main'); ?>">總會信息</a> </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('info-brach'); ?>">分會信息</a>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td style="width: 25%"> <a href="http://vietnamsos.net" target="_blank">緊急醫院</a>
                                       </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('越�?財�?'); ?>">越南財經</a> </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('越�??�風'); ?>">越南釆風</a> </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('news'); ?>">即時新聞</a> </td>
                                   </tr>
                                   <tr>
                                       <td style="width: 25%"> <a href="<?php echo home_url('the-event'); ?>">本會活動</a> </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('forums'); ?>">留言區</a> </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('recruiter'); ?>">人才招聘</a> </td>
                                       <td style="width: 25%"> <a href="<?php echo home_url('recruitments'); ?>">求職</a>
                                       </td>
                                   </tr>
                               </table>
                           </div>
                           <div class="copy-right">

                               <div style=" text-align: right ">
                                   <?php
                                    require_once(DIR_CLASS . 'online-counter.php');
                                    $online = new DT_Online_counter();
                                    ?>
                                   <ul style="display: inline; color: white">
                                       <li>
                                           <label>在線人數　: <?php echo $online->online(); ?> </label>
                                       </li>
                                       <li>
                                           <label>瀏覽人數　: <?php echo $online->total(); ?> </label>
                                       </li>
                                   </ul>
                               </div>

                               <div style=" text-align: left">
                                   <?php global $mapsx, $mapsy, $hospitalname; ?>
                                   Copyright &copy; - 2015 Design by <a rel="author" href="https://plus.google.com/u/0/106534001476073840633" target="_blank">Digiwin
                                       Software (Vietnam) Co., Ltd.</a>
                                   <!--  Copyright  &copy; -<?php // echo date('Y');               
                                                            ?> --- <?php //bloginfo('sitename')               
                                                                    ?> -->
                               </div>

                           </div>
                       </div>
                   </div>
               </div>

           <?php } ?>
           <script>
               jQuery(document).ready(function() {
                   jQuery('.language-item').on("click", function() {
                       var language = jQuery(this).attr("data-id");

                       jQuery.ajax({
                           url: '<?php echo get_template_directory_uri() . '/ajax/change_languages.php' ?>',
                           dataType: 'json',
                           type: 'post',
                           data: {
                               type: language
                           },
                           success: function(res) {
                               if (res.status === 'ok') {
                                   //window.location = location.href;
                                   //location.reload();
                                   // window.location = 'http://localhost/digiwin';
                                   window.location = '<?php echo get_option('home') ?>';
                               }
                           }
                       });
                   });
               })


               // back to top
               jQuery(function() {
                   jQuery(window).scroll(function() {
                       if (jQuery(this).scrollTop() > 100) {
                           jQuery("#back-top").fadeIn("fast");
                       } else {
                           jQuery("#back-top").fadeOut(1500);
                       }
                   });
                   // scroll body to 0px on click
                   jQuery("#back-top").click(function() {
                       jQuery("body,html").stop(false, false).animate({
                               scrollTop: 0,
                           },
                           1000
                       );
                       return false;
                   });
               });
           </script>


           <!--  KHOI TAO VIEC CHAY SLIDER -->
           <script type="text/javascript" language="javascript">
               jQuery(document).ready(function() {
                   jQuery('.box_skitter_large').skitter({
                       thumbs: false,
                       theme: 'Minimalist',
                       numbers_align: 'center',
                       numbers: false,
                       progressbar: false,
                       dots: false,
                       navigation: false,
                       preview: false,
                       interval: 8000 // thoi gian chuyen hinh]
                   });
               });



               window.onscroll = function() {
                   menuAnimation();
                   if (document.querySelector('.img-item')) {
                       presidentAnimation();
                   }
               }
           </script>

           </body>

           </html>