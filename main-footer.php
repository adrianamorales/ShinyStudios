<footer>
  <div id="thumb-tray" class="load-item">
    <div id="thumb-back"></div>
    <div id="thumb-forward"></div>
  </div>
  <!--Control Bar-->
  <div id="controls-wrapper" class="load-item">
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
  </div>
</footer>

<!-- the javascript on bottom to improve loading speed================================================== -->
<script type="text/javascript" src="js/prefixfree.min.js"></script> 
<script src="js/jquery-1.8.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.easing.min.js"></script> 
<script src="js/supersized.3.2.7.min.js"></script> 
<script src="theme/supersized.shutter.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>  
<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="js/jquery.ui.map.min.js"></script> 
<script src="js/jquery.colorbox-min.js"></script> 
<script src="js/custom.js"></script> <!-- put inside custom.js all your javascript code, you can change the fullscreen slider images here also.--> 
<script src="js/jquery.ui.totop.min.js"></script>
<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}  </script> 



<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script>
	jQuery(window).load(function() { 
	$x = $(window).width();   
	if($x > 1024){     
		jQuery("#textfade .row").preloader();    }  
		jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});  
	}); 
</script>
<script type="text/javascript">
    $(document).ready(function() {
      /*
      var defaults = {
          containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
</script>        

</body>
</html>