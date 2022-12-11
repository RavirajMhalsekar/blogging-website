<?php 
  
  require 'php/connect_db.php';

  $insert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_form` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message');";
    if(mysqli_query($conn,$sql)){
      $insert = true;
    }else{
      die("sorry we failed to connect: ". mysqli_connect_error());
    }
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>blogging website</title>
  <!-- <link rel="icon" type="image/png" href="contactForm/images/icons/favicon.ico" /> -->
  <link rel="stylesheet" type="text/css" href="contactForm/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="contactForm/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="contactForm/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="contactForm/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="contactForm/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="contactForm/css/util.css">
  <link rel="stylesheet" type="text/css" href="contactForm/css/main.css">
  <link rel="stylesheet" href="css/contactUs.css">


</head>

<body>
  <!-- navbar section start -->
  <header>
    <div class="header">
      <a class="navbar-brand" href="index.php">BLOGGERS.</a>
      <div class="navbar">
        <ul class="main-nav">
          <li class="nav-item "><a href="index.php">Home</a> </li>
          <li class="nav-item"><a href="aboutUs.php">About Us</a></li>
          <li class="nav-item active">Contact Us</li>
        </ul>
        <div class="indicator"></div>
      </div>

      <span><a href="login.php" target="_blank"></a></span>
    </div>
  </header>
  <!-- navbar section end -->
  <div class="contact1">
    <div class="container-contact1">
      <div class="contact1-pic js-tilt" data-tilt>
        <img src="contactForm/images/img-01.png" alt="IMG">
      </div>
      <form action="contactUs.php" method="post" class="contact1-form validate-form">
        <span class="contact1-form-title">
          <?php 
          if($insert){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Message sent! Thank you</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
          }else{
            echo "Get in touch";
          }
        ?>
        </span>

        <div class="wrap-input1 validate-input" data-validate="Name is required">
          <input class="input1" type="text" name="name" placeholder="Name">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <input class="input1" type="text" name="email" placeholder="Email">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Subject is required">
          <input class="input1" type="text" name="subject" placeholder="Subject">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Message is required">
          <textarea class="input1" name="message" placeholder="Message"></textarea>
          <span class="shadow-input1"></span>
        </div>

        <div class="container-contact1-form-btn">
          <button type="submit" class="contact1-form-btn">
            <span>
              Send Email
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>






  <script src="contactForm/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="contactForm/vendor/bootstrap/js/popper.js"></script>
  <script src="contactForm/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="contactForm/vendor/select2/select2.min.js"></script>
  <script src="contactForm/vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>


  <script src="contactForm/js/main.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="js/contactUs.js"></script>
</body>

</html>