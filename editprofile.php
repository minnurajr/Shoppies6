<?php
include 'conn.php';

$q="select * from districts";
$sq=mysqli_query($con,$q);
?>
<html>
<!DOCTYPE html>
<html lang="zxx">

	
			
<body>


<table width="1236" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="291" height="363"></td>
    <td width="366" valign="top"><div align="center">
      <p>Edit your profile </p>
      <form name="form1" method="post" action="editprofile.php">
	    <?php
	  session_start();
	  include("connection.php");
$Lid=$_SESSION['lid'];
if($Lid>0)
{
	
	$obj=new db();
	$select="select * from staff where loginid='$Lid'";
	$data=$obj->execute($select);
	$row=mysqli_fetch_array($data);
	?>
	   
	  
       <center><table width="238" border="1" align="center">
          
          <tr>
            <td>Name</td>
            <td><input name="name" id= "name"type="text" value="<?php echo $row['name'];?>" id="name" required></td>
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
            <td><input name="no" type="text" id="no" value="<?php echo $row['no'];?>" required></td>
									<br><span id="phone_error_message" style="color:red"></span>
          </tr>
          <tr>
            <td>Pincode</td>
            <td><input name="pincode" type="text" id="pincode" value="<?php echo $row['pincode'];?>" pattern="[0-9]{6}" maxlength="6" required title="Enter only numbers" required></td>
          </tr>
          <tr>
            <td>Addresss</td>
            <td><input name="hname" type="text" id="hname" value="<?php echo $row['shname'];?>" required></td>
			<br><span id="address_error_message" style="color:red"></span>
          </tr>
         
		  
		
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
	 

$sqll="UPDATE `staff` SET `name`='$s1',`shname`='$s6',`pincode`='$s5',`gender`='$s3',`no`='$s4',`dob`='$s2' WHERE loginid='$Lid'";
$objj=new db();
$objj->execute($sqll);
echo "<script>  alert('Update successfull');
			 
							window.location='editprofile.php'</script>";
				
}
	
	?>
	

</body>
</html>
