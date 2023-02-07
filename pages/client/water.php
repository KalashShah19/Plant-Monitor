<!DOCTYPE html>
<html>
  <head>

    <title> Plant Monitor | Checkup </title>
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
        text-align:center;
        font-size:x-large;
    }

      button {
        color: white;
        background-color: green;
        border: none;
        width: 120px;
        height: 70px;
        font-size: x-large;
      }

    </style>
  </head>

  <body>
 <!-- MENU -->
 <?php
     include 'clientheader.php';
 ?>

<!-- Checkup -->
<section>
    <center>
      <h2 class="wow fadeInDown" style="color:blue"> Water </h2> <hr>
      <!-- <p> What do You want to Check in Your Plant? </p> -->
      <table>
        <tr>
            <td> Moisture </td>
            <td> Start </td>
            <td> Stop </td>
        </tr>
        <tr>
            <td> 500 </td>
            <td> 12/12/2022 5:05 </td>
            <td> 12/12/2022 5:15 </td>
        </tr>
      </table>
    </center>

 <!-- FOOTER -->
 <footer>
  <div class="container">
       <div class="row"> 
            <div class="col-md-10 col-sm-4 text-align-center">
                 <div class="footer-thumb"> 
                      <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                      <p class="wow fadeInUp"> Company </p>

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

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
        $("#logout").click(function(){
          sessionStorage.clear();
          alert("Logging Out...");
        }) 
    </script>
     <!-- SCRIPTS -->
     <script src="../../js/jquery.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/jquery.sticky.js"></script>
     <script src="../../js/jquery.stellar.min.js"></script>
     <script src="../../js/wow.min.js"></script>
     <script src="../../js/smoothscroll.js"></script>
     <script src="../../js/owl.carousel.min.js"></script>
     <script src="../../js/custom.js"></script>

    </body>
  </html>