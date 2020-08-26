<html>
<head>
    <title>Google Authentication</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <center>

     <h1></h1>

     <!-- <button type="button" id="googlebtn" onclick="GoogleLogin();"></button> -->

 </center>
<script src="https://www.gstatic.com/firebasejs/6.0.1/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
   var firebaseConfig = {
  apiKey: "AIzaSyAJofMOaCamEvTQ2Aeq9iarYuKdIRmAylA",
  authDomain: "major-c2711.firebaseapp.com",
  databaseURL: "https://major-c2711.firebaseio.com",
  projectId: "major-c2711",
  storageBucket: "major-c2711.appspot.com",
  messagingSenderId: "859781101604",
  appId: "1:859781101604:web:9616b694c452f5260580b1",
  measurementId: "G-NC3MGPH4RX"
};
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script>

    //first of all create google provider object

    var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login

        //window.location="index.php";
    }).catch(function (error) {
        var errorMessage=error.message;
        alert(errorMessage);
    });
</script>
<script src="js/google.js" type="text/javascript"></script>
</body>
</html>

