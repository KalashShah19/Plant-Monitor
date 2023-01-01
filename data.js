
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
    var id=1;
    var connect_db = ref(db, 'user/');
    var data;
  
    onValue(connect_db, (snapshot)=>{
        data = snapshot.val();
      });
    export function login(){
      alert("Inside");
      var email = document.getElementById('email').value; 
      var password = document.getElementById('password').value;
      // alert(email);
      for(id in data){
          // document.write(data[id].fname + " " + data[id].lname + " " + data[id].number + " " + data[id].email + " " + data[id].password + " " + data[id].address + " " + data[id].pincode + " " + data[id].gender + " " );
          // alert(data[1].email);
          if(email == data[id].email && password == data[id].password){
              alert("Login Successfull");
          }
          else{
              alert("Login Failed");
          }
      }
    }
