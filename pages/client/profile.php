<html>
 <head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <script> 
     $( document ).ready(function() {
          if(sessionStorage.getItem("user") == null){
               // document.location.href="login.html";
          }
     });
     </script>

    <title> Plant Monitor | Profile  </title>
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
        <h2 style="color: green;" class="wow fadeInDown"> Profile </h2>
        <p class="wow fadeIn"> Your Data :- </p> <br>
        <table class="wow fadeInRight">
      <form method="post">
     <tr>
          <td><label for="fname" style="color: green;"> First Name </label></td>
          <td><input type="text" name="fname" id="fname"> </td>
          </tr>
          <tr>  
               <td><label for="lname" style="color: green;"> Last Name </label></td>
               <td><input type="text" name="lname" id="lname"> <br></td>
          </tr>
    <tr>
      <td><label for="number" style="color: green;"> Mobile Number </label></td>
      <td><input type="number" name="number" id="number"></td>
    </tr>
    <tr>
        <td><label for="Email" style="color: green;"> Email </label></td>
        <td><input type="email" name="email" id="email"></td>
    </tr>
    <tr>
      <td><label for="address" style="color: green;"> Address </label></td>
      <td><input type="text" name="address" id="address"> </td>
    </tr>
    <tr>
      <td><label for="pincode" style="color: green;"> Pin Code </label></td>
      <td><input type="number" name="pincode" min="111111" max="999999" id="pincode"> </td>
    </tr>
  <tr>
        <td><label for="gender" style="color: green;"> Gender </label></td>
  <td> Male : <input type="radio" id="male" name="gender" value="Male"> <br>
        Female : <input type="radio" id="female" name="gender" value="Female"> <br>
  Other : <input type="radio" id="other" name="gender" value="Other"> </td>
  </tr>
    <tr>
        <td><input type="submit" id="save" name="save" value="Save" style="width: 120px;height:40px; font-size:large; background-color: green; color: white;"></td>
        <td><input type="submit" id="change" name="change" value="Change Password" style="width: 200px;height:40px; font-size:large; background-color: green; color: white;"></td>
        </tr>
    </form>
    </table>

  <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
    import { getDatabase, ref, onValue, set, child, update, remove } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js";

    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyCOW9_miFUECVcEJJnBt1ep-ISA8MWv9A4",
      authDomain: "plant-monitor-19.firebaseapp.com",
      databaseURL: "https://plant-monitor-19-default-rtdb.asia-southeast1.firebasedatabase.app",
      projectId: "plant-monitor-19",
      storageBucket: "plant-monitor-19.appspot.com",
      messagingSenderId: "879511971757",
      appId: "1:879511971757:web:ba44479807a63a5ea7e324"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    var db = getDatabase();
    var id = sessionStorage.getItem("id");
    var connect_db = ref(db, 'user/' + id);
    var name, surname, number;
    onValue(connect_db, (snapshot)=>{
      document.getElementById('fname').value = snapshot.val().fname;
      document.getElementById('lname').value = snapshot.val().lname;
      document.getElementById('number').value = snapshot.val().number;
      document.getElementById('email').value = snapshot.val().email;
      document.getElementById('address').value = snapshot.val().address;
      document.getElementById('pincode').value = snapshot.val().pincode;
      var gender = snapshot.val().gender;
      if(gender == "Male"){
          document.getElementById("male").checked = true;
      }
      if(gender == "Female"){
          document.getElementById("female").checked = true;
      }
      if(gender == "Other"){
          document.getElementById("other").checked = true;
      }
    })

    
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
     $("#logout").click(function(){
          sessionStorage.clear();
          alert("Logging Out...");
     })
    </script>
</body>
</html>