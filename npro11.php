


<?php

include("connection.php");
session_start();
$bcid=$_SESSION['lid'];
$item_id=$_GET['id'];
$_SESSION['item_id']=$item_id;
$x=$_SESSION['item_id'];
//$price=$_SESSION['price'];
//echo "<script>alert($item_id);</script>";
//$amount=$_SESSION['amount'];
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	
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
<style>
.zoom {
  padding: 50px;
 
  transition: transform .2s; /* Animation */
  width: 500px;
  height: 900px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.9); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
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
				<img src="img/logon.png" width="40%" height="40%" alt="logo">
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
			
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->



<?php
$objj=new db();
$select1="SELECT prodid,stock1,size FROM `stock` WHERE prodid='$item_id'";
$data1=$objj->execute($select1);
?>
 
<?php
	//echo $item_id;
  $obj=new db();
$select="SELECT * FROM `productsn` WHERE prodid='$item_id'";
$data=$obj->execute($select);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data)>0)
{

while($row=mysqli_fetch_array($data))
{	
$name=$row['name'];
$material=$row['material'];
$description=$row['description'];
$price=$row['price'];
$bid=$row['bid'];
$no=$row['no_item'];

?>









	<!-- Page -->
	<form name="myForm" action="nimgpayaction.php" autocomplete="off" enctype="multipart/form-data" accept-charset="UTF-8"

   onsubmit="return validateForm()" method="post">
	<div class="page-area product-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<figure>
					<div class="zoom">
						<img src="upload/<?php echo $row['image']; ?>" style="width:70%" height="70%" />
						</div>
					</figure>
					
				</div>
				<div class="col-lg-6">
					<div class="product-content">
						<h2><?php echo $name;?></h2>
						<input type="text"  name="name1" id="name1" readonly style="display:none"  value="<?php echo $name;?>" required="">
						 <input type="text"  name="price" id="price" readonly   value="<?php echo $price;?>">
						<p> <?php echo $description;?></p>
						
						<h4>Material   :   <?php echo $material;?></h4><br>
						<h4>Brand   :   <?php echo $bid;?></h4>
						
					<!---	<div class="color-choose">
							<span>Colors:</span>
							<div class="cs-item">
								<input type="radio" name="cs" id="black-color" checked>
								<label class="cs-black" for="black-color"></label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color">
								<label class="cs-blue" for="blue-color"></label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color">
								<label class="cs-yollow" for="yollow-color"></label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color">
								<label class="cs-orange" for="orange-color"></label>
							</div>
						</div>---->
						
<i>Size Available are  :						<?php
$i=0;
while($db_row = mysqli_fetch_array($data1)) {
	
	
	
?>
<br> 

<br><br>
						<input type="radio" name="sc" id="sc" value="<?php echo $db_row["size"]; ?>" required> <?php echo $db_row["size"]; ?>
						 <input type="text"  name="stock" id="stock" readonly style="display:none"  value="<?php echo $db_row["stock1"];?>" required="">
								<?php
$i++;
}
?>	
<?php
//$i=0;
while($db_row = mysqli_fetch_array($data1)) {
	
	
	
}
?>




			
						<?php
 $prodid=$row['prodid'];
?>
<br><br><input type="text" name="qty" id="qty" placeholder="Quantity"  pattern="[2-9]{1}{9}" >
<a href="cartmm.php?id=<?php echo $prodid;?>&&id1=<?php echo $name;?>&&id2=<?php echo $price;?>&&id3=<?php echo $image;?>"><button name="submit">ADD TO CART</button></a> 

<br><br><center><b>OR</center>
	<center><br> <button type="button"><a href="ntot1.php?id=<?php echo $prodid;?>"><b> Buy Now</a></button></td> </center>	  
      </div>
						
						
					</div>
				</div>
			</div>
			
			
			
			
			
			<?php
//echo $item_id;
  if(isset($_POST['submit']))
  {
	$qty=$_POST["qty"]; 
	$s=$_POST["sc"];
$ndate=date("Y")."-".date("m")."-".date("d");
$sqlll="insert into orders(loginid,prodid,qty,price,status,trid) values ('$bcid','$item_id','$qty','$price','ok','0')";
 $objj=new db();
 $objj->execute($sqlll);
$sql="INSERT INTO `cart`(`cid`, `prodid`, `loginid`, `title`, `qty`, `price`, `status`,`date`, `size1` ) VALUES (null,'$item_id','$bcid','$name','$qty','$price','1','$ndate','$s')";
$obj=new db();
$obj->execute($sql);

		echo "<script> alert('success');
 window.location='cartmm.php'</script>";


 }			
			
	?>		
 <?php
 }
 

}
?>

</fieldset>
<?php
	include'process.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
</head>
<body>
<div class="row container">
<div class="col-md-4 ">
	<h3><b>Ratings & Reviews</b></h3>
	<div class="row">
	
		<div class="col-md-6">
			<h3 align="center"><b><?php echo round($AVGRATE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3> 
			<p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p>
		</div>
		<div class="col-md-6">
			<?php
			while($db_rating= mysqli_fetch_array($rating)){
			?>
			 <h4 align="center"><?=$db_rating['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?=$db_rating['Total'];?></h4> 
				
				
			<?php	
			}
				
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">	
		<?php
			while($db_review= mysqli_fetch_array($review)){
		?>
				<h4></i> by <span style="font-size:14px;"><?=$db_review['email'];?></span></h4>
				<p><?=$db_review['remark'];?></p>
				<hr>
		<?php	
			}
				
		?>
		</div>
	</div>
		
	
	<div id="rating_div">
				<div class="star-rating">
					<span class="fa divya fa-star-o" data-rating="1" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="2" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="3" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="4" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="5" style="font-size:20px;"></span>
					<input type="hidden" name="whatever3" class="rating-value" value="1" onclick="font-size:20px">
				</div>
	</div>
	
</div>
</div><br>
<input type="hidden" name="demo_id" id="demo_id" value="1">
<div class="col-md-4">
<input type="text" class="form-control" name="email" id="email" placeholder="Email Id"><br>
<textarea class="form-control" rows="5" placeholder="Write your review here..." name="remark" id="remark"></textarea><br>
<p><button  class="btn btn-default btn-sm btn-info" id="srr_rating" name="submitt">Submit</button></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/index.js"></script>

<?php


if(isset($_POST['submitt']))
{
$na=$_POST["email"];
$do=$_POST["remark"];
$ndate=date("Y")."-".date("m")."-".date("d");

$pswd=bin2hex(random_bytes(4));
$sql="insert into rating_data(rating,remark,status,email,date_time,prodid,loginid) values(0,'$do',1,'$na','$ndate','$item_id','$bcid')";
 $obj=new db();
$obj->execute($sql);
}
?>
			
			
			
			
			
				
				</div>
			</div>
		</div>
	</div> 
	<!-- Page end -->


	

	


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



