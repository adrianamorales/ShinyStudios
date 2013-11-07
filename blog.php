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
            <!-- The Blog title -->
            <h1>The<span class="cyan"> Blog</span> <span class="raleway"> <span class="pink">//</span> What'S new in our company.</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container blogging">
      <div class="row">
        <article class="span8">
          <div class="inner">
            <ul class="list-blog">
              <li>
                <h2>Duis autem vel eum iriure dolor</h2>
                <div class="date"><span class="day">11</span><span class="month">Mar</span><span class="year">2013</span></div>
                <div class="name-author">by <a href="#">Admin</a></div>
                <div class="tags">Tags:
                  <ul class="taglist">
                    <li><a href="#">Models</a> /</li>
                    <li><a href="#">Photography</a> /</li>
                    <li><a href="#">Women</a></li>
                  </ul>
                </div>
                <a class="comments_listview" href="#"><i class="icon-comments"></i>11 comments</a>
                <div class="clear"></div>
                <div id="myCarousel" class="carousel slide proj-det"> 
                  <!-- Carousel items -->
                  <div class="carousel-inner main-img">
                    <div class="active item"><a href="img/blog/post1.jpg" class="gallery_pics magnifier" title="Shadow in Motion" ><img alt="" src="img/blog/post1.jpg"></a></div>
                    <div class="item"><a href="img/blog/post2.jpg" class="gallery_pics magnifier" title="Design with Passion" ><img alt="" src="img/blog/post2.jpg"></a></div>
                  </div>
                  <!-- Carousel nav --> 
                  <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a> </div>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum delenit augue duis dolore te feugait nulla facilisi.</p>
                <a class="btn btn-1" href="#">Read More</a> </li>
              <li class="last">
                <h2><span>Hendrerit in vulputate velit esse molestie</h2>
                <div class="date"><span class="day">02</span><span class="month">Feb</span><span class="year">2013</span></div>
                <div class="name-author">by <a href="#">Admin</a></div>
                <div class="tags">Tags:
                  <ul class="taglist">
                    <li><a href="#">Models</a> /</li>
                    <li><a href="#">Photography</a> /</li>
                    <li><a href="#">Women</a></li>
                  </ul>
                </div>
                <a class="comments_listview" href="#"><i class="icon-comments"></i>5 comments</a>
                <div class="clear"></div>
                <div class="blogimg"><a href="img/blog/post2.jpg" class="gallery_pics magnifier" title="Fullscreen" ><img src="img/blog/post2.jpg" alt=""></a></div>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum delenit augue duis dolore te feugait nulla facilisi.</p>
                <a class="btn btn-1" href="#">Read More</a> </li>
            </ul>
          </div>
          <!---Pagination-->
          <div class="container">
            <div class="row">
              <div class="span8">
                <div class="pagination">
                  <ul>
                    <li class="previous"><a href="#"><i class="icon-chevron-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li class="next"><a href="#"><i class="icon-chevron-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="span4">
          <h3 class="header_line"><span>Search</span></h3>
          <form accept-charset="utf-8" method="GET" action="#" id="search">
            <div class="clearfix">
              <input type="text" onfocus="if(this.value =='' ) this.value=''" onblur="if(this.value=='') this.value=''" name="s">
              <a class="btn btn-1" onclick="document.getElementById('search').submit()" href="#">Search</a> </div>
          </form>
          <h3 class="header_line"><span>Categories</span></h3>
          <ul class="list side extra">
            <li><i class="icon-angle-right"></i><a href="#">Ut wisi enim ad minim veniam</a></li>
            <li><i class="icon-angle-right"></i><a href="#">Quis nostrud exerci tation ullamcorper</a></li>
            <li><i class="icon-angle-right"></i><a href="#">Suscipit lobortis nisl ut aliquip</a></li>
            <li><i class="icon-angle-right"></i><a href="#">Commodo consequat</a></li>
            <li><i class="icon-angle-right"></i><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></li>
            <li><i class="icon-angle-right"></i><a href="#">Vulputate velit esse molestie consequat</a></li>
            <li><i class="icon-angle-right"></i><a href="#">Fel illum dolore eu feugiat nulla</a></li>
            <li><i class="icon-angle-right"></i><a href="#">Facilisis at vero eros et accumsan iusto</a></li>
            <li><i class="icon-angle-right"></i><a href="#">Odio dignissim qui blandit</a></li>
            <li class="last"><i class="icon-angle-right"></i><a href="#">Praesent luptatum zzril delenit augue</a></li>
          </ul>
          <h3 class="header_line"><span>Archive</span></h3>
          <div class="wrapper">
            <ul class="list side1 list-pad">
              <li><i class="icon-angle-right"></i><a href="#">November 2012</a></li>
              <li><i class="icon-angle-right"></i><a href="#">October 2012</a></li>
              <li><i class="icon-angle-right"></i><a href="#">September 2012</a></li>
              <li><i class="icon-angle-right"></i><a href="#">August 2012</a></li>
              <li><i class="icon-angle-right"></i><a href="#">July 2012</a></li>
              <li class="last"><i class="icon-angle-right"></i><a href="#">June 2012</a></li>
            </ul>
            <ul class="list side1 row2">
              <li><i class="icon-angle-right"></i><a href="#">May 2012</a></li>
              <li><i class="icon-angle-right"></i><a href="#">April 2012</a></li>
              <li><i class="icon-angle-right"></i><a href="#">March 2012</a></li>
              <li><i class="icon-angle-right"></i><a href="#">February 2012</a></li>
              <li><i class="icon-angle-right"></i><a href="#">January 2012</a></li>
              <li class="last"><i class="icon-angle-right"></i><a href="#">December 2011</a></li>
            </ul>
          </div>
          <div class="wrapper">
            <h3 class="header_line"><span>Tags</span></h3>
            <div id="tagsinput_tagsinput" class="tagsinput" style="height: 100%;"> <span class="tag"><span>Clean&nbsp;&nbsp;</span><a class="tagsinput-remove-link"><i class="icon-remove"></i></a></span> <span class="tag"><span>Fresh&nbsp;&nbsp;</span><a class="tagsinput-remove-link"><i class="icon-remove"></i></a></span> <span class="tag"><span>Modern&nbsp;&nbsp;</span><a class="tagsinput-remove-link"><i class="icon-remove"></i></a></span> <span class="tag"><span>Unique&nbsp;&nbsp;</span><a class="tagsinput-remove-link"><i class="icon-remove"></i></a></span> <span class="tag"><span>Female&nbsp;&nbsp;</span><a class="tagsinput-remove-link"><i class="icon-remove"></i></a></span> <span class="tag"><span>Clean&nbsp;&nbsp;</span><a class="tagsinput-remove-link"><i class="icon-remove"></i></a></span> <span class="tag"><span>Branding&nbsp;&nbsp;</span><a class="tagsinput-remove-link"><i class="icon-remove"></i></a></span><span class="tag"><span>Models&nbsp;&nbsp;</span><a class="tagsinput-remove-link"><i class="icon-remove"></i></a></span></div>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>
<!--+++++++++++- end content++++++++++++++-->
<?php
	include('main-footer.php');
?>