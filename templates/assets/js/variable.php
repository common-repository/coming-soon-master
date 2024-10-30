<script>
//
// config file
// --------------------------------------------------
// customize the template function via this file
//

//
// countdown
// --------------------------------------------------
//

var countdownDate = "<?php echo date('m/d/Y',strtotime($countdownDate)); ?>";

var date = countdownDate.split("/");

var countdownTime = "<?php echo $countdownTime; ?>";
var time = countdownTime.split(":");

// [true, false] - enable / disable countdown
var _countdown_toggle =                           <?php echo $enableCountdown; ?>; //true

// 2018[year] - 12[month] - 01[day]
var _countdown_date =                             [date[2], date[0], date[1]];

// 02[Hour] - 12[Minute]
var _countdown_time =                             [time[0], time[1]];

//
// overlay
// --------------------------------------------------
//
// overlay color doesnt mean home section background color
//

// [true, false] - enable / disable overlay
var _site_bg_overlay_toggle =                     <?php echo $pageOverlay; ?>;

// overlay color
var _site_bg_overlay_color =                      '<?php echo $pageSecColor; ?>';

// overlay color opacity
var _site_bg_overlay_opacity =                    <?php echo $pageSecOpacity; ?>;

//
// background
// --------------------------------------------------
// choose background version for both desktop and mobile :)
//

//////////////////////////////////////////////////
// for desktop
//////////////////////////////////////////////////

var _bg_style_desktop =                           <?php echo $csmTemplate; ?>;

//////////////////////////////////////////////////
// for mobile
//////////////////////////////////////////////////

var _bg_style_mobile =                            <?php echo $csmTemplate; ?>;


//////////////////////////////////////////////////
// if _bg_style == 0 (flat color)
//////////////////////////////////////////////////

// background color
var _bg_color =                                   '<?php echo $tBgColor; ?>'; //#252733


//////////////////////////////////////////////////
// Successful submission message
//////////////////////////////////////////////////

var _success_subs_text =                          '<?php echo $successSubsText; ?>';

</script>