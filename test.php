<!DOCTYPE html>
<head>
  <title> Test </title>
</head>
<body>
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

    <?php
          if(isset($_POST['submit'])){
              $n = $_POST['N'];
              $p = $_POST['P'];
              $k = $_POST['K'];

              echo "<script> document.location.href='http://snapdragon7.pythonanywhere.com'; </script>";
          }
    ?>
</body>