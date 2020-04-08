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
	
<body>


<table  border="0" cellpadding="0" cellspacing="[" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="291" height="363"></td>
    <td width="366" valign="top"><div align="center">
     
      
	   <?php
					$con = mysqli_connect("localhost", "root", "","keshu");
					$count=0;
$se=" select * from `repair`,`productsn`,`registration_user` where repair.prodid = productsn.prodid && registration_user.loginid = repair.loginid";
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
							<th style=" padding-left: 20px;">User Name</th>
							<th style=" padding-left: 20px;">Housename</th>
							<th style=" padding-left: 20px;">street</th>
							<th style=" padding-left: 20px;">Locality</th>
							<th style=" padding-left: 20px;">Remove</th>
							<th style=" padding-left: 20px;">Accept</th>
								
			</tr>
		<?php
					
			$sub_total=0;			
	while($row=mysqli_fetch_array($re))
  
 {
		?>
    <tr>
<td style="font-size: 20px;"> 
   <?php 
       echo $row['name'];
    ?>
  </td>
  <td style="font-size: 20px;"> 
   <?php 
        echo $row['price'];
    ?>
  </td>
<td style="font-size: 20px;">


<img src="../upload/<?php echo $row['image']; ?>"  style="width:100%" height="20%">

</td>
<td style="font-size: 20px;" >
 <?php echo $row['uname'];?>
</td>
<td style="font-size: 20px;" >
 <?php echo $row['hname'];?>
 
</td>
<td style="font-size: 20px;"> 
<?php
   echo $row['street'];
   ?>
  </td>
  <td style="font-size: 20px;"> 
<?php
   echo $row['locality'];
   ?>
  </td>
  <td style="font-size: 20px;"> 
  
 
  <form action="rejectcc.php" method="POST">
  <input type="text"  name="size" id="size" readonly style="display:none"  value="<?php echo $row['loginid'];?>" required="">
    <input type="hidden" name="id" value="<?php echo $row['prodid']; ?>"/>
    <input type="submit" value="Remove">
  </form>
  </td>
  <td style="font-size: 20px;"> 
  
 
  <form action="rejectcc.php" method="POST">
  <input type="text"  name="size" id="size" readonly style="display:none"  value="<?php echo $row['loginid'];?>" required="">
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
}
?>	
</table>
</center>

<?php
if(isset($_POST
	$Lid=$_POST['size'];
	$b=$_POST['id'];
$sql=mysqli_query($con,"delete  from repair where prodid='$b' && loginid='$Lid'");
//$sql=mysqli_query($con,"delete  from orderst where prodid='$b' && loginid='$Lid'");

if ( $sql ){
 echo "<script>alert('Removed');
      window.location='viewrpr.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>




 <?php
 }
 else
 {
	 echo "
						<div class='alert alert-success' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Oops!</strong> No Data Found!
				</div>
 		";
 }
					
 ?>
 


</body>
</html>
