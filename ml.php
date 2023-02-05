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

    <title> Plant Monitor | ML  </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/tooplate-style.css">

    <style>
      table, tr, td, th {
          padding: 5px;
      }
    </style>
  </head>

  <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    

 <!-- MENU -->
 <section style="background-color: green; color:white" class="navbar navbar-default navbar-static-top" role="navigation">


    <div class="container">
         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>

              <!-- lOGO TEXT HERE -->
              <a href="index.html" style="color:white" class="navbar-brand wow fadeInLeft"> Plant Monitor</a>
         </div>

         <!-- MENU LINKS -->
           <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                 <li><a href="home.html" class="smoothScroll active"> | Home | </a></li>
                 <li><a href="profile.html" class="smoothScroll active"> | Profile | </a></li>
                 <li><a href="checkup.php" class="smoothScroll"> | Checkup | </a></li>
                 <li><a href="records.html" class="smoothScroll"> | Records | </a></li>
                 <li><a href="index.html" id="logout" class="smoothScroll"> | Logout | </a></li>
            </ul>
       </div>

    </div>
</section>

    <center>
    
    <h2 style="color: green;" class=" wow fadeInDown"> ML  </h2>
    <p class=" wow fadeIn"> Enter Your Plant's Info here :-</p> <br>
    <form method="post" action="" id="form">
      <table class=" wow fadeInRight"> 
        <tr>
          <td><label for="N" style="color: green;"> N </label></td>
           <td><input type="number" name="N" id="N"> </td>
        </tr>
        <tr></tr>
        <tr>
          <td><label for="number" style="color: green;"> P </label></td>
          <td><input type="number" name="P" id="P"></td> 
        </tr>
        <tr>
            <td><label for="number" style="color: green;"> K </label></td>
          <td><input type="number" name="K" id="K"></td> 
        </tr>
        <tr>
          <td><input type="submit" name="submit" id="ml" style="background-color: green; color: white; width:100px; height:40px;font-size:large;" value="Submit"></td>
        </tr>
        </table>
    </form>

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
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
     $(".logout").click(function(){
          sessionStorage.clear();
          alert("Logging Out...");
     })
    </script>
  </body>
</html>