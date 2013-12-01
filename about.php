<?php
	include('main-header.php');
?>
<!--+++++++++++- content++++++++++++++-->
<div id="wrapper" >
  <section id="page">
    <div class="header">
      <div class="container clearfix">
        <div class="row">
          <div class="span12"> 
            <!-- About us title -->
            <h1>About<span class="cyan"> us</span> <span class="raleway"> <span class="pink"> // </span>  Come to us, and let's get it done!</span></h1>
            <div id="aboutblurb">
                Shiny Studios, LLC is an independent film company based out of the Greater Philadelphia area. Bringing local filmmakers together, Shiny Studios 
                aspires to create engaging films that handle social issues. The founder, Angela Wolf, explains our mission: "Films allow us to enter a world we 
                wouldn't normally have access to. It is the filmmaker's responsibility to create a journey for the audience that encourages them to learn, 
                examine, and explore. If the filmmaker doesn't grow after creating a film and the audience doesn't grow after watching it, then the film has lost 
                its purpose."
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container about_us">
      <h2 class="header_line"><span>Our Team</span></h2>
      <div class="row contentStart">
        <?php
        include("config.inc.php");
        $dbname = $config['db'];
        $user = $config['user'];
        $pass = $config['pass'];
        $conn = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
        $sql = "SELECT * FROM info";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach($stmt as $row){
          echo '<div class="span4"><div class="about_item">';
          echo '<div class="about_item_center"><img src="img/memberPhotos/'.($row['img']).'" alt="'.($row['first']).' '.($row['last']).'">';
          echo '<div class="team_mask"></div> <div class="clear"></div> <div class="team_content">';
          echo '<h3>'.($row['first']).' '.($row['last']).'<small> '.($row['title']).'</small></h3>';
          echo '<p>'.($row['quote']).'</p>';
          echo '</div></div><div class="btn-toolbar"><div class="btn-group">';
          echo '<a class="btn btn-primary" href="'.($row['vimeo']).'"><i class="fa fa-vimeo-square"></i></a>';
          echo '<a class="btn btn-primary" href="'.($row['linkedin']).'"><i class="fa fa-linkedin-square"></i></a>';
          echo '<a class="btn btn-primary" href="'.($row['imdb']).'"><i class="fa fa-video-camera"></i></a>';
          echo '<a class="btn btn-primary" href="'.($row['personal']).'"><i class="fa fa-external-link-square"></i></a>';
          echo '</div></div><div class="skillset">';
          echo '<h2 class="header_line"></span><small>'.($row['first'])."'s </small>Skills</span></h2>";
          echo '<div class="list-block contentStart">';
          $sql = "SELECT * FROM skills WHERE first = '".($row['first'])."' AND last = '".($row['last'])."'";
          $stmt2 = $conn->prepare($sql);
          $stmt2->execute();
          foreach($stmt2 as $row2) {
            echo '<div class="progress progress-striped active"> <div class="bar" style="width: '.($row2['percent']).'%">'.($row2['skill']).'</div></div>';
          }
          echo '</div></div></div></div>';
        }
        ?>
