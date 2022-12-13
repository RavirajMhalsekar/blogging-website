<?php 
  
  require 'php/connect_db.php';
    
  $deleteMessage = false;
  $deleteUser = false;
  $deleteblog = false;
  if (isset($_FILES['my_image'])){
    include 'php/upload.php';
  }

  if(isset($_POST['snoEdit'])){
    $sno = $_POST['snoEdit'];
    $description = $_POST['descriptionEdit'];
    $title = $_POST['titleEdit'];
    $type = $_POST['typeEdit'];
    $sql = "UPDATE `blogs` SET `title` = '$title', `description` = '$description', `type` = '$type' WHERE `blogs`.`Sno` = '$sno'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: /blogging_website/dashboard.php#blogsDetails");
    }else{
      echo "The record was not been updated! " . mysqli_error($conn);
    }
  }

  if(isset($_GET['deleteMsg'])){
    $sno = $_GET['deleteMsg'];

    $sql = "DELETE FROM `contact_form` WHERE `contact_form`.`Sno` = '$sno'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: /blogging_website/dashboard.php#messages");
    }else{
        echo "The record was not been updated! " . mysqli_error($conn);
    }
  }
  if(isset($_GET['deleteUser'])){
    $sno = $_GET['deleteUser'];

    $sql = "DELETE FROM `login_details` WHERE `login_details`.`Sno` = '$sno'";
    $result = mysqli_query($conn,$sql);
    if($result){
      // echo "The record has been deleted successfully! <br>";
      $deleteUser = true;
      header("Location: /blogging_website/dashboard.php#userDetail");
    }else{
      echo "The record was not been updated! " . mysqli_error($conn);
    }
  }
  if(isset($_GET['deleteBlog'])){
    $sno = $_GET['deleteBlog'];

    $sql = "DELETE FROM `blogs` WHERE `blogs`.`Sno` = '$sno'";
    $result = mysqli_query($conn,$sql);
    if($result){
      // echo "The record has been deleted successfully! <br>";
      $deleteblog = true;
      header("Location: /blogging_website/dashboard.php#blogsDetails");
    }else{
      echo "The record was not been updated! " . mysqli_error($conn);
    }
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" />
    
</head>

<body id="body-pd">
    <section>
        <header class="header" id="header">
            <div class="header_toggle">
                <i class="bx bx-menu" id="header-toggle"></i>
            </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo">
                        <i class="bx bx-layer nav_logo-icon"></i>
                        <span class="nav_logo-name">BLOGGERS.</span>
                    </a>
                    <div class="nav_list">
                        <a href="#create" class="nav_link active">
                            <i class="bx bx-grid-alt nav_icon"></i>
                            <span class="nav_name">Create Blog</span>
                        </a>
                        <a href="#blogsDetails" class="nav_link">
                            <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
                            <span class="nav_name">blogs details</span>
                        </a>
                        <a href="#userDetail" class="nav_link">
                            <i class="bx bx-user nav_icon"></i>
                            <span class="nav_name">Users details</span>
                        </a>
                        <a href="#messages" class="nav_link">
                            <i class="bx bx-message-square-detail nav_icon"></i>
                            <span class="nav_name">Messages</span>
                        </a>
                    </div>
                </div>
                <a href="login.php" class="nav_link">
                    <i class="bx bx-log-out nav_icon"></i>
                    <span class="nav_name">SignOut</span>
                </a>
            </nav>
        </div>
    </section>
    <section>
        
        <!--Container Main start-->
        <div class="pt-2 height-200 bg-light">
            <section id="create">
                <?php 
                if (isset($_GET['added'])){
                    $added = $_GET['added'];
                    echo "<div class='alert alert-success alert-dismissible fade show w-auto ' role='alert'>
                    <strong>Blog created successfully!</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }else if (isset($_GET['error'])){
                    $error = $_GET['error'];
                    echo "<div class='alert alert-warning alert-dismissible fade show w-auto ' role='alert'>
                    <strong>".$error."</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }
                ?>
                <div class="card mb-5 mx-5">
                    <div class="card-body display-5">
                        <h5 class="card-title"><strong>Create a blog of your own</strong></h5>
                        <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to additional
                            content.
                        </p> -->
                        <button type="button" class="btn btn-primary btn-lg" data-mdb-toggle="modal"
                            data-mdb-target="#createModal">
                            Create
                        </button>
                    </div>
                </div>

                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal top fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                    aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="dashboard.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" id="blogTitle"
                                            placeholder="title of blog" maxlength="40" />
                                    </div>
                                    <div class="my-3 form-group">
                                        <label>Description</label>
                                        <textarea type="text" name="description" class="form-control" id="blogDescription"
                                            placeholder="title of blog" maxlength="500"></textarea>
                                    </div>
                                    <label>choose blog category</label>
                                    <select class="form-select" name="type" id="blogCategory">
                                        <option name="food" value="food">Food</option>
                                        <option name="travel" value="travel">Travel</option>
                                        <option name="tech" value="tech">Technology</option>
                                        <option name="entertainment" value="entertainment">entertainment</option>
                                      </select>
                                        <div class="my-3 form-group">
                                            <label>cover photo</label><br />
                                            <input type="file" class="form-control-file" id="blogImage" 
                                            name="my_image" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                create blog
                                            </button>
                                        </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- blog edit start -->
                <div class="modal top fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                    aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>edit</h4>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="dashboard.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="hidden" name="snoEdit" id="snoEdit">
                                        <input type="text" name="titleEdit" class="form-control" id="blogTitleEdit"
                                            placeholder="title of blog" />
                                    </div>
                                    <div class="my-3 form-group">
                                        <label>Description</label>
                                        <textarea type="text" name="descriptionEdit" class="form-control" id="blogDescriptionEdit"
                                            placeholder="title of blog" ></textarea>
                                    </div>
                                    <label>choose blog category</label>
                                    <select class="form-select" name="typeEdit" id="blogCategoryEdit">
                                        <option name="food" value="food">Food</option>
                                        <option name="travel" value="travel">Travel</option>
                                        <option name="tech" value="tech">Technology</option>
                                        <option name="entertainment" value="entertainment">entertainment</option>
                                      </select>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary" data-mdb-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            Edit blog
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- blog edit end -->
                




            </section>

            <section id="blogsDetails" class="card mb-5 mx-5">
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">
                           <strong>Blog Details</strong> 
                        </h2>
                    </div>
                    <!-- Grid column -->
                </div>
                <div class="container">
                <?php 
                        if($deleteblog){
                            echo "<div class='alert alert-success alert-dismissible fade show w-auto' role='alert'>
                            <strong>Blog Deleted Successfully!</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                        }
                    ?>
                    <div class="row">
                        <?php 
                            $sql = "SELECT * FROM `blogs`";
                            $result = mysqli_query($conn,$sql);
                            $Sno = false;
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<div class='col-lg-4 mb-4'>
                                <div class='card'>
                                    <img class='card-img mh-100' src='uploads/".$row['image_url']."'
                                        alt='image-cover' class='card-img-top' />
                                    <div class='card-body'>
                                        <h5 class='card-title'>".$row['title']."</h5>
                                        <strong class='card-type' style='color: #4723D9;'>".$row['type']."</strong>
                                        <p class='card-text'>
                                            ".$row['description']."
                                        </p>
                                        <button id='p".$row['Sno']."' type='button' class='editBlog btn btn-outline-success btn-sm' data-mdb-toggle='modal' data-mdb-target='#editModal'>Edit
                                        </button>
                                        <button id='r".$row['Sno']."' type='submit' class=' deleteBlog btn btn-outline-danger btn-sm'>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>";
                            }
                        ?>
                    </div>
                </div>
            </section>

            <section id="userDetail">
                <div class="card mb-10 my-5 mx-5">
                    <div class="card-body">
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">
                                   <strong>User Details</strong> 
                                </h2>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                        <!--Table-->
                        <?php 
                        if($deleteUser){
                            echo "<div class='alert alert-success alert-dismissible fade show w-auto' role='alert'>
                            <strong>User Deleted Successfully!</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                        }
                        ?>
                        <table class="table table-striped text-center">
                            <!--Table head-->
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>password</th>
                                    <!-- <th>action</th> -->
                                </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody>
                            <?php 
                                $sql = "SELECT * FROM `login_details`";
                                $result = mysqli_query($conn,$sql);
                                $Sno = false;
                                $count = 1;
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<th>".$count."</th>";
                                    echo "<td>".$row['name']."</td>";
                                    echo "<td>".$row['email']."</td>";
                                    echo "<td>".$row['password']."</td>";
                                    echo "<td>
                                    <button id='u".$row['Sno']."' type='button' rel='tooltip' class='deleteUser btn btn-danger btn-round btn-just-icon btn-sm'>delete User</button>
                                    </td>";
                                    echo "</tr>";
                                    $Sno = true;  
                                    $count = $count+1;      
                                }
                                if(!$Sno){
                                    echo "<p class='card-text text-center'> no users yet</p>";
                                }
                                ?>
                                
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                </div>
            </section>

            <section id="messages">
                <div class="card mb-10 my-5 mx-5">
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">
                               <strong>Messages</strong> 
                            </h2>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <div class="container m-3 mx-0">
                    <?php 
                        if($deleteMessage){
                            echo "<div class='alert alert-success alert-dismissible fade show w-auto' role='alert'>
                            <strong>message Deleted Successfully!</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                        }
                    ?>
                    
                            <div class="card">
                                <?php

                                $sql = "SELECT * FROM `contact_form`";
                                $result = mysqli_query($conn,$sql);
                                $Sno = false;
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<div class='card-body mb-2' style='background-color: #eaeef3;'>";
                                    echo "<h5 class='card-title text-primary'>".$row['subject']."</h5>";
                                    echo "<p class='card-text'>".$row['message']."</p>";
                                    echo "<p class='card-text'><small class='text-muted'> - ".$row['name']."(@".$row['email'].")</small></p>";
                                    echo "<button id='d".$row['Sno']."' type='button' rel='tooltip' class=' deleteMsg btn btn-danger btn-round btn-just-icon btn-sm'>
                                            <i class='material-icons' id='z".$row['Sno']."' >mark as read</i>
                                            </button></div>";
                                    $Sno = true;        
                                }
                                if(!$Sno){
                                    echo "<p class='card-text text-center'> no messages yet</p>";
                                }
                                ?>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--Container Main end-->
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
    <script>

        deletesMsg = document.getElementsByClassName("deleteMsg");
        Array.from(deletesMsg).forEach((element)=>{
                element.addEventListener("click",(e)=>{
                sno = e.target.id.substr(1);
                //   console.log("hello"+sno);
                if(confirm('want to delete?')){
                    window.location = `/blogging_website/dashboard.php?deleteMsg=${sno}`;
                }
            })
        })
        deletesUser = document.getElementsByClassName("deleteUser");
        Array.from(deletesUser).forEach((element)=>{
                element.addEventListener("click",(e)=>{
                sno = e.target.id.substr(1);
                //   console.log("hello "+sno);
                if(confirm('want to delete?')){
                    window.location = `/blogging_website/dashboard.php?deleteUser=${sno}`;
                }
            })
        })
        deletesBlog = document.getElementsByClassName("deleteBlog");
        Array.from(deletesBlog).forEach((element)=>{
                element.addEventListener("click",(e)=>{
                sno = e.target.id.substr(1);
                //   console.log("hello "+sno);
                if(confirm('want to delete?')){
                    window.location = `/blogging_website/dashboard.php?deleteBlog=${sno}`;
                }
            })
        })

        edits = document.getElementsByClassName("editBlog");
        Array.from(edits).forEach((element)=>{
            element.addEventListener("click",(e)=>{
            title = e.target.parentNode.getElementsByClassName("card-title")[0].innerText;
            description = e.target.parentNode.getElementsByClassName("card-text")[0].innerText;
            type = e.target.parentNode.getElementsByClassName("card-type")[0].innerText;
            imgSrc = e.target.parentNode.parentNode.getElementsByClassName("card-img")[0].getAttribute('src');
            snoEdit.value = e.target.id.substr(1);
            blogTitleEdit.value = title;
            blogDescriptionEdit.value = description;
            blogCategoryEdit.value = type;
            })
        })
    </script>
</body>

</html>

