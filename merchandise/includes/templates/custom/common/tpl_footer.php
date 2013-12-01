<?php
/**
 * Common Template - tpl_footer.php
 *
 * this file can be copied to /templates/your_template_dir/pagename<br />
 * example: to override the privacy page<br />
 * make a directory /templates/my_template/privacy<br />
 * copy /templates/templates_defaults/common/tpl_footer.php to /templates/my_template/privacy/tpl_footer.php<br />
 * to override the global settings and turn off the footer un-comment the following line:<br />
 * <br />
 * $flag_disable_footer = true;<br />
 *
 * @package templateSystem
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_footer.php 15511 2010-02-18 07:19:44Z drbyte $
 */
require(DIR_WS_MODULES . zen_get_module_directory('footer.php'));
?>

<?php
if (!isset($flag_disable_footer) || !$flag_disable_footer) {
?>

<!--bof-banner #5 display -->
<?php
  if (SHOW_BANNERS_GROUP_SET5 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET5)) {
    if ($banner->RecordCount() > 0) {
?>
<div id="bannerFive" class="banners"><?php echo zen_display_banner('static', $banner); ?></div>
<?php
    }
  }
?>
<!--eof-banner #5 display -->
<div id="footer">
<div class="container">
  <div id="controls"> 
    <div id="credits_footer"><small>Shiny Studios LLC &copy; 2013 </small></div>
    <div id="social">
<small> Follow us: </small>
<a class="facebook tooltips" data-container="body" data-placement="top" data-trigger="hover" data-title="Facebook" href="https://www.facebook.com/shinystudios"><i class="fa fa-facebook-square fa-fw"></i></a>  
<a class="twitter tooltips" data-container="body" data-placement="top" data-trigger="hover" data-title="Twitter" href="https://twitter.com/shiny00studios"><i class="fa fa-twitter fa-fw"></i></a>
    <a class="vimeo tooltips" data-container="body" data-placement="top" data-trigger="hover" data-title="Vimeo" href="http://http://vimeo.com/shiny00studios"><i class="fa fa-vimeo-square fa-fw"></i></a> </div>
<a id="tray-button" class="tooltips" data-container="body" data-placement="top" data-trigger="hover" data-title="open slides"><i class="icon-folder-close-alt icon-large"></i></a> </div>
<div id="feeds">
  <div class="twitterfeed"><a class="twitter-timeline" height="100" data-dnt="true" href="https://twitter.com/shiny00studios" data-widget-id="398236128035094529">Tweets by @shiny00studios</a></div>
</div>
</div>

<!-- the javascript on bottom to improve loading speed================================================== -->
<script src="../js/jquery-1.8.3.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.easing.min.js"></script> 
<script src="../js/supersized.3.2.7.min.js"></script> 
<script src="../theme/supersized.shutter.min.js"></script>
<script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script>  
<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="../js/jquery.ui.map.min.js"></script> 
<script src="../js/jquery.colorbox-min.js"></script> 
<script src="../js/custom.js"></script> <!-- put inside custom.js all your javascript code, you can change the fullscreen slider images here also.--> 
<script src="../js/jquery.ui.totop.min.js"></script>
<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='../js/jquery.preloader.js'></"+"script>");}  </script> 

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script type="text/javascript">
    $(document).ready(function() {
      $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<?php
} // flag_disable_footer
?>