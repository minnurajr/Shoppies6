<?php
session_start();
include "connection.php";
//$bcid=$_SESSION['lid'];
//$item_id=$_GET['id'];

//$sub_total=$_GET['id1'];
  
$loginid=$_SESSION['lid'];

?>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<!DOCTYPE html>
<html lang="zxx">
<head>
<script src="validate.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/script.js"></script>
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
			<div class="header-right">
				
			</div>
			<!-- site menu -->
			
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Info -->
	
	
	<!-- Page Info end -->

	<!-- Page -->
	
	<script language="javascript">
function abc()
{
if(document.form1.comment1.value=="")
{
alert("enter the details");
return(false);
}

}

</script>

<?php
$objj=new db();
$select="select * from registration_user WHERE loginid=$loginid";
$data=$objj->execute($select);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data)>0)
{

while($row=mysqli_fetch_array($data))
{	
$hname=$row['hname'];
$street=$row['street'];
$locality=$row['locality'];
?>

<body>
<div class="row">
  <div class="col-75">
    <div class="container">
<form name="form1" onSubmit="return abc()" method='POST'>
<table width="200" border="1" align="center" cellspacing="10">
<tr>
<td colspan="2"><div align="center"><b>Shipping Address</div></td>
</tr> 
<tr> 
<td colspan="2"><textarea name="hname" cols="80"    placeholder="House Name"  rows="1" id="hname" required/></textarea></td>
</tr>
<tr>
<td colspan="2"><textarea name="street" cols="80"   placeholder="Street" rows="1" id="street" required/></textarea></td>
<span id="street_error_message" style="color:red"></span>	
</tr>
<tr>
<td colspan="2"><textarea name="locality" cols="80"   placeholder="Locality" rows="1" id="locality" required/></textarea></td>
<span id="locality_error_message" style="color:red"></span>	
</tr>
<tr>
<td colspan="2"><select name="district" required/>
<option>Tvm</option>
<option>Kollam</option>
<option>Pta</option>
<option>Alappuzha</option>
<option>Kottayam</option>
<option>Ekm</option>
<option>Idukki</option>
<option>Thrissur</option>
<option>Palakkad</option>
<option>Kozhikodu</option>
<option>Malappuram</option>
<option>Kannur</option>
<option>Wayanadu</option>
<option>Kazargodu</option>
</select></td>
<tr>
<td colspan="2"><div align="center"><b>Add Card Details</div></td>
</tr>
<tr>
<td colspan="2"><input type="text" name="cardno" cols="80"   placeholder=" Card no // 1111-2222-3333-4444" rows="1" id="cardno" pattern="[0-9]{16}" maxlength="16" required/></td>
</tr>
<tr>
<td colspan="2"><input type="number" name="expdate" cols="80"   placeholder="Expiry Date" rows="1" id="expdate" class="text_box" type="text" value="6" min="1" required/>
<input type="number" class="text_box" type="text" value="2019" min="1" />
</td>
</tr>
<tr>
<td colspan="2"><input type="text" name="cvv" cols="80"   placeholder="cvv  //  000" rows="1" id="cvv" pattern="[0-9]{3}" maxlength="3" required/></td>
</tr>
<tr>
<td colspan="2"><div align="center">
<input type="submit" name="submit" value="submit">
      
</div></td>
</tr> 
<center>
<label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
			</center>
</table>
</form>

<?php
}
}
?>












<?php
$con = mysqli_connect("localhost", "root", "","keshu");
$totals=$_GET['id'];
$loginid=$_SESSION['lid'];

//$sql_reg_customer=mysqli_query($con,"SELECT reg_id FROM `customerregister` WHERE customerregister.loginid='$loginid'");
//$row_reg=mysqli_fetch_array($sql_reg_customer);
//$reg_id=$row_reg['reg_id'];

//$sub_total=$_GET['id'];

$sql_cart=mysqli_query($con,"SELECT * FROM `cart` WHERE cart.loginid='$loginid' and status='1'");






while($row_cart_item=mysqli_fetch_array($sql_cart))
	
	{
		
	
		$item_id=$row_cart_item['prodid'];
		$order_quantity=$row_cart_item['qty'];
		$status=1;
		$ss=$row_cart_item['size1'];
		$purchase_date=date("Y")."-".date("m")."-".date("d");
		$price_sql=mysqli_query($con,"SELECT * FROM `productsn` WHERE prodid=$item_id");
		$row_price=mysqli_fetch_array($price_sql);
		$item_price=$row_price['price'];
		$purchase_price=$item_price*$order_quantity;
		
		//$ins_sql=mysqli_query($con,"INSERT INTO `orders`(`loginid`, `prodid`, `qty`, `price`, `status`, `purchase_date`) VALUES('$loginid','$item_id','$order_quantity','$purchase_price','$status','$purchase_date')");
		
		
		$sql_itemsss=mysqli_query($con,"SELECT * FROM `stock` WHERE `prodid`='$item_id' && size='$ss'");
		
		
			
				
			 if(isset($_POST['submit']))
			{ 
			

$i=rand();
$cm=$_POST["hname"];
$ab=$_POST["street"];
$cd=$_POST["locality"];
$ef=$_POST["district"];

$ndate=date("Y")."-".date("m")."-".date("d");

//$sql="insert into payment(`loginid`,`amt`,`hname`,`locality`,`street`,`district`,`paydate`,`trid`) values('$bcid','$item_id','$cm','$cd','$ab','$ef','$ndate','$i')";

			
			
			
		
			//$sql="insert into payment(`reg_id`,`namecard`,`cardno`,`cvv`) values('$bcid','$a','$b','$c')";

			$sq=mysqli_query($con,"INSERT INTO `payment`(`loginid`,`amt`,`hname`,`locality`,`street`,`district`,`paydate`,`trid`) values('$loginid','$totals','$cm','$cd','$ab','$ef','$ndate','$i')");


							if($sq)
							{
								

							$cart_delete_sql=mysqli_query($con,"UPDATE `cart` SET status='0' WHERE loginid='$loginid'");

			
					
													while($row_item=mysqli_fetch_array($sql_itemsss))
														
														{
															$stock_count=$row_item['stock1'];
															$new_stock=(int)$stock_count-(int)$order_quantity;															
															$sql_update_stock=mysqli_query($con,"UPDATE `stock` SET `stock1`='$new_stock' WHERE `prodid`='$item_id' && `size`='$ss'");

															
															
														}
														echo"<script>alert('Order Placed Successfully');
														window.location='payment2.php'</script>";
																			
								
							}




							
			}


		
		
	
	


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
