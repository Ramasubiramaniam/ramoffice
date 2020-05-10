<!DOCTYPE html>
<html>
<head>
<title>ACEL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body style="background-color:white;">
<style>
.header img {
  float: left;
  width: 300px;
  height: 100px;
  background: #555;
}

.header h2 {
  position: relative;
  top: 15px;
  left: 20px;
}
</style>
<div>
<div class="header">
  <!-- <img src="logo1.jpg" alt="logo" /><br> -->
  <center><font color="white" face="Verdana Bold Italic"> <h1><b>ACCSYS ELECTRONICS, CHENNAI </h1></b></font></center>
</div>
<br><br>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<div class="navbar">
  <a href="dasbod.php">HOME</a>
  <a href="dasbod.php">DASHBOARD</a>
  <a href="addperson_frm.php">ADD PERSON</a>
  <div class="dropdown">
    <button class="dropbtn">Requests 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Service</a>
      <a href="#">Pending</a>
      <a href="#">Completed</a>
    </div>
  </div> 
</div>
</body>
<br>

<!-- *************** -->
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: White;
  padding: 20px 50px;
  font-size: 15px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

body {
  font-family: Arial, sans-serif;
  background: url(http://www.shukatsu-note.com/wp-content/uploads/2014/12/computer-564136_1280.jpg) no-repeat;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}
/*_________________popup css code______________*/
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
</head>
<body>

  <center><h2><font color="White"> ADD PERSON / SYSTEM </font></h2></center>

  <br>
<form action="addperson.php" method="post">

<center><label><b><font color="White">PERSON / SYSTEM NAME :</font></b></label> &nbsp &nbsp  &nbsp &nbsp 
<input class="input" name="Name" type="text" value=""> </center>
<br> <br> 
<center><label><b><font color="White">SYSTEM IP :</font></b></label>  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
<input class="input" name="SysIP" type="text" value=""><br> <br> </center>
<center><input class="submit" name="submit" type="submit" value="SUBMIT" onclick="Warn();" style="background-color:light blue; width:40; height:25;"> </center>

<br> <br>  <br> <br> 

<div class="box">
  <a class="button" name="submit" type="button" href="#popup1">ADD</a>
</div>

<div id="popup1" class="overlay">
  <div class="popup">
    <h2>Adding Person / System</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      PERSON / SYSTEM HAS BEEN INSERTED
    </div>
  </div>
</div>
</form>
</body>
</html>