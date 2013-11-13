<?php
	include('main-header.php');
?>
<!--+++++++++++- content++++++++++++++-->
<div id="wrapper">
  <section id="page">
    <div class="header">
      <div class="container clearfix">
        <div class="row">
          <div class="span8"> 
            <!-- Contact us title -->
            <h1>Contact<span class="cyan"> us</span> <span class="raleway"><span class="pink">// </span> How can we help you?</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="contact-form span7">
          <h2 class="header_line"><span>Get in touch:</span></h2>
          <p> Contact us with the form below and we will get back to you soon.</p>
          <form class="form-horizontal" method="post" action="php/sendmail.php">
            <div class="control-group">
              <label for="name" class="nameLabel">Name: <span class="pink">*</span></label>
              <div class="input-prepend"> <span class="add-on"><i class="icon-user"></i></span>
                <input id="name" class="span2" type="text" name="name" placeholder="Enter your name...">
              </div>
              <label for="email" class="emailLabel">Email: <span class="pink">*</span></label>
              <div class="input-prepend"> <span class="add-on"><i class="icon-envelope"></i></span>
                <input id="email" class="span2" type="text" name="email" placeholder="Enter your email...">
              </div>
              <label for="subject">Subject:</label>
              <div class="input-prepend"> <span class="add-on"><i class="icon-wrench"></i></span>
                <input id="subject" class="span2" type="text" name="subject" placeholder="Your subject...">
              </div>
              <label for="message" class="messageLabel">Message: <span class="pink">*</span></label>
              <textarea id="message" name="message" placeholder="Your message..."></textarea>
            </div>
            <div class="control-group">
              <button type="submit" class="btn"><i class="icon-inbox"></i> Send Message</button>
            </div>
          </form>
          <small>(<span class="pink">*</span>required fields)</small> </div>
      </div>
    </div>
  </section>
</div>
<!--+++++++++++- end content++++++++++++++-->
<?php
	include('main-footer.php');
?>