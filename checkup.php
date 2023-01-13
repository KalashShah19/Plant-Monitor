<!DOCTYPE html>
<html>
  <head>

    <title> Plant Monitor | Checkup  </title>
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

  <body>
 <!-- MENU -->
 <section style="background-color: green; color:white" class="navbar navbar-default navbar-static-top wow fadeInDown" role="navigation">


      <div class="container ">
           <div class="navbar-header">
                <button class="navbar-toggle wow fadeInRight" data-toggle="collapse" data-target=".navbar-collapse">
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

<!-- Checkup -->
<section>
    <center>
        <h2 class="wow fadeInDown"> Plant Checkup </h2> <hr>

        <form method="post" class="wow fadeInUp" enctype="multipart/form-data"> 
            <h3 style="color: green;"> Upload Photo </h3> <br>
            <input type="file" name="image" id="image" style="font-size: large;" accept="image/jpg, image/jpeg, image/png"> <br>
            <input type="submit" name="check" id="check" style="background-color: green; color: white; width:80px; height:35px;font-size:large;" value="CHECK">
        </form> <br> <hr>
        
        
        <?php 
        if(isset($_POST['check'])){ 
          if(!is_uploaded_file($_FILES['image']['tmp_name'])){
            echo "<script> alert('Upload Photo of Your Plant First!');</script>";
          }
          else {
            $folder='images/';
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $arr = explode('.',$_FILES['image']['name']);
            $file_ext = strtolower(end($arr));
            $target_file = $folder . basename($_FILES["image"]["name"]);
            $path = $folder.$file_name;
              
            $extensions= array("jpeg","jpg","png");

            if(in_array($file_ext,$extensions)=== false){
              $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
            }
            else{
              move_uploaded_file($file_tmp, $path);
            }
          }

        if(!empty($errors)==true){
          print_r($errors);
        }else{
      ?>
      <p> Your Plant - </p>
        <img src='images/<?php echo $file_name; ?>' id='plant' class='wow zoomIn' style='width: 200px;' alt='Your Image'>
    <hr>
    <p class="wow fadeInLeft"> Check Your Plant's Health Here :- </p>    
    <div class="container wow fadeInLeft">
        <div class="row">
          <div class="col-6 col-sm-4">
            <h3> NPK </h3>
            <progress name="npk" id="npk" class="" value="80" max="100"> </progress>
            <p> Great </p>
        </div>
        <div class="col-6 col-sm-4"> 
            <h3> Moisture </h3>
            <progress name="water" id="water" class="" value="30" max="100"> </progress> 
            <p> Bad </p>
        </div>
        <div class="col-6 col-sm-4">
            <h3> PH </h3>
            <progress name="ph" id="ph" class="" value="50" max="100"> </progress>
            <p> Good </p>
        </div>
        </div>
      </div>
      <hr>
      <div>
        <h2 class="wow fadeInRight"> Analsys :  </h2>
        <h3 class="wow fadeInRight" style="color:blue;"> Your Plant Needs :-  </h3> <br>
          <p class="wow fadeInRight"> > Water </p> 
      </div> 
      <hr>
      <div>  
        <h3 class="wow fadeInRight" style="color:red"> Your Plant may have :-  </h3> <br>
        <p class="wow fadeInRight"> > Powdery Mildew. </p> 
      </div>
      <hr>
      </center>
</section>
    <?php } } ?>

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

      <script>
        function inRange(x, min, max) {
          return ((x-min)*(x-max) <= 0);
       }
        var npk = document.getElementById('npk').value;
        var water = document.getElementById('water').value;
        var ph = document.getElementById('ph').value;
        
        if( npk >= 1 && npk < 50){
          document.getElementById('npk').classList.add("red");
        }
        if( npk <= 70 && npk >= 50 ){
          document.getElementById('npk').classList.add("yellow");
        }
        if(npk > 70 ){
          document.getElementById('npk').classList.add("green");
        }
        
        if( water >= 1 && water < 50){
          document.getElementById('water').classList.add("red");
        }
        if( water <= 70 && water >= 50 ){
          document.getElementById('water').classList.add("yellow");
        }
        if( water > 70 ){
          document.getElementById('water').classList.add("green");
        }
        if( ph >= 1 && ph < 50){
          document.getElementById('ph').classList.add("red");
        }
        if( ph <= 70 && ph >= 50 ){
          document.getElementById('ph').classList.add("yellow");
        }
        if( ph > 70 ){
          document.getElementById('ph').classList.add("green");
        }

      </script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
        $("#logout").click(function(){
              sessionStorage.clear();
              alert("Logging Out...");
        })
    </script>
     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

    </body>
  </html>