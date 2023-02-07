<!DOCTYPE html>
<html>
  <head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <script> 
     $( document ).ready(function() {
          if(sessionStorage.getItem("user") == null){
               document.location.href="login.html";
          }
     });
     </script>

    <title> Plant Monitor | Home  </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/tooplate-style.css">
    <link rel="icon" type="image/x-icon" href="../../images/icon.png">


    <style>
      table, tr, td, th {
          padding: 5px;
      }
    </style>
  </head>

  <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    

 <!-- MENU -->
 <?php
     include 'clientheader.php';
 ?>

  <center>
     <h2> <span id="welcome"> </span> </h2>
    <h2 style="color: green;" class="wow fadeInDown"> Welcome <span id="user"> User </span> </h2>
    <p class="wow fadeIn"> Click on What You Want to DO  :- </p> <br>
    <h3>
        <ul class="wow fadeInRight">
            <li> <a href="checkup.php"> Check Your Plant's Health </a> </li>
            <li> <a href="profile.html"> Update Your Profile </a> </li>
            <li> <a href="records.html"> View Past Records </a> </li>
            <li> <a href="index.html" class="logout"> Logout </a> </li>
        </ul>
    </h3>
    
    <script>
          if(sessionStorage.getItem('welcome') != null){
               document.getElementById('welcome').innerHTML = sessionStorage.getItem('welcome');
               setTimeout(function(){
                    sessionStorage.setItem('welcome', "");
                    $('#welcome').fadeOut()
               }, 2000);
          }
          var user = sessionStorage.getItem("user");
          document.getElementById('user').innerHTML = user;
     </script>

</center>
 <!-- FOOTER -->
 <footer>
  <div class="container">
       <div class="row">
            <div class="col-md-10 col-sm-4 text-align-center">
                 <div class="footer-thumb"> 
                      <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                      <p> Company </p>

                      <div class="contact-info wow fadeInUp">
                           <p><i class="fa fa-phone"></i> 9426921383</p>
                           <p><i class="fa fa-envelope-o"></i> <a href="#">kalashshah@gmail.com</a></p>
                      </div>
                 </div>
            </div>

                      <ul class="social-icon">
                           <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                           <li><a href="#" class="fa fa-twitter"></a></li>
                           <li><a href="#" class="fa fa-instagram"></a></li>
                      </ul>
                 </div>
            </div>
          </div>
          <div style="background-color: green;color:white;text-align: center; padding: 5px; height: 80px;">
            <h3>Copyright &copy; 2022 Plant Monitor
          </div>
    </footer>
     <!-- SCRIPTS -->
     <script src="../../js/jquery.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/jquery.sticky.js"></script>
     <script src="../../js/jquery.stellar.min.js"></script>
     <script src="../../js/wow.min.js"></script>
     <script src="../../js/smoothscroll.js"></script>
     <script src="../../js/owl.carousel.min.js"></script>
     <script src="../../js/custom.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
     $(".logout").click(function(){
          sessionStorage.clear();
          alert("Logging Out...");
     })
    </script>
  </body>
</html>