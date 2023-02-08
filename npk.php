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

    <title> Plant Monitor | Health Detector  </title>
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

      progress.red{
        color:red;
      }
      progress.red[value] {color:red} /* IE10 */
      progress.red::-webkit-progress-bar-value {background-color:red}
      progress.red::-webkit-progress-value {background-color:red}
      progress.red::-moz-progress-bar {background-color:red}

      progress.green{
        color:green;
      }
      progress.green[value] {color:green} /* IE10 */
      progress.green::-webkit-progress-bar-value {background-color:green}
      progress.green::-webkit-progress-value {background-color:green}
      progress.green::-moz-progress-bar {background-color:green}

      progress.yellow{
        color:yellow;
      }
      progress.yellow[value] {color:yellow} /* IE10 */
      progress.yellow::-webkit-progress-bar-value {background-color:yellow}
      progress.yellow::-webkit-progress-value {background-color:yellow}
      progress.yellow::-moz-progress-bar {background-color:yellow}

    </style>
  </head>

  <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    

 <!-- MENU -->
 <?php
     include 'clientheader.php';
 ?>

    <center>
    <h2 style="color: green;" class=" wow fadeInDown"> Heath Detector  </h2>
    <p class=" wow fadeIn"> Enter Your Plant's Info here :-</p> <br>
    <form method="" action="http://snapdragon7.pythonanywhere.com" id="form">
      <table class=" wow fadeInRight"> 
        <tr>
          <td><label for="N" style="color: green;"> N </label></td>
           <td><input type="number" name="N" id="N"> </td>
        </tr>
        <tr></tr>
        <tr>
          <td><label for="P" style="color: green;"> P </label></td>
          <td><input type="number" name="P" id="P"></td> 
        </tr>
        <tr>
            <td><label for="K" style="color: green;"> K </label></td>
          <td><input type="number" name="K" id="K"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="submit" id="ml" style="background-color: green; color: white; width:100px; height:40px;font-size:large;" value="Submit"></td>
        </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['N'])){
          $n = $_GET['N'];
          $p = $_GET['P'];
          $k = $_GET['K'];
          $npred = $_GET['NPred'];
          $ppred = $_GET['PPred'];
          $kpred = $_GET['KPred'];
          
          echo '<p class="wow fadeInLeft"> Check Your Plant\'s Health Here :- </p>    
    <div class="container wow fadeInLeft">
        <div class="row">
          <div class="col-6 col-sm-4">
            <h3> Nitrogen </h3>
            <progress name="npk" id="npk" class="" value="80" max="100"> </progress>
            <p> Great </p>
        </div>
        <div class="col-6 col-sm-4"> 
            <h3> Phosphate </h3>
            <progress name="water" id="water" class="" value="30" max="100"> </progress> 
            <p> Bad </p>
        </div>
        <div class="col-6 col-sm-4">
            <h3> Pottasium </h3>
            <progress name="ph" id="ph" class="" value="50" max="100"> </progress>
            <p> Good </p>
        </div>
        </div>
      </div>
      <hr>';
        }
    ?>

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
