<?php
include('../login.php');

if(!isset($_SESSION['logn'])){
    header('Location: ../index.php');
}

if(isset($_POST['butlog'])){
    session_destroy();
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="profile.css">
        
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Responsive Navigation Menu Bar</title>-->
</head>
<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="../slide/slide.html">FaceMash</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">FaceMash</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="#" style="color: aqua;">Profile</a></li>
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="../index.php" name="butlog">Signout</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<script>

const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

</script>
<body>
<div class="entbox">
    <div class="menu-ent">
        <a href="#">Settings</a>
        <a href="#">Edit</a>
        <a href="#">My Account</a>
        <a href="#">Payment</a>
    </div>

  
</div>
<div class="cnt">
    <div class="menu-box">
        <div class="tx"><h1>Menu Box</h1>
            <button>Edit</button>
            <button>New Friends</button>
            <button>New Face Mash Events</button>
            <button>Account Settings</button>
            <button style="border-radius: 0px 0px 20px 20px;">Developers</button>
        </div>
    </div>
    <div class="prof">
        <img src="../profile/imgs/img.png" alt="">
        <h1>Ardit Berisha</h1>
        <p>@arditny_</p>
        <button>Edit Name</button>
        <button>Add Photos</button>
        <button>Delete Photos</button>
    </div>
    <div class="flw">
        <div class="tvb"><h1>Activity</h1>
        <div class="fl"><h1>Followers</h1> <button>125</button></div>
        <div class="fl"><h1>Followings</h1> <button>1050</button></div>
        <div class="fl"><h1>Likes</h1> <button>250</button></div>
    </div>
</div>
</body>
<h2 class="p">My Photos</h2>
<div class="line"></div>
<div class="gm">
<img src="imgs/b4.jpg" alt="">
<img src="imgs/lh.jpg" alt="">
<img src="imgs/m3.jpg" alt="">
<img src="imgs/rs4.jpg" alt="">
<img src="imgs/tg.jpg" alt="">
</div>
</body>
</html>
