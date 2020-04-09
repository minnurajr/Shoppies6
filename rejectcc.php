

<?php
include "conn.php";

$b=$_POST['size'];
$q=$_POST['id'];
//echo $b;
//echo $q;
$z="SELECT username FROM login WHERE loginid = '$b'";
 
 $f=mysqli_query($con,$z);
 
 if(mysqli_num_rows($f)>0)
 { 

 while($row=mysqli_fetch_array($f)){
	 $g=$row['username'];
	 
$sqll=mysqli_query($con,"delete  from repair where prodid='$q' && loginid='$b'");
if (  $sqll ){
	
$result="";
$maild=$g;
require 'phpmailer/PHPMailerAutoload.php'; 
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPsecure='tls';
$mail->Username='minnu5897@gmail.com';//send cheyyunna mail id
$mail->Password='minnutty';//ayinte password

$mail->setFrom($maild);
$mail->addAddress($g);//receiverinte mail
$mail->addReplyTo($maild);//thirich reply theranam engil a mail

$mail->isHTML(true);//html code mail ayakkan true akki iduka
$mail->Subject='Test Mail';//mail subject
$mail->Body="<h1>Hello your request for modification of order is rejected.Only below Rs.500 is accepted for this free work.Thank You..</h1>";//body
if($mail->send())
{
$result="Mail went successfully";
echo $result;

}
else
{
    $result="Something went wrong";  
    echo $result;
}
}
}
 }
?>
	
	
	
	
	
	
	
	
<!--echo "<script>alert('Approved');
      window.location='approval.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}