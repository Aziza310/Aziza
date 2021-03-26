<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div">
        <form  method="get">
            <label for="login">Username</label>
            <input type="text" id="fname" name="fname" ><br><br>
            <label for="password" >Password</label>
            <input  id="lname" type="password" name="lname"><br><br>
            <button onclick="myFunction()">login</button>
            <a href="https://instagram.com/" id="a"></a>

          </form>
          

          
    </div>
    <h1 id="demo"></h1>
    <script> 
      function myFunction(){
var x = document.getElementById('fname').value
var b = document.getElementById('lname').value
var form = document.querySelector('form')

document.getElementById("demo").innerHTML = x;



if (x == "aziza" , b == "12345"){
    form.setAttribute("action", "https://instagram.com/")

}else{
    alert("permission denied")
}

}
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html style="background: white url('https://www.publicdomainpictures.net/pictures/260000/velka/above-clouds.jpg')">
	
<head>
	<title>aziza</title>
<style>
img {
  display: block;
  margin-left: auto;
 
}



</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}


.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}


</style>
</head>
<body>
	<h1 style="color:black">Hello, I'm Aziza!</center></h1>
	<img src ="https://yt3.ggpht.com/ytc/AAUvwnhXw7cZDSy_VD577yp5QIJyDJ5gk6RFZr8pfTW_=s900-c-k-c0x00ffffff-no-rj" alt="iaau" width="200"; height="200" style="  border-radius: 50%; border="2 class="rightpic">


	<p><i style="color:black">Web developer from Bishkek.</i></p>
	<p><i style="color:black">Welcome to my Portfolio.</i> </p> 
    <p><i style="color:black">I create custom websites  to help busnisses do better online.</i></p>
	
	

<h2 style="color: black">Me in social media</h2>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://instagram.com/__dzhamangulova77__?igshid=1hbwwstdylu7b" class="fa fa-instagram"></a>
		
</style>
</head>
<body>
	
 
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="fname"required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="lname"required>
        
      <button type="submit" onclick="myFunction()">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
      
      <script lauguage="javascript">
	function myFunction(){
      var a = document.getElementById("fname").value
      var b = document.getElementById("lname").value
      var form = document.querySelector("form")

       if (a=="aziza" && b == "aziza"){
        form.setAttribute('action', 'https://www.youtube.com/');
       }else{
        alert('permission denied')
       }
	}


</script>



    </div>
  </form>
</div>





