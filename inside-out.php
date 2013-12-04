<!-- +++++ INSIDE OUT +++++ -->

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
            <h1>Film:<span class="raleway"> <span class="pink">//</span> Inside Out</span></h1>
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
                    $dir = opendir("img/inside-out");
                    $active = 0;
                    while (($file = readdir($dir)) !== false) {
                      if(substr( $file, -3 ) == "jpg" or substr( $file, -3 ) == "JPG" or substr( $file, -3 ) == "png" or substr( $file, -3 ) == "PNG") {
                        if ($active == 0) {
                          echo '<div class="active item"><a href="img/inside-out/'.$file.'" class="gallery_pics magnifier" title="'.$file.'" ><img alt="" src="img/inside-out/'.$file.'"></a></div>';
                          $active = 1;
                        }
                        else {
                          echo '<div class="item"><a href="img/inside-out/'.$file.'" class="gallery_pics magnifier" title="'.$file.'" ><img alt="" src="img/inside-out/'.$file.'"></a></div>';
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
        <p>Conn, a shy kid who prefers the company of books, finds himself in a dilemma when a girl named Attie threatens to turn his world inside out.</p> 
        </div>
      </div>
    </div>
    
    <div class="gallerychooser">
      <ul class="gallerychooserList">
        <li class="current"><a data-filter="article.portfolio" href="#">Links</a></li>
      </ul>
    </div>
    <section class="portfolio_container">
      <article class="portfolio">
        <section class="thumbImage"> <img src="img/inside-out/thumbs/imdbthumb.jpg" alt="" class="fullwidth">
          <div class="thumbTextWrap">
            <div class="thumbText">
              <h3 class="sectionTitle">IMDB</h3>
              <a class="thumbLink portfolio_pics" href="http://www.imdb.com/title/tt2081278/?ref_=nm_flmg_wr_3"  title="Inside Out"></a> 
            </div>
          </div>
        </section>
      </article>

      <article class="portfolio">
        <section class="thumbImage"> <img src="img/inside-out/thumbs/filmthumb.jpg" alt="" class="fullwidth">
          <div class="thumbTextWrap">
            <div class="thumbText">
              <h3 class="sectionTitle">Film</h3>
              <a class="thumbLink portfolio_pics" href="http://vimeo.com/27727206"  title="Inside Out"></a> 
            </div>
          </div>
        </section>
      </article>
    </section>

  </div>
</div>
<!--+++++++++++- end content++++++++++++++-->
<?php
	include('main-footer.php');
?>
