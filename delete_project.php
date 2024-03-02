<?php 
// session_start();
require('db.php');
if(!isset($_SESSION['isUserLoggedIn'])){
  echo "<script>window.location.href = 'log.php' </script>";
}

// Check if the form is submitted for deletion
if(isset($_POST['delete'])) {
    $project_id = mysqli_real_escape_string($dbcon, $_POST['project_id']);

    // Perform deletion query
    $delete_query = "DELETE FROM project WHERE id = '$project_id'";
    mysqli_query($dbcon, $delete_query);
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
            <h2>Delete Project</h2>
        </div>

        <form method="POST" action="">
            <label for="project_id">Project ID to Delete:</label>
            <input type="text" id="project_id" name="project_id" required>
            <input type="submit" name="delete" value="Delete">
        </form>
    </section>
</div>

</body>
</html>
