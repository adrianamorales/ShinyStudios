<?php
  //connecting to db
  include("config.inc.php");
  $dbname = $config['db'];
  $user = $config['user'];
  $pass = $config['pass'];
  $conn = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);

  $sql = "CREATE TABLE info (
    first VARCHAR(30),
    last VARCHAR(30),
    email VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(12),
    street VARCHAR(80),
    providence VARCHAR(50),
    country VARCHAR(50),
    title VARCHAR(50),
    vimeo VARCHAR(80),
    linkedin VARCHAR(80),
    imdb VARCHAR(80),
    personal VARCHAR(80),
    img VARCHAR(80),
    quote VARCHAR(255),
    primary key (email)
  );";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "CREATE TABLE skills (
    email VARCHAR(50) NOT NULL,
    skill VARCHAR(50) NOT NULL,
    percent INT,
    primary key (email, skill),
    foreign key (email) references info(email)
  );";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, email, phone, street, providence, country, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Angela', 'Wolf', 'aWolf@shinystudios.com', '', '', '', '', 'Director & Founder', '#', 'https://www.linkedin.com/in/angelawolf90', 'http://www.imdb.com/name/nm4443040/?ref_=fn_al_nm_1', '#', 'AWolf_headshot.jpg', 'Humans are storytellers by nature. It\'s how we learn, how we interact, how we connect. Film is my way of telling stories. Every film I make has a piece of me in it--and that\'s scary. But this is how I show the world who I am');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('aWolf@shinystudios.com', 'Directing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('aWolf@shinystudios.com', 'Producing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, email, phone, street, providence, country, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Diana', 'Brody', 'dBrody@shinystudios.com', '', '', '', '', 'Co-producer of A Bird Without Wings', '#', 'http://www.linkedin.com/pub/diana-brody/2b/a7/84a', '#', '#', 'DBrody_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('dBrody@shinystudios.com', 'Producing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('dBrody@shinystudios.com', 'Research', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, email, phone, street, providence, country, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Melissa', 'de Leon', 'mDeLeon@shinystudios.com', '', '', '', '', 'Co-producer of A Bird Without Wings', '#', '#', '#', '#', 'MDeLeon_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('mDeLeon@shinystudios.com', 'Producing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('mDeLeon@shinystudios.com', 'Contracts', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, email, phone, street, providence, country, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Nikki', 'Dyke', 'nDyke@shinystudios.com', '', '', '', '', 'Line Producer of A Bird Without Wings', '#', '#', '#', '#', 'NDyke_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('nDyke@shinystudios.com', 'Producing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('nDyke@shinystudios.com', 'Budgeting', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, email, phone, street, providence, country, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Tom', 'Wills', 'tWills@shinystudios.com', '', '', '', '', 'Photography Director of A Bird Without Wings', '#', '#', 'http://www.imdb.com/name/nm3626028/', 'http://willsvideo.com/', 'TWills_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('tWills@shinystudios.com', 'Cinematography', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('tWills@shinystudios.com', 'SteadiCam', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, email, phone, street, providence, country, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Helen', 'Mersiowsky', 'hMersiowsky@shinystudios.com', '', '', '', '', 'Post Production Supervisor', 'http://vimeo.com/mersiowsky', 'http://www.linkedin.com/in/hmersiowsky', '#', '#', 'HMersiowsky_headshot.jpg', 'I was introduced to editing film at a young age, and I immediately loved everything that can be accomplished through this process. I like the freedom of laying out the shots within a scene and how the scenes relate to one another.');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('hMersiowsky@shinystudios.com', 'Editing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('hMersiowsky@shinystudios.com', 'Writing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  $sql = "INSERT INTO info (first, last, email, phone, street, providence, country, title, vimeo, linkedin, imdb, personal, img, quote) 
          VALUES('Bob', 'Quaintance', 'bQuaintance@shinystudios.com', '', '', '', '', 'Marketing Director', '#', 'http://www.linkedin.com/in/rquaintance', '#', '#', 'BQuaintance_headshot.jpg', '');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('bQuaintance@shinystudios.com', 'Marketing', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $sql = "INSERT INTO skills (email, skill, percent) VALUES ('bQuaintance@shinystudios.com', 'Advertising', '100');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
?>