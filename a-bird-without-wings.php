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
            <h1>Film:<span class="raleway"> <span class="pink">//</span> A Bird Without Wings</span></h1>
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
                    $dir = opendir("img/ABwoW");
                    $active = 0;
                    while (($file = readdir($dir)) !== false) {
                      if(substr( $file, -3 ) == "jpg" or substr( $file, -3 ) == "JPG" or substr( $file, -3 ) == "png" or substr( $file, -3 ) == "PNG") {
                        if ($active == 0) {
                          echo '<div class="active item"><a href="img/ABwoW/'.$file.'" class="gallery_pics magnifier" title="'.$file.'" ><img alt="" src="img/ABwoW/'.$file.'"></a></div>';
                          $active = 1;
                        }
                        else {
                          echo '<div class="item"><a href="img/ABwoW/'.$file.'" class="gallery_pics magnifier" title="'.$file.'" ><img alt="" src="img/ABwoW/'.$file.'"></a></div>';
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
        <blockquote><p>"I used to get called faggot a lot... many different names. I would get bullied a lot on social networking. 
        But I was just so used to my mom calling me names." - Nabeel</p></blockquote>
        
        <h1>The Story</h1>
        <p>The news media loves reporting about school bullies and violent video games, as if we can neatly wrap the guilt package addressed to someone else. But what happens when parents are the abusers? What happens when teachers and counselors turn a blind eye? What happens when child protective services refuse to intervene? 19 year old Nabeel has finally escaped his mother's abuse, but over a decade of pain is hard to erase. </p>
          
        <blockquote><p>"When you're a child and you don't have good parents, you're helpless. You depend on adults and that's just something I never had." - Nabeel</p></blockquote>
          
        <p>A Bird Without Wings is a documentary that will focus on how the United States government handles child abuse by examining Nabeel's history with various child protective servies. Diving deep into Nabeel's past, we will see the physical, mental, and verbal abuse he suffered. Talking with experts in the field of law and social services, we will examine how Nabeel's case fell through the cracks. Following Nabeel, we will learn if it is possible for him to escape the terrifying memories in order to find his own identity.</p>

				<h1>The Project</h1>
       <p>A Bird Without Wings is a documentary that the director, Angela Wolf, has wanted to do for a long time. It is a film that she is particularly attached to because she was there during some of Nabeel's hardest times. She knows firsthand about Nabeel's physical and emotional abuse at the hands of his mother, and of the lack of action from his father to stop Nabeel's abuse. </p>
        
       <p>Nabeel was first sent to the hospital when he was 6 years old because of a beating his mother gave him. Unfortunately, however, she retained custody of Nabeel throughout his entire childhood. He wasn't able to be free of his mother's abuse until he became of legal age. </p>
        
       <p>Angela tried to help him when Nabeel told her about his situation, but soon found out that Child Protective Services couldn't do anything.  Being abused wasn’t enough for the judicial system; he had to show intense physical evidence of abuse before an investigation could be started. </p>
        
       <p>This is why Angela, the producers, and the rest of the crew want to make this film. It is time to tell this story, time to take action, time be a superhero and do something about child abuse.</p>
          
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
        <section class="thumbImage"> <img src="img/abwow/thumbs/websitethumb.jpg" alt="" class="fullwidth">
          <div class="thumbTextWrap">
            <div class="thumbText">
              <h3 class="sectionTitle">Website</h3>
              <a class="thumbLink portfolio_pics" href="http://www.abirdwithoutwings.com/"  title="A Bird without Wings"></a> 
            </div>
          </div>
        </section>
      </article>
  
      <article class="portfolio" data-category="links">
        <section class="thumbImage"> <img src="img/abwow/thumbs/fundraiserthumb.jpg" alt="" class="fullwidth">
          <div class="thumbTextWrap">
            <div class="thumbText">
              <h3 class="sectionTitle">Fundraiser Video</h3>
              <a class="thumbLink portfolio_pics" href="http://vimeo.com/60339224"  title="A Bird without Wings"></a> 
            </div>
          </div>
        </section>
      </article>

      <article class="portfolio" data-category="links">
        <section class="thumbImage"> <img src="img/abwow/thumbs/abusethumb.jpg" alt="" class="fullwidth">
          <div class="thumbTextWrap">
            <div class="thumbText">
              <h3 class="sectionTitle">Abuse Stops With Me</h3>
              <a class="thumbLink portfolio_pics" href="http://vimeo.com/69757043"  title="A Bird without Wings"></a> 
            </div>
          </div>
        </section>
      </article>
      
      <?php
        $dir = opendir("img/ABwoW/gallery");
        while (($file = readdir($dir)) !== false) {
          if(substr( $file, -3 ) == "jpg" or substr( $file, -3 ) == "JPG" or substr( $file, -3 ) == "png" or substr( $file, -3 ) == "PNG") {
            echo '<article class="portfolio" data-category="behind-the-scenes"><section class="thumbImage"> <img src="img/abwow/gallery/'.$file.'" alt="" class="fullwidth"><div class="thumbTextWrap"><div class="thumbText"> <h3 class="sectionTitle">Behind the Scenes</h3> <a class="thumbLink portfolio_pics" href="img/abwow/gallery/'.$file.'"  title="A Bird without Wings"></a>  </div></div></section></article>';
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
