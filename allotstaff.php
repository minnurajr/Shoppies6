<?php

$con = mysqli_connect("localhost", "root", "","keshu");
$q="select * from staff";
$sq1=mysqli_query($con,$q);

$qq="select * from orderst,productst where orderst.prodid=productst.prodid && orderst.st='2'";
$sq1l=mysqli_query($con,$qq);
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tailor Shoppie</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand">Tailor Shoppie</a>
			</div>


		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Add Staff For Work</div>
					<div class="panel-body">
				<form method="post" action="allotstaff.php" autocomplete="off" >
					<div class="row">
						<div class="col-md-6">
							<label for="cid">Staff Name</label>
							<select name="staffid" id="staffid" class="form-control" required/>
							<option value="">Staff</option>
							<?php 
							 while($r=mysqli_fetch_array($sq1))  
							 {
							?>
                    <option value="<?php echo $r['staffid'];
					?>"><?php echo $r['name']?> 
					<?php
							 }
                      ?>				
							</select>
						<label for="cid">Model Name</label>
							<select name="prodid" id="prodid" class="form-control" required/>
							<option value="">Model</option>
							<?php 
							 while($r=mysqli_fetch_array($sq1l))  
							 {
							?>
                    <option value="<?php echo $r['prodid'];
					?>"><?php echo $r['name']?> 
					<?php
							 }
                      ?>				
							</select>	
						
						

					<br><br>
					<div class="col-md-12">
						<input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">
					</div>

					</div>
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

<?php
include("connection.php");
	//echo $item_id;
  $obj=new db();
$select="select * from orderst,productst where orderst.prodid=productst.prodid && orderst.st='2'";
$data=$obj->execute($select);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data)>0)
{

while($row=mysqli_fetch_array($data))
{	
$loginid=$row['loginid'];
$_SESSION['loginid']=$loginid;
?>
 <?php
}
}
?>
<?php



if(isset($_POST['submit']))
{
$_SESSION['loginid']=$loginid;
$nc=$_POST["staffid"];

$no=$_POST["prodid"];
$sqlll="INSERT INTO `workt`(`staffid`, `prodid`, `loginid`) VALUES ('$nc','$no','$loginid')";
 $objjj=new db();
 $objjj->execute($sqlll);
 $sqll="UPDATE `orderst` SET st='3' WHERE prodid='$no' && loginid='$loginid'";
 $obj11=new db();
 $obj11->execute($sqll);
 echo "<script> alert('success');
 window.location='allotstaff.php'</script>";
 
}
?>
			
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
<style> .foot{text-align: center;}
</style>
</html>