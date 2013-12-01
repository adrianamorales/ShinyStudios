<?php
  //connecting to db
  include("config.inc.php");
  $dbname = $config['db'];
  $user = $config['user'];
  $pass = $config['pass'];
  $conn = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);

  $sql = "CREATE TABLE info (
    first VARCHAR(30) NOT NULL,
    last VARCHAR(30) NOT NULL,
    title VARCHAR(50),
    vimeo VARCHAR(80),
    linkedin VARCHAR(80),
    imdb VARCHAR(80),
    personal VARCHAR(80),
    img VARCHAR(80),
    quote VARCHAR(255),
    primary key (first, last)
  );";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "CREATE TABLE skills (
    first VARCHAR(30) NOT NULL,
    last VARCHAR(30) NOT NULL,
    skill VARCHAR(50) NOT NULL,
    percent INT,
    primary key (first, last, skill),
    foreign key (first, last) references info(first, last)
        ON DELETE CASCADE ON UPDATE CASCADE
  );";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Angela', 'Wolf', 'Director & Founder', '#', 'https://www.linkedin.com/in/angelawolf90', 'http://www.imdb.com/name/nm4443040/?ref_=fn_al_nm_1', '#', 'AWolf_headshot.jpg', 'Humans are storytellers by nature. It\'s how we learn, how we interact, how we connect. Film is my way of telling stories. Every film I make has a piece of me in it--and that\'s scary. But this is how I show the world who I am');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Angela', 'Wolf', 'Directing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Angela', 'Wolf', 'Producing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Diana', 'Brody', 'Co-producer of A Bird Without Wings', '#', 'http://www.linkedin.com/pub/diana-brody/2b/a7/84a', '#', '#', 'DBrody_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Diana', 'Brody', 'Producing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Diana', 'Brody', 'Research', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Melissa', 'de Leon', 'Co-producer of A Bird Without Wings', '#', '#', '#', '#', 'MDeLeon_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Melissa', 'de Leon', 'Producing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Melissa', 'de Leon', 'Contracts', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Nikki', 'Dyke', 'Line Producer of A Bird Without Wings', '#', '#', '#', '#', 'NDyke_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Nikki', 'Dyke', 'Producing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Nikki', 'Dyke', 'Budgeting', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Tom', 'Wills', 'Photography Director of A Bird Without Wings', '#', '#', 'http://www.imdb.com/name/nm3626028/', 'http://willsvideo.com/', 'TWills_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Tom', 'Wills', 'Cinematography', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Tom', 'Wills', 'SteadiCam', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Helen', 'Mersiowsky', 'Post Production Supervisor', 'http://vimeo.com/mersiowsky', 'http://www.linkedin.com/in/hmersiowsky', '#', '#', 'HMersiowsky_headshot.jpg', 'I was introduced to editing film at a young age, and I immediately loved everything that can be accomplished through this process. I like the freedom of laying out the shots within a scene and how the scenes relate to one another.');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Helen', 'Mersiowsky', 'Editing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Helen', 'Mersiowsky', 'Writing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Bob', 'Quaintance', 'Marketing Director', '#', 'http://www.linkedin.com/in/rquaintance', '#', '#', 'BQuaintance_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Bob', 'Quaintance', 'Marketing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (first, last, skill, percent) VALUES ('Bob', 'Quaintance', 'Advertising', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  
?>