
<!--++ COMPLETE ++-->

<?php
	include('main-header.php');
?>
<!--+++++++++++- content++++++++++++++-->
<div id="wrapper" >
  <div id="page">
    <div class="header">
      <div class="container clearfix">
        <div class="row">
          <div class="span12"> 
            <!-- Portfolio title -->
            <h1>Film:<span class="raleway"> <span class="pink">//</span> Complete</span></h1>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container contentStart">
      <div class="row">
        <div class="span12">
         <div id="myCarousel" class="carousel slide proj-det"> 
                  <!-- Carousel items -->
                  <div class="carousel-inner main-img">
                  <?php
                    $dir = opendir("img/complete");
                    $active = 0;
                    while (($file = readdir($dir)) !== false) {
                      if(substr( $file, -3 ) == "jpg" or substr( $file, -3 ) == "JPG" or substr( $file, -3 ) == "png" or substr( $file, -3 ) == "PNG") {
                        if ($active == 0) {
                          echo '<div class="active item"><a href="img/complete/'.$file.'" class="gallery_pics magnifier" title="'.$file.'" ><img alt="" src="img/complete/'.$file.'"></a></div>';
                          $active = 1;
                        }
                        else {
                          echo '<div class="item"><a href="img/complete/'.$file.'" class="gallery_pics magnifier" title="'.$file.'" ><img alt="" src="img/complete/'.$file.'"></a></div>';
                        }
                      }
                    }
                    closedir($dir);
                  ?>
                  </div>
                  <!-- Carousel nav --> 
                  <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a> </div>
        </div>
      </div>
      <div class="row contentStart">
        <div class="span12">
        <h1>The Story</h1>
        <p>A day in the life of a struggling artist as she carefully plans out her ultimate masterpiece.</p>
        </div>
      </div>
    </div>
    

  
    <div class="gallerychooser">
      <ul class="gallerychooserList">
        <li class="current"><a data-filter="article.portfolio" href="#">All</a></li>
        <li><a data-filter="article.portfolio[data-category~='links']" href="#">Links</a></li>
        <li><a data-filter="article.portfolio[data-category~='behind-the-scenes']" href="#">Behind-the-scenes</a></li>
      </ul>
    </div>
    <section class="portfolio_container">
      <article class="portfolio" data-category="links">
        <section class="thumbImage"> <img src="img/Complete/thumbs/imdbthumb.jpg" alt="" class="fullwidth">
          <div class="thumbTextWrap">
            <div class="thumbText">
              <h3 class="sectionTitle">IMDB</h3>
              <a class="thumbLink portfolio_pics" href="http://www.imdb.com/title/tt1920873/?ref_=nm_flmg_wr_2"  title="Complete"></a> 
            </div>
          </div>
        </section>
      </article>

      <article class="portfolio" data-category="links">
        <section class="thumbImage"> <img src="img/Complete/thumbs/filmthumb.jpg" alt="" class="fullwidth">
          <div class="thumbTextWrap">
            <div class="thumbText">
              <h3 class="sectionTitle">Film</h3>
              <a class="thumbLink portfolio_pics" href="http://vimeo.com/22993088"  title="Complete"></a> 
            </div>
          </div>
        </section>
      </article>
      
      <?php
        $dir = opendir("img/complete/gallery");
        while (($file = readdir($dir)) !== false) {
          if(substr( $file, -3 ) == "jpg" or substr( $file, -3 ) == "JPG" or substr( $file, -3 ) == "png" or substr( $file, -3 ) == "PNG") {
            echo '<article class="portfolio" data-category="behind-the-scenes"><section class="thumbImage"> <img src="img/complete/gallery/'.$file.'" alt="" class="fullwidth"><div class="thumbTextWrap"><div class="thumbText"> <h3 class="sectionTitle">Behind the Scenes</h3> <a class="thumbLink portfolio_pics" href="img/complete/gallery/'.$file.'"  title="complete"></a>  </div></div></section></article>';
          }
        }
        closedir($dir);
      ?>
      
    </section>
    
  </div>
</div>
<!--+++++++++++- end content++++++++++++++-->
<?php
	include('main-footer.php');
?>
