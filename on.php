<?php 
 session_start();
require('db.php');
if(!isset($_SESSION['isUserLoggedIn'])){
  echo "<script>window.location.href = 'log.php' </script>";
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Panel</title>
  <link rel="shortcut icon" type="x-icon" href="a.png">
  <link rel="stylesheet" href="style2.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>

<?php 
                  $user_query = $dbcon->query("SELECT * FROM reg_table");
                  $user_information = $user_query->fetch_assoc();
                ?>
  <div class="container">
    <nav>
      <ul>
        <li><a href="on.php" class="logo">
          <img src="a.png" alt="">
          <span class="nav-item"><?=$user_information['username']?></span>
        </a></li>
        <li><a href="on.php?homesetting=true">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="on.php?aboutsetting=true">
          <i class="fas fa-user"></i>
          <span class="nav-item">About</span>
        </a></li>
        <li><a href="on.php?timelinesetting=true">
        <i class="fas fa-calendar"></i>
          <span class="nav-item">Timeline</span>
        </a></li>
        <li><a href="on.php?skillsetting=true">
        <i class="fas fa-tasks"></i>
          <span class="nav-item">Skills</span>
        </a></li>

        <li><a href="on.php?projectsetting=true">
        <i class="fas fa-file-invoice"></i>
          <span class="nav-item">Projects</span>
        </a></li>
        <li><a href="on.php?hobbysetting=true">
        <i class="fas fa-icons"></i>
          <span class="nav-item">Hobbies</span>
        </a></li>
        <li><a class="logout" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span class="log-out">Log out</span>
        </a></li>
      </ul>
    </nav>


    

    <section class="main">
    <div class="main-top">
        <h1>Section Control</h1>
    </div>

    <?php
    if(isset($_GET['homesetting'])){
     ?>
      <h3>Contact Form</h3>

      <?php
        if(isset($_POST['submit'])){
          $file_name=$_FILES['image']['name'];
          $tempname=$_FILES['image']['tmp_name'];
          $folder='images/'.$file_name;

          $q=mysqli_query($dbcon,"Insert into chobi (img) values ('$file_name')");
          if(move_uploaded_file($tempname, $folder)){

          }else{

          }
        }
      ?>

<div class="home-container">
<form  method="POST" enctype="multipart/form-data">

<?php

$resu=mysqli_query($dbcon,"select img from chobi");

while($a=mysqli_fetch_array($resu)){
  echo "<img src='images/".$a['img']."'>";
  echo "<br/>";
}
?>

    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" value="Hasib" placeholder="Your name..">



    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
    <label for="image"></label>
    <input type="file" name="image">


    <input type="submit" name="submit" value="Submit">
  </form>
</div>



      <?php
    }else if(isset($_GET['projectsetting'])){
      ?>
      <h3>Project Form</h3>

      <?php
        if(isset($_POST['add'])){
          $file_name=$_FILES['image']['name'];
          $tempname=$_FILES['image']['tmp_name'];
          $folder='images/'.$file_name;
          $p_id=$_POST['pid'];
          $p_title=$_POST['ptitle'];
          $p_desc=$_POST['pdes'];
          $p_link=$_POST['gitlink'];

          $q=mysqli_query($dbcon,"Insert into project (id,img,title,description,link) values ('$p_id','$file_name','$p_title','$p_desc','$p_link')");
          if(move_uploaded_file($tempname, $folder)){

          }else{

          }
        }else if(isset($_POST['update'])){
          echo "<script>window.location.href = 'update_section.php' </script>";
        }else if(isset($_POST['delete'])){
          echo "<script>window.location.href = 'delete_project.php' </script>";
        }
      ?>

      <div class="home-container">
      <form  method="POST" enctype="multipart/form-data">

<?php

$resu=mysqli_query($dbcon,"select * from project where id='$p_id'");

$a = mysqli_fetch_array($resu);


if ($a) {
  echo "<img src='images/" . $a['img'] . "' style='width: 200px; height: 200px;'>";

    echo "<br/>";

  
} else {

}
?>

<label for="proid">Project ID</label>
    <input type="text" id="proid" name="pid" value="<?=$a['id']?>" placeholder="Project ID...">    

<label for="protitle">Project Title</label>
    <input type="text" id="protitle" name="ptitle" value="<?=$a['title']?>" placeholder="Project Title...">



    <label for="prodesc">Project Description</label>
    <textarea id="prodesc" name="pdes" placeholder="Write something.." style="height:100px"><?=$a['description']?></textarea>

    <label for="glink">Github Repository Link</label>
    <input type="text" id="glink" name="gitlink" value="<?=$a['link']?>" placeholder="Github Link...">
    
    <label for="image"></label>
    <input type="file" name="image">


    <input type="submit" name="add" value="Add">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">
  </form>
</div>
    <?php
    }else{
    ?>
    <form action="process_form.php" method="post">
        <div class="tg">
        <div class="tg-b">
                <input type="checkbox" name="toggle1" id="toggle1" <?php echo isset($_SESSION['toggle1']) && $_SESSION['toggle1'] ? 'checked' : ''; ?>>
                <label for="toggle1" class="switch"></label>
                <h3>Home</h3>
            </div>

            <div class="tg-b">
                <input type="checkbox" name="toggle2" id="toggle2" <?php echo isset($_SESSION['toggle2']) && $_SESSION['toggle2'] ? 'checked' : ''; ?>>
                <label for="toggle2" class="switch"></label>
                <h3>About</h3>
            </div>

            <div class="tg-b">
                <input type="checkbox" name="toggle3" id="toggle3" <?php echo isset($_SESSION['toggle3']) && $_SESSION['toggle3'] ? 'checked' : ''; ?>>
                <label for="toggle3" class="switch"></label>
                <h3>Timeline</h3>
            </div>

            <div class="tg-b">
                <input type="checkbox" name="toggle4" id="toggle4" <?php echo isset($_SESSION['toggle4']) && $_SESSION['toggle4'] ? 'checked' : ''; ?>>
                <label for="toggle4" class="switch"></label>
                <h3>Skills</h3>
            </div>

            <div class="tg-b">
                <input type="checkbox" name="toggle5" id="toggle5" <?php echo isset($_SESSION['toggle5']) && $_SESSION['toggle5'] ? 'checked' : ''; ?>>
                <label for="toggle5" class="switch"></label>
                <h3>Projects</h3>
            </div>

            <div class="tg-b">
                <input type="checkbox" name="toggle6" id="toggle6" <?php echo isset($_SESSION['toggle6']) && $_SESSION['toggle6'] ? 'checked' : ''; ?>>
                <label for="toggle6" class="switch"></label>
                <h3>Hobbies</h3>
            </div>

            <div class="form-btn">
                <input type="submit" value="Save">
            </div>
        </div>
    </form>

    <?php
    }
    ?>
</section>


    
  </div>
</body>
</html>