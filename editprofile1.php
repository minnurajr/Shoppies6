<?php
include 'conn.php';

$q="select * from districts";
$sq=mysqli_query($con,$q);
?>
<html>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Shoppie</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<script src="validate.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/user.js"></script>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<img src="img/logon.png" alt="logo">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="userhome.php">Home</a></li>
				
				
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="">Home</a> /
				<span>Edit</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
<body>


<table width="1236" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="291" height="363"></td>
    <td width="366" valign="top"><div align="center">
      <p>Edit your profile </p>
      <form name="form1" method="post" action="editprofile1.php">
	    <?php
	  session_start();
	  include("connection.php");
$Lid=$_SESSION['lid'];
if($Lid>0)
{
	
	$obj=new db();
	$select="select * from registration_user where loginid='$Lid'";
	$data=$obj->execute($select);
	$row=mysqli_fetch_array($data);
	?>
	   
	  
       <center><table width="238" border="1" align="center">
          
          <tr>
            <td>Name</td>
            <td><input name="name" id= "name"type="text" value="<?php echo $row['uname'];?>" id="name" required></td>
			<span id="fullname_error_message" style="color:red"></span>
          </tr>
          <tr>
            <td>Dob</td>
            <td><input name="dob" type="text" id="dob" value="<?php echo $row['dob'];?>" required></td>
          </tr>
          
             <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="m" checked>Male
            <input type="radio" name="gender" value="f">Female</td></tr>
          </tr>
          <tr>
            <td>Mobno</td>
            <td><input name="no" type="text" id="no" value="<?php echo $row['mobno'];?>" required></td>
									<br><span id="phone_error_message" style="color:red"></span>
          </tr>
          <tr>
            <td>Pincode</td>
            <td><input name="pincode" type="text" id="pincode" value="<?php echo $row['pincode'];?>" pattern="[0-9]{6}" maxlength="6" required title="Enter only numbers" required></td>
          </tr>
          <tr>
            <td>Housename</td>
            <td><input name="hname" type="text" id="hname" value="<?php echo $row['hname'];?>" required></td>
			<br><span id="address_error_message" style="color:red"></span>
          </tr>
         <td>Street</td>
            <td><input name="street" type="text" id="street" value="<?php echo $row['street'];?>" required></td>
			<br><span id="street_error_message" style="color:red"></span>
          </tr>
		 
		 </tr>
         <td>Locality</td>
            <td><input name="locality" type="text" id="locality" value="<?php echo $row['locality'];?>" required></td>
			<span id="city_error_message" style="color:red"></span>
          </tr>
		  <tr><td>District</td><td>
<select name="did" id="did" required>

							<option value="district">District</option>
							<?php 
							 while($r=mysqli_fetch_array($sq))  
							 {
							?>
                    <option value="<?php echo $r['did'];
					?>">
					<?php echo $r['districtname']?> 
					<?php
							 }
                      ?>				
							</select>
							</tr>
							<tr>
            <td>state</td>
            <td><input name="state" type="text" id="state" value="<?php echo $row['state'];?>" required></td>
          </tr>
		  
          <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="submit" value="submit" id="submit">
               
            </div></td>
            </tr>
        </table>
		
<?php
}
?>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td width="579"></td>
  </tr>
  <tr>
    <td height="13"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</center>





<?php
//$bcid=$_SESSION['lid'];
//include("connection.php");
if(isset($_POST['submit']))
{
$s1=$_POST["name"];
	  $s2=$_POST["dob"];
	  $s3=$_POST["gender"];
	  $s4=$_POST["no"];
	  $s5=$_POST["pincode"];
	  $s6=$_POST["hname"];
	  $s7=$_POST["street"];
	   $s8=$_POST["locality"];
	    $s9=$_POST["did"];
		 $s11=$_POST["state"];

$sqll="UPDATE `registration_user` SET uname='$s1',dob='$s2',gender='$s3',mobno='$s4',pincode='$s5',hname='$s6',street='$s7',locality='$s8',did='$s9',state='$s11'  WHERE loginid='$Lid'";
$objj=new db();
$objj->execute($sqll);
echo "<script>  alert('Update successfull');
			 
							window.location='editprofile1.php'</script>";
				
}
	
	?>
	
	
   


<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