<!--
        <div class="span4">
          <div class="about_item">
            <div class="about_item_center"> <img src="img/memberPhotos/AWolf_headshot.jpg" alt="Angela Wolf">
              <div class="team_mask"></div>
              <div class="clear"></div>
              <div class="team_content">
              <h3>Angela Wolf <small> Director & Founder</small></h3>
              <p>"Humans are storytellers by nature. It's how we learn, how we interact, how we connect. Film is my way of telling stories. Every film I make has a piece of me in it--and that's scary. But this is how I show the world who I am"</p>
            </div>
            </div>
              <div class="btn-toolbar">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-vimeo-square"></i></a>
                    <a class="btn btn-primary" href="https://www.linkedin.com/in/angelawolf90"><i class="fa fa-linkedin-square"></i></a>
                    <a class="btn btn-primary" href="http://www.imdb.com/name/nm4443040/?ref_=fn_al_nm_1"><i class="fa fa-video-camera"></i></a> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-external-link-square"></i></a>
                </div>
              </div>
              <div class="skillset">
              <h2 class="header_line"><span><small>Angela's </small>Skills</span></h2>
              <div class="list-block contentStart">
                <div class="progress progress-striped active">
                  <div class="bar" style="width: 100%">Directing</div>
                </div>
                <div class="progress progress-striped active">
                  <div class="bar" style="width: 100%">Producing</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="span4">
          <div class="about_item">
            <div class="about_item_center"> <img src="img/memberPhotos/DBrody_headshot.jpg" alt="">
              <div class="team_mask"></div>
              <div class="clear"></div>
              <div class="team_content">
              <h3>Diana Brody <small>Co-producer</small></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
              <div class="btn-toolbar">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-vimeo-square"></i></a>
                    <a class="btn btn-primary" href="http://www.linkedin.com/pub/diana-brody/2b/a7/84a"><i class="fa fa-linkedin-square"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-video-camera"></i></a> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-external-link-square"></i></a>
                </div>
              </div>
              <div class="skillset">
              <h2 class="header_line"><span><small>Diana's </small>Skills</span></h2>
              <div class="list-block contentStart"> 
                <div class="progress progress-striped active">
                  <div class="bar" style="width: 100%">Producing</div>
                </div>
                <div class="progress progress-striped active ">
                  <div class="bar" style="width: 100%">Research</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="span4">
          <div class="about_item">
            <div class="about_item_center"> <img src="img/memberPhotos/MDeLeon_headshot.jpg" alt="">
              <div class="team_mask"></div>
              <div class="clear"></div>
              <div class="team_content">
              <h3>Melissa de Leon <small> Co-producer</small></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
              <div class="btn-toolbar">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-vimeo-square"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-linkedin-square"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-video-camera"></i></a> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-external-link-square"></i></a>
                </div>
              </div>
              <div class="skillset">
              <h2 class="header_line"><span><small>Melissa's </small>Skills</span></h2>
              <div class="list-block contentStart"> 
                <div class="progress progress-striped active">
                  <div class="bar" style="width: 100%">Producing</div>
                </div>
                <div class="progress progress-striped active ">
                  <div class="bar" style="width: 100%">Contracts</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      <div class="span4">
          <div class="about_item">
            <div class="about_item_center"> <img src="img/memberPhotos/NDyke_headshot.jpg" alt="">
              <div class="team_mask"></div>
              <div class="clear"></div>
              <div class="team_content">
              <h3>Nikki Dyke <small> Line Producer</small></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
              <div class="btn-toolbar">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-vimeo-square"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-linkedin-square"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-video-camera"></i></a> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-external-link-square"></i></a>
                </div>
              </div>
              <div class="skillset">
              <h2 class="header_line"><span><small>Nikki's </small>Skills</span></h2>
              <div class="list-block contentStart"> 
                <div class="progress progress-striped active">
                  <div class="bar" style="width: 100%">Producing</div>
                </div>
                <div class="progress progress-striped active ">
                  <div class="bar" style="width: 100%">Budgeting</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="span4">
          <div class="about_item">
            <div class="about_item_center"> <img src="img/memberPhotos/TWills_headshot.jpg" alt="">
              <div class="team_mask"></div>
              <div class="clear"></div>
              <div class="team_content">
              <h3>Tom Wills <small> Photography Director</small></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
              <div class="btn-toolbar">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-vimeo-square"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-linkedin-square"></i></a>
                    <a class="btn btn-primary" href="http://www.imdb.com/name/nm3626028/"><i class="fa fa-video-camera"></i></a> 
                    <a class="btn btn-primary" href="http://willsvideo.com/"><i class="fa fa-external-link-square"></i></a>
                </div>
              </div>
              <div class="skillset">
              <h2 class="header_line"><span><small>Tom's </small>Skills</span></h2>
              <div class="list-block contentStart"> 
                <div class="progress progress-striped active">
                  <div class="bar" style="width: 100%">Cinematography</div>
                </div>
                <div class="progress progress-striped active ">
                  <div class="bar" style="width: 100%">SteadiCam</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="span4">
          <div class="about_item">
            <div class="about_item_center"> <img src="img/memberPhotos/HMersiowsky_headshot.jpg" alt="">
              <div class="team_mask"></div>
              <div class="clear"></div>
              <div class="team_content">
              <h3>Helen Mersiowsky <small> Post Production Supervisor</small></h3>
              <p>"I was introduced to editing film at a young age, and I immediately loved everything that can be accomplished through this process. I like the freedom of laying out the shots within a scene and how the scenes relate to one another."</p>
            </div>
          </div>
              <div class="btn-toolbar">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="http://vimeo.com/mersiowsky"><i class="fa fa-vimeo-square"></i></a>
                    <a class="btn btn-primary" href="http://www.linkedin.com/in/hmersiowsky"><i class="fa fa-linkedin-square"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-video-camera"></i></a> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-external-link-square"></i></a>
                </div>
              </div>
              <div class="skillset">
              <h2 class="header_line"><span><small>Helen's </small>Skills</span></h2>
              <div class="list-block contentStart"> 
                <div class="progress progress-striped active">
                  <div class="bar" style="width: 100%">Editing</div>
                </div>
                <div class="progress progress-striped active ">
                  <div class="bar" style="width: 100%">Writing</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="span4">
          <div class="about_item">
            <div class="about_item_center"> <img src="img/memberPhotos/BQuaintance_headshot.jpg" alt="">
              <div class="team_mask"></div>
              <div class="clear"></div>
              <div class="team_content">
              <h3>Bob Quaintance <small> Marketing Director</small></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
              <div class="btn-toolbar">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-vimeo-square"></i></a>
                    <a class="btn btn-primary" href="http://www.linkedin.com/in/rquaintance"><i class="fa fa-linkedin-square"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-video-camera"></i></a> 
                    <a class="btn btn-primary" href="#"><i class="fa fa-external-link-square"></i></a>
                </div>
              </div>
              <div class="skillset">
              <h2 class="header_line"><span><small>Bob's </small>Skills</span></h2>
              <div class="list-block contentStart"> 
                <div class="progress progress-striped active">
                  <div class="bar" style="width: 100%">Marketing</div>
                </div>
                <div class="progress progress-striped active ">
                  <div class="bar" style="width: 100%">Advertising</div>
                </div>
              </div>
            </div>
          </div>
        </div>
 -->
    </div>
  </section>
</div>
<!--+++++++++++- end content++++++++++++++-->
<?php
	include('main-footer.php');
?>