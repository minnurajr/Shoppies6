<?php
session_start();
	include "conn.php";
	$Lid=$_SESSION['lid'];
//	$item_id=$_GET['id'];
//$item_id=$_SESSION['item_id'];
	//$name=$_GET['id1'];
	//$price=$_GET['id2'];
	//$image=$_GET['id3'];
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
  font-family: Times New Roman, Helvetica, sans-serif;
}
body
{
text-align:center;
background-image:url("bg.jpg");
background-size:cover;
}

.topnav {
  overflow: hidden;
  background-color: white;
}
  
.topnav a {
  float: left;
  color: blue;
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
h3{
	color:white;
}
.img{
	width:1800px;
	height:500px;
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

</style>
</head>
<body>







<html lang="en">
<head>
<style>
input[type=submit]{
    width: 100%;
	
	text-align: center;
  background-color: #4CAF50;
    padding: 10px 45px;
    margin: 2px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
th{
      width: 50px;
      height: 30px;
      background-color:white;
      color: black;

    }
    td{
      width: 50px;
      height: 30px;
	  color: white;
      

    }
    th,td{
      text-align: left;
      padding: 3px;
    }

</style>


    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
          window.scrollTo(0, 1);
		}



</script>
	
	
	
</head>

<body>

	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-gift"></span> SHOPPIE </a></h1>
			


<!-- banner -->
<div class="banner" id="home">

<div class="col-lg-6 col-md-6 px-lg-5 px-0">
					<div class="banner-form-w3 ml-lg-7">
						<h3 class="mb-3"><marquee>Your  Previous  Orders  On  Shoppie  Can  Modify  If  It  Not Suits for You! We Will Make It Good For You..Applicable Upto Rs.500</marquee></h3><br>
								


</div>
</div>
</div>

<div class="gtco-section border-bottom" >
		<div class="gtco-container" style="margin-top: -50px;">
			<div class="row">
				<div class="col-md-12">
					

				<div class="row form-group"  style="margin-top: 50px;padding-left: 40px;">
					
				<center>	<table border="1" style="width: 75%;">
						<tr style="height: 40px">
						    
						 
							
							
							<th style=" padding-left: 20px;">Product Id</th>
							<th style=" padding-left: 20px;">Transaction Id</th>
							
							<th style=" padding-left: 20px;">Submit</th>
								
			</tr>
		
    <tr>

<td style="font-size: 20px;" >
<input type="text" id="pid" name="pid" class="form-control"  required title="" required>
</td>
<td style="font-size: 20px;"> 
<input type="text" id="tid" name="tid" class="form-control"  required title="" required>
  </td>
  <td style="font-size: 20px;"> 
<input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">
  </td>
  

</tr>
 

	
</table>
</center> 
<h3>You can collect your Transaction Id & Product Id form your Previous Orders</h3>
<br><br><b><a href="../prvs.php">Previous Orders</a>
</body>
</html>



