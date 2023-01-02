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
    </style>
  </head>

  <body>
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
                <a href="index.html" style="color:white" class="navbar-brand"> Plant Monitor</a>
           </div>

           <!-- MENU LINKS -->
           <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                 <li><a href="home.html" class="smoothScroll active"> | Home | </a></li>
                 <li><a href="profile.html" class="smoothScroll active"> | Profile | </a></li>
                 <li><a href="checkup.php" class="smoothScroll"> | Checkup | </a></li>
                 <li><a href="index.html" class="smoothScroll"> | Logout | </a></li>
            </ul>
       </div>

      </div>
 </section>

<!-- Checkup -->
<section>
    <center>
        <h2> Plant Checkup </h2>

        <form method="post" enctype="multipart/form-data"> 
            <h3 style="color: green;"> Upload Photo </h3> <br>
            <input type="file" name="image" id="image" style="font-size: large;" accept="image/jpg, image/jpeg, image/png"> <br>
            <input type="submit" name="check" id="check" style="background-color: green; color: white; width:80px; height:35px;font-size:large;" value="CHECK">
        </form> <br> 
        
        <img src="" id="plant" style="height: 200px; width: 200px;" alt="Your Image">
    <hr>

  <?php 
    if(isset($_POST['check'])){ 
      if(!is_uploaded_file($_FILES['image']['tmp_name'])){
        echo "<script> alert('Upload Photo of Your Plant First!');</script>";
      }
      else {
      ?>
    <p> Check Your Plant's Health Here :- </p>    
    <div class="container">
        <div class="row">
          <div class="col-6 col-sm-4">
            <h3> NPK </h3>
            <progress name="npk" id="npk" value="40" max="100"> </progress>
            <p> Good </p>
        </div>
        <div class="col-6 col-sm-4"> 
            <h3> Water </h3>
            <progress name="npk" id="npk" value="40" max="100"> </progress>
            <p> Good </p>
        </div>
        <div class="col-6 col-sm-4">
            <h3> PH </h3>
            <progress name="npk" id="npk" value="40" max="100"> </progress>
            <p> Good </p>
        </div>
        </div>
      </div>

      <h3> Your Plant Needs :-  </h3> <br>
        <p> > Water</p>
        <p> > Water</p>
        <p> > Water</p>
        <p> > Water</p>
      </center>
</section>
    <?php } } ?>

 <!-- FOOTER -->
 <footer>
    <div style="background-color: green;color:white;text-align: center; padding: 5px; height: 80px;">
        <h3>Copyright &copy; 2022 Plant Monitor </h3>
        </div>
      </footer>
    </body>
  </html>