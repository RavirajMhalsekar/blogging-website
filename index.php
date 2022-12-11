<?php 
  require 'php/connect_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>blogging website</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/openModal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
  <!-- navbar section start -->
  <header>
    <div class="header">
      <a class="navbar-brand" href="index.html">BLOGGERS.</a>
      <div class="navbar">
        <ul class="main-nav">
          <li class="nav-item active">Home</li>
          <li class="nav-item"><a href="aboutUs.php">About Us</a></li>
          <li class="nav-item"><a href="contactUs.php">Contact Us</a></li>
        </ul>
        <div class="indicator"></div>
      </div>

      <span><a href="login.php" target="_blank"></a></span>
    </div>
  </header>
  <!-- navbar section end -->

  <!-- open model start -->
  
  <?php 
  $sql = "SELECT * FROM `blogs`";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
    echo "<div class='modal' data-modal='trigger-".$row['Sno']."'>
    <article class='content-wrapper' style='overflow-y: scroll; max-height:95%;  margin-top: 50px; margin-bottom:50px;'>
      <button class='close'></button>
      <header class='modal-header'>
        <img src='uploads/".$row['image_url']."' >
        <h2>".$row['title']."</h2>
      </header>
      <div class='content'>
        <p>".$row['description']."</p>
      </div>
    </article>
  </div>";
  }
  
  ?>

  <!-- open model end -->

 
  <!-- filter-links start-->

  <div class="filter-links left hide">

    <div class="cards-list">
      <div class="card" name="all">
        <div class="card_image">
          <img src="images/allpost.jpg" onclick="filterBlog('all',0)" />
        </div>
        <div class="card_title title-white">
          <p class="active-card" onclick="filterBlog('all',0)">All Posts</p>
        </div>
      </div>

      <div class="card" name="food">
        <div class="card_image">
          <img src="images/food.jpg" onclick="filterBlog('food',1)" />
        </div>
        <div class="card_title title-white">
          <p onclick="filterBlog('food',1)">Food</p>
        </div>
      </div>

      <div class="card" name="travel">
        <div class="card_image">
          <img src="images/travel.jpg" onclick="filterBlog('travel',2)" />
        </div>
        <div class="card_title title-white">
          <p onclick="filterBlog('travel',2)">Travel</p>
        </div>
      </div>

      <div class="card" name="tech">
        <div class="card_image">
          <img src="images/tech.jpg" onclick="filterBlog('tech',3)" />
        </div>
        <div class="card_title title-white">
          <p onclick="filterBlog('tech',3)">Technology</p>
        </div>
      </div>

      <div class="card" name="entertainment">
        <div class="card_image">
          <img src="images/entertainment.png" onclick="filterBlog('entertainment',4)" />
        </div>
        <div class="card_title title-white">
          <p onclick="filterBlog('entertainment',4)">Entertainment</p>
        </div>
      </div>
    </div>
  </div>
  <!-- filter-links start-->

  

  <!-- blogs section start -->
  <div class="projcard-container right">
    <?php 
      $sql = "SELECT * FROM `blogs`";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
        if($row['type'] == "tech"){
          echo "<div class='projcard projcard-blue' data-modal-trigger='trigger-".$row['Sno']."' data-category='tech' id='a".$row['Sno']."'>";
        }
        else if($row['type'] == "food"){
          echo "<div class='projcard projcard-red' data-modal-trigger='trigger-".$row['Sno']."' data-category='food' id='a".$row['Sno']."'>";
        }
        else if($row['type'] == "travel"){
          echo "<div class='projcard projcard-green' data-modal-trigger='trigger-".$row['Sno']."' data-category='travel' id='a".$row['Sno']."'>";
        }
        else if($row['type'] == "entertainment"){
          echo "<div class='projcard projcard-customcolor' data-modal-trigger='trigger-".$row['Sno']."' style='--projcard-color: #f5af41' data-category='entertainment' id='a".$row['Sno']."'>";
        }
        echo "<div class='projcard-innerbox' data-modal-trigger='trigger-".$row['Sno']."' id='b".$row['Sno']."'>
                <img class='projcard-img' data-modal-trigger='trigger-".$row['Sno']."' src='uploads/".$row['image_url']."' id='c".$row['Sno']."' />
                <div class='projcard-textbox' data-modal-trigger='trigger-".$row['Sno']."' id='d".$row['Sno']."'>
                  <div class='projcard-title' data-modal-trigger='trigger-".$row['Sno']."' id='e".$row['Sno']."'><p data-modal-trigger='trigger-".$row['Sno']."'>".$row['title']."</p></div>
                  <div class='projcard-bar' data-modal-trigger='trigger-".$row['Sno']."' id='f".$row['Sno']."'></div>
                  <div class='projcard-description' data-modal-trigger='trigger-".$row['Sno']."' id='g".$row['Sno']."'><p data-modal-trigger='trigger-".$row['Sno']."'>".$row['description']."</p></div>
                </div>
              </div>
            </div>";
      }
    ?>

<!-- <div class="projcard projcard-blue" data-category="tech"  id="a">
      <div class="projcard-innerbox" data-modal-trigger="trigger-1" id="b">
        <img class="projcard-img" src="https://picsum.photos/800/600?image=1041" data-modal-trigger="trigger-1" id="c" />
        <div class="projcard-textbox" data-modal-trigger="trigger-1" id="d">
          <div class="projcard-title" data-modal-trigger="trigger-1" id="e">tech card</div>
          <div class="projcard-bar" data-modal-trigger="trigger-1" id="f"></div>
          <div class="projcard-description" id="g" data-modal-trigger="trigger-1">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Lorem, ipsum dolor sit
              amet consectetur adipisicing elit. Odio vitae amet dolore fuga.
              Corrupti enim molestias impedit. Cupiditate quam dolorum vero
              facilis nostrum. Exercitationem blanditiis minima accusantium
              doloribus explicabo velit. Lorem, ipsum dolor sit amet consectetur
              adipisicing elit. Facilis illum labore eum. Error, cupiditate odio
              porro inventore vel sint accusamus reprehenderit aliquam esse
              repudiandae recusandae, rem, omnis officia ab facilis.

            </p>
          </div>
        </div>
      </div>
    </div> -->
  </div>

  <!-- blogs section end -->


  
  

  
  
  


  <script src="js/script.js"></script>
  <script src="js/openModal.js"></script>
</body>

</html>