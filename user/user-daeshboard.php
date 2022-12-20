<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: index.php");


  if (isset($_POST['submit'])) {
    $id = $_GET['id'];
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
  <link rel="stylesheet" href="user-dashboard.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>

<body>

  <div class="container">


  <div class="sidebar" id="sidebar">
      <div class="brand">
        <div class="logo" id="logo">
          <img src="images/whatsapp_PNG95158.png" alt="logo" />
        </div>
        <div class="brand-name" id="brand-name">Dashboard</div>
      </div>
      <div class="list-groups">
        <ul class="list-items">
          <a href="">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-house"></i></span><span class="text">Home</span>
            </li>
          </a>

          <a href="">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-people-group"></i></span><span class="text">Course</span>
            </li>
          </a>
          <a href="">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-comment"></i></span><span class="text">My Course</span>
            </li>
          </a>

          <a href="">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-gears"></i></span><span class="text">About us</span>
            </li>
          </a>

  
        </ul>
      </div>
    </div>

    <!-- home section starts here -->
    <div class="home" id="home">
      <!-- header section starts here -->
      <div class="head" id="head">
        <div class="sidebar-toggle">
          OFF-CAMPUS

        </div>
        <div class="search">
          <form action="" class="form" id="form">
            <i class="fa-solid fa-magnifying-glass" id="glass" onclick="f()"></i>
            <input type="text" placeholder="search here" id="search" />
          </form>
        </div>
        <span><?php echo  $_SESSION['phone']; ?></span>
        <div class="user">

          <i class="fa-solid fa-user"></i>
        </div>
      </div>
      <!-- header ends here -->

      <!-- main -->
      <section class="main" id="main">
        <div class="top">



            <a href="profile.php?id" class="item">
              <div class="text">Teachers</div>
              <div class="icon"><i class="fa-solid fa-eye"></i></div>
            </a>



          <a href="" class="item">
            <div class="text">Courses</div>
            <div class="icon"><i class="fa-solid fa-users"></i></div>
          </a>
          <a href="" class="item">
            <div class="text">Guid</div>
            <div class="icon"><i class="fa-solid fa-people-group"></i></div>
          </a>
          <a href="" class="item">
            <div class="text">Research</div>
            <div class="icon"><i class="fa-solid fa-business-time"></i></div>
          </a>

        </div>


<a href="logout.php">logout</a>
      </section>




    </div>










  </div>

  <script>
    function toggle() {
      let x = document.getElementById("sidebar");
      let y = document.getElementById("home");
      let z = document.getElementById("brand-name");
      // let logo = document.getElementsById("logo");

      x.classList.toggle('active');
      z.classList.toggle('active');
      logo.classList.toggle('active');
      //     if(x.style.width == "20vw"){
      //     x.style.width = "5vw";
      //     z.style.display = "none";
      //     logo.style.display = "block";
      //   ;
      // }
      // else{
      //     x.style.width = "20vw";
      //     z.style.display = "block";
      // }
    }

    function f() {
      let search = document.getElementById("search");
      let form = document.getElementById("form");
      if (search.style.display == "none") {
        search.style.display = "block";
        form.style.width = "250px";
      } else {
        search.style.display = "none";
        form.style.width = "30px";
      }
    }

    function posts() {
      let hposts = document.getElementById("main");
      let sposts = document.getElementById("posts");
      hposts.classList.toggle('hide-posts');
      sposts.classList.toggle('show-posts');
    }
  </script>
</body>

</html>