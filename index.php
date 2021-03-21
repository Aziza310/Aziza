<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.png" type="image/x-icon">
<style>
body {
  background-image: url('https://www.publicdomainpictures.net/pictures/260000/velka/above-clouds.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: black;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: black;
  background-color: transparent;
  text-decoration: underline;
}
</style>
	<title>aziza</title>
</head>
<body style="background-color:powderblue;">
	<div><img src="profile.jpg" width="300" height="300" style="vertical-align:right; margin-top:0px;  border-radius: 50%; float: right;" border="2";>
	</div>
	<div>
		<h1 style="text-align:center; color:Lime; font-family:matura mt script capitals;" ><em> Aziza Dzhamangulova</em> </h1>
	</div>
<div>
	<h3 style="color:black;">Social Status: Student</h3>
	<h3 style="color:black;">Age: 18 </h3>
  <h4 style="color:black;">Phone number: +996-706 25 75 25 </h4>
	
        
</a>
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
        form.setAttribute('action', 'https://www.youtube.com/watch?v=yY7iGa4t9-I');
       }else{
        alert('permission denied')
       }
	}


</script>



    </div>
  </form>
</div>





