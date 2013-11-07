<?php
	include('main-header.php');
?>
<!--+++++++++++- content++++++++++++++-->
<div id="error">
  <div class="content error-page">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="sign"><span class="pink"><i class="icon-warning-sign"></i> 404 </span></div>
        </div>
        <div class="span7">
          <h1>Oops<span class="cyan">!!!</span></h1>
          <h3>We are sorry, the requested page is not on our Server.</h3>
          <h3>It might be just an outdated link.</h3>
          <hr>
          <div class="horizontal-links">
            <h4>Take a look around our site</h4>
            <a href="index.php">Home</a> <a href="films.php">Films</a> <a href="about.php">About us</a> <a href="merchandise.php">Merchandise</a> <a href="contact.php">Contact</a></div>
          <hr>
          <div id="search">
            <form id="search" action="search.php" method="GET" accept-charset="utf-8">
            <div class="clearfix">
              <input type="text" name="s" onblur="if(this.value=='') this.value=''" onfocus="if(this.value =='' ) this.value=''">
              <a href="#" onclick="document.getElementById('search').submit()" class="btn btn-1">Search</a> </div>
          </form>
          </div>
          <p><small>Leave a message to: <a href="#">film@shinystudiosonline.com</a></small> </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--+++++++++++- end content++++++++++++++-->
<?php
	include('main-footer.php');
?>