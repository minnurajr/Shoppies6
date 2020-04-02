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
				<span>Cart</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
<body>


<table  border="0" cellpadding="0" cellspacing="" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="291" height="363"></td>
    <td width="366" valign="top"><div align="center">
      <p>Your Cart </p>
      
	   <?php
					$con = mysqli_connect("localhost", "root", "","keshu");
					$count=0;
$se=" select * from `cart`,`productsn` where cart.prodid = productsn.prodid && loginid = '$Lid' && cart.status='1'";
 $re=mysqli_query($con,$se);
 $count=mysqli_num_rows($re);
 if ($count>0)
 {
?>
				<center>	<table border="1" style="width: 100%;" align="center">
						<tr style="height: 40px">
						    
						 
							
							<th style=" padding-left: 20px;">Name</th>
							<th style=" padding-left: 20px;">Price</th>
							
							<th style=" padding-left: 20px;">Image</th>
							<th style=" padding-left: 20px;">Quantity</th>
							<th style=" padding-left: 20px;">Size</th>
							<th style=" padding-left: 20px;">Total</th>
							<th style=" padding-left: 20px;">Remove</th>
								
			</tr>
		<?php
					
			$sub_total=0;			
	while($row=mysqli_fetch_array($re))
  
 {
		?>
    <tr>
<td style="font-size: 20px;"> 
   <?php 
       echo $row['title'];
    ?>
  </td>
  <td style="font-size: 20px;"> 
   <?php 
        echo $row['price'];
    ?>
  </td>
<td style="font-size: 20px;">


<img src="upload/<?php echo $row['image']; ?>"  style="width:60%" height="60%">

</td>
<td style="font-size: 20px;" >
 <?php echo $row['qty'];?>
</td>
<td style="font-size: 20px;" >
 <?php echo $row['size1'];?>
 
</td>
<td style="font-size: 20px;"> 
<?php
   echo $row['price']*$row['qty'];
   ?>
  </td>
  <td style="font-size: 20px;"> 
  
 
  <form action="rejectc.php" method="POST">
  <input type="text"  name="size" id="size" readonly style="display:none"  value="<?php echo $row['size1'];?>" required="">
    <input type="hidden" name="id" value="<?php echo $row['prodid']; ?>"/>
    <input type="submit" value="Remove">
  </form>
  </td>
  
  
<!----
  <form action="updatecart.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['prodid']; ?>"/>
    <input type="submit" value="Update">
  </form>
  </td>
  
 -----> 
</tr>
 <?php
  $x=$row['qty'];
  $y=$row['price'];
  $total=$x*$y;
  $sub_total=$sub_total+$total;
 
  ?>


<?php
}
?>	
</table>
</center>
<br><b>YOUR GRAND TOTAL  :<?php echo $sub_total ?><br /><br />
<?php $prodid=$row['prodid'];
?>

<button type="button" id="submit" name="submit" ><a href="cpdupe.php?id=<?php echo $sub_total;?>"><b>CHECKOUT</a></button>
 <br><br><a href="prvs.php"><b>Previous Orders</a>
 <br><br><a href="bill1.php"><b>Bill</a>

 <?php
 }
 else
 {
	 echo "
						<div class='alert alert-success' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Oops!</strong> Your Cart Is Empty!
				</div>
 		";
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
