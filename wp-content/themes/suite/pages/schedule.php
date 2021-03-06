<?php
/*
  Template Name:  Schedule  Page
 */

// neu bao loi PHP Warning: Cannot modify header information – headers already sent by
get_header();
global $wpdb;
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <?php
        // PHAN get_resuls GET DATA FROM MY CREATE TABEL
        $table = $wpdb->prefix . 'schedule';
        $query = "SELECT * FROM {$table} WHERE status = 1  ORDER BY year  DESC, month  DESC, day  DESC";
        $reback = $wpdb->get_results($query, ARRAY_A);
        ?>
        <div class='head-title'>
            <h2 class="head"> 行事曆 </h2>
        </div>

        <?php
        $tmp = array();
        foreach ($reback as $arg) {
            $tmp[$arg['month'] . ' / ' . $arg['year']][] = $arg['id'];
        }
        $output = array();
        foreach ($tmp as $type => $labels) {
            $output[] = array(
                'month' => $type,
                'id' => $labels
            );
        }
        $ids = array();
        foreach ($output as $value) {
            $ids = $value['id'];
        ?>
            <div class="schedule_month"><?php echo $value['month'] ?></div>
            <?php
            foreach ($ids as $id) {
                foreach ($reback as $item) {
                    if (in_array($id, $item)) {
            ?>
                        <div class="row schedule-item">
                            <div class="col-md-12 schedule-title">
                                <label><?php echo $item['title']; ?></label>
                                <i class="fa fa-chevron-circle-down my-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-12 schedule-text">
                                <label>日期:</label> <?php echo $item['date'] . '-' . $item['weekdays']; ?>
                                <label> - - 時間:</label> <?php echo $item['time']; ?>
                            </div>
                            <div class="col-md-12 my-hide schedule-hide">
                                <div>
                                    <label>地點:</label> <?php echo $item['place']; ?></br>
                                    <label>商會:</label> <?php echo $item['branch']; ?>
                                </div>
                                <div>
                                    <label>備註:</label> <?php echo $item['note']; ?>
                                </div>
                            </div>
                        </div>

        <?php
                    }
                }
            }
            $ids = null;
        }
        ?>
    </div>
</div>
<?php
get_footer();
// neu bao loi PHP Warning: Cannot modify header information – headers already sent by
?>
<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery('.schedule-item').click(function() {
            jQuery('.schedule-item').children('.my-hide').each(function() {
                jQuery('.schedule-item').children().removeClass('schedule-show');
                jQuery('.schedule-item').children('.my-hide').addClass('schedule-hide');
            })

            jQuery(this).children().removeClass('schedule-hide');
            jQuery(this).children('.my-hide').addClass('schedule-show');

            jQuery('.schedule-hide').slideUp('fast');
            jQuery('.schedule-show').slideDown('slow');

            jQuery('.schedule-item').css('background-color', '');
            jQuery('.schedule-show').parent('.schedule-item').css('background-color', 'rgba(239, 239, 239,1)');

            // jQuery(this).css('background-color', 'rgb(239, 239, 239)');

        });
    });
</script>