<?php
 
$q=$_REQUEST["q"];
$conn=mysqli_connect("localhost","root","","sellingprice");
$sql="SELECT email FROM register WHERE email='$q' ";
$res=mysqli_query($conn,$sql);
$res1=mysqli_num_rows($res);
if ($res1) {
	$hint="Already Taken";
}
else
$hint="Available";
 echo $hint;
?>