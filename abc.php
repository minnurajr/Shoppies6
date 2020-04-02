<!DOCTYPE html>
<html>
<head>
<style>


* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}


/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
body {
  margin: 0;
  font-family: Times New Roman, Helvetica, sans-serif;
}
body
{
text-align:center;

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
	  .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
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
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
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

.show {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
 



 
  </div>
  
 
  </div> 
</div>
			<script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>		

<?php

include("connection.php");
session_start();
 $Lid=$_SESSION['lid'];
 //$prodid=$_GET['prodid'];
  $prodid=$_GET['id'];
$obj=new db();
$select="select a.prodid,a.sid1,a.name,a.price,a.material,a.image,a.description,b.cid1,b.sname,b.sid1 from productsn a join subcategory1 b on a.sid1=b.sid1 and b.sid1='$prodid' ORDER BY price";
$data=$obj->execute($select);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data)>0)
{

while($row=mysqli_fetch_array($data))
{	


$itemname=$row['name'];
$material=$row['material'] ;
$price=$row['price'] ;
$des=$row['description'] ;
?>



 

<body>

<div class="container">

 <form name="myForm" method="post" 


   onsubmit="return validateForm()" enctype="multipart/form-data" accept-charset="UTF-8" >
   
    <div class="row" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px padding:16px;" align="center">

<div class="column">
<?php $prodid=$row['prodid'];
?>
   <a href="npro11.php?id=<?php echo $prodid;?>"> <img src="upload/<?php echo $row['image']; ?>" class="img-responsive" style="width:50%" height="50%"/></a>
	
	<br><h4 class="text-info"><?php echo $itemname;?></h4> 
	

<?php echo $material;?><br>
 <h4 class="text-danger">₹ <?php echo $price;?></h4> <td>

 
 
 
 
 
<!---
  <button type="button" id="submit" name="submit" ><a href="viewdetail.php?id=<?php echo $prodid;?>">Quick View</a></button></td>

<button type="button"><a href="ntot1.php?id=<?php echo $prodid;?>"> Buy Now</a></button></td>


--->
  </div>
 

<?php
 }
 
}

?>
 </form>
 </body>

</html>
