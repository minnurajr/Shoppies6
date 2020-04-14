
	 <!DOCTYPE html>
<html>
<head>

<style>
body
{
<body background="regcustomer.jpg">
}

input[type=text],[type=date],[type=button],[type=email],[type=password] ,select, textarea {
    width: 60%;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 5px;
    resize: vertical;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 6px;
  text-decoration: none;
  font-size: 20px;
	
width:10%;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
body {
  margin: 0;
  padding: 0;
  background:violet;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}
h2 

  {
    color: tomato;
    text-align: center;
    
	margin-top:80px;
	margin-bottom:80px;

   }
h1{
	color:white;
}

.img{
	width:180px;
	height:50px;
    }
.centered {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
.text{
	width:105%;
	height:50%;
	margin-left:200px;
	margin-top:100px;
	 column-count: 2;
      }
.footer {
  position:fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height:8%;
   background-color: black;
   margin-top:100px;
}
ul{
margin:0px;
padding:0px;
list-style:none;
}
ul li{
float:left;
width:200px;
height:60px;
background-color:maroon;
opacity:.9;
line-height:50px;
text-align:center;
font-size:20px;
margin-right:30px;
}
ul li a{
text-decoration:none;
}
ul li a:hover{
background-color-green;

}
ul li ul li
{
display:none;l
}
ul li:hover ul li{
display:block;
}

h1
{
margin-left:120px;
color:white;
}
label {
    padding:12px,20px;
    display: inline-block;
color:white;
}

input[type=submit] {
    
    background-color: pink;
	width: 100%;
    padding: 20px 30px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left=200px;
    float: center;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=button]:hover {
    background-color: #45a049;
}
.container {
    border-radius:15px;
    background-image: url("regstaff.jpg");
    padding: 200px;
    margin-left:320px;
width:40%;
 
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
a{
	color: white;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit],input[type=button] {
        width: 100%;
        margin-top: 0;
    }
}
 </style>

<body >
<center>
<ul><li><a href="staff.php">BACK</a></ul></center>

<div class="container">

 <form name="myForm"  method="post"  autocomplete="off"

 
   onsubmit="return validateForm()" method="post">
   
   
    
<div class="row">
      <div class="col-25">
        <label for="dob"> NEW PASSWORD</label>
      </div>
      <div class="col-75">
 <input type="password" id="password" name="newpassword"  id="newpassword" pattern=".{6,}" required title="Min of 6 character " required>
       
      </div>
	  
    
<div class="row">
      <div class="col-25">
        <label for="dob"> CONFIRM NEW PASSWORD:</label>
      </div>
      <div class="col-75">
 <input type="password" id="password" name="confirmnewpassword" id="confirmnewpassword" required>
       
      </div>
 <div class="row">
     <div class="col-25">
  <center><center><input type="submit" name="submit"  value="UPDATE"></center> </center><br>
 </div>
 </div>
 
  
   </form>
    </body>
    </html> 





   

<?php
include("connection.php");
	  session_start();
	  
$Lid=$_SESSION['lid'];
	 
if(isset($_POST['submit']))
{


$new=$_POST["newpassword"];
$conf=$_POST["confirmnewpassword"];
	if ($new==$conf)
	{ 
				
	$sqll="update login set password='$new' where loginid='$Lid'";
	$objj=new db();
$objj->execute($sqll);
	
		echo "<script>  alert('Updated successfull');
			 
							window.location='chngpswd.php'</script>";
		
	}
	else
	{
		echo "<script>  alert('password missmatch');
			 
							window.location='chngpswd.php'</script>";
		
		
	?>
<?php
	}
}
  
     
?>
  
	
</body>
    </html>  