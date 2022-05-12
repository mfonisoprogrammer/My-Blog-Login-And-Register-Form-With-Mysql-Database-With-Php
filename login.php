<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">
    <meta name="keywords" content="">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="index.js"></script>
   
    <title>Login  Your Account </title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0RS7ZGBZ51"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0RS7ZGBZ51');
</script>
</head>
<body>
    

<nav class="navbar navbar-expand-lg navbar-light ">
    <style>
      .navbar{ background-color: black;
      }
    </style>
    <a class="navbar-brand text-light" href="#"></a>
    <div class="text-center text-light">  </div>
    <br>
    <br> 
    <nav class="navbar navbar-light bg-light  ">
        <a class="navbar-brand"></a>
         &nbsp;
       <a href="login.php" ><button class="btn btn-outline-dark " type="submit">Login</button></a>
       <br>
       <br>
       &nbsp;
    <a href=" signup.php"  > <button class="btn btn-outline-dark  "  type="submit">Sign Up</button></a>
      
        </form>
      </nav>  
  </div>
    
            
          </div>
        </li>
      </ul>
    </div>
  </nav> 
  </div> 
   <style>
     .topnav {
    background-color: white;
    overflow: hidden;
  }
  
  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Add an active class to highlight the current page */
  .topnav a.active {
    background-color: blue;
    color: white;
  }
  
  /* Hide the link that should open and close the topnav on small screens */
  .topnav .icon {
    display: none;
  
  }
  /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
  
  /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive a.icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }
   </style>
   <script>
     /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
   </script>
  <div class="topnav" id="myTopnav">
     
    <a href="index.html" class="active  text-dark" style="background-color: white;"><img src="mfoniso.png" height="40px"> Mfonisoprogrammer(The Tech Guy)</a>
    <a href="index.html" >Home</a>
    <a href="about.html">About Me</a>
    <a href="https://www.instagram.com/mfonisoprogrammer/">Contact Me</a>
     <a href="hireme.html">My services Here</a>
     
    <a href="https://mfonisoprogrammer.netlify.app">My Software Engineering Portfolio</a>
    
 
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
         
   </div> 
   <div class="container bg-dark">
     <br>
<div class="btn-group" style="padding: 30px;">
  <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    More About What I Do For People In Tech
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="https://gurutechnologycorporation.netlify.app">Learn Online Tech Skills</a>
      <a class="dropdown-item" href="career.html">I Assisst People In Changing Career To IT career</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="signup.php">Ask Me Questions/Problems and i will answer If You HAVE BUGS in your code & Tech</a>
  
</div>
</div>
 
  <div class="btn-group" style="padding: 30px;">
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      My  Tech Content 
    </button>
    
    <div class="dropdown-menu"><a href="ebook.html"> Buy My Ebooks *(mY eBOOKS is all about tech motivations and guidiance in tech industry and programming guides)</a>
    
      <div class="dropdown-divider"></div>
      <a class="dropdown-item text-dark " href="https://www.buymeacoffee.com/ekeremfoni5" style="color: white;">Help Buy Me A Cup Of Coffee So I Code Well</a>
  
      <a class="dropdown-item" href=" https://www.w3schools.com/" onclick="return confirm('Learn to become a self taught programmer with w3schools')">Guidiance to learn programming as a self taught beginner </a>
      <a class="dropdown-item" href="software.html">Softwares For Designing & Programming </a>
      <a class="dropdown-item" href="signup.php" onclick="return confirm('Oops Login Or Signup To Gain Access To Tell Me What To Gist You In Tech ...')">What Should I Gist You About Pertaining To Technologies </a>
      
    </a>
     
  </div>
  </div>
</div>
</div>
 
<br>
<?php
require('dbconnection.php');
 require('auth.php');
session_start();
if (isset($_POST['username'])){
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
     header("Location: index.php");
      echo '<script>window.location="/mfonisoprogrammerblog/userlogin/index.php"</script>';
         }else{
 echo "<div class='jumbotron'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
 <form class="login" action="" method="post" name="login">
 <h1>Login  Your Account</h1>
 <h1 class="login-title text-dark">Mfonisoprogrammerblog</h1>
     <input type="text" class="login-input" name="username" placeholder="Username" autofocus>
    <input type="password" class="login-input" name="password" placeholder="Password">
    <input type="submit" value="Login" name="submit" class="login-button">
  <p class="login-lost">New Here? <a href="signup.php">Register For An Account</a></p>
  </form>
 
<?php } ?>

<style>
body {
  background: #2d343d;
}

.login {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}

h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  font-weight: 300;
  color: #ADADAD;
  text-align:center;
  background: #f7f7f7;
 
}

.login-input {
  width: 165px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
  }
.login-button {
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #f0776c;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}

.login-lost
{
  text-align:center;
  margin-bottom:0px;
}

.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:13px;
}
.form{
	text-align: center;
	color: white;
}
.form a {
	text-decoration: none;
	color: red;
}
.form a:hover {
	font-size: 20px;
	color: aqua;
}
  </style>
<br>
 <footer id="footer" class="footer-1" style="background-color: black;">
  <div class="main-footer widgets-dark typo-light">
  <div class="container">
  <div class="row">
    
   
  
  <div class="col-xs-12 col-sm-6 col-md-3 text-light">
  <div class="widget no-box text-light">
  <h5 class="widget-title">My  Terms Of Service<span></span></h5>
  <ul class="thumbnail-widget">
   
 
  <li>
    
  
  <div class="thumb-content text-light"><a href="privacy.html" class="text-light">Privacy Policy</a></div>  
  </li>
  <li>
  <div class="text-light"><a href="terms.html" class="text-light">Terms & Conditions</a></div> 
  </li>
 
  </ul>
  </div>
  </div>
  <br>
  <br>
  <div class="col-xs-12 col-sm-6 col-md-3">
    <div class="widget no-box">
    <h5 class="widget-title  text-light" >Get Started<span></span></h5>
    <p class="text-light">Get access to my new content and guidiance in the tech world this is to my tech lovers too..</p>
    <a class="btn btn-outline-dark text-light" href="https://www.youtube.com/channel/UCT04BE24-_QblzKadUXcYAg" target="_blank">Subscribe Now</a>
    </div>
    </div>
    <br> 
    <br>
  <div class="col-xs-12 col-sm-6 col-md-3">
  
  <div class="widget no-box">
  <h5 class="widget-title text-light">Contact me<span></span></h5>
  ekeremfoniso47@gmail.com
  
  </div>
  </div>
  
  </div>
  </div>
  </div>
    
  <div class="footer-copyright">
  <div class="container">
  <div class="row">
  <div class="col-md-12 text-center">
  <p  class="text-light">Copyright  Mfonisoprogrammerblog.com.ng © 2022. All rights reserved.</p>
  </div>
  </div>
  </div>
  </div>
  </footer>
  
  
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
</html>