<?php 

$db=mysqli_connect("localhost","root","","sellingprice") or die("not connected to database");

 $upload=0;
if (isset($_POST['Submit1']))
 {
  $db=mysqli_connect("localhost","root","","sellingprice") or die("not connected to database");



            $con_reg_no=mysqli_real_escape_string($db,$_POST['company_reg_no']);
            $pname=mysqli_real_escape_string($db,$_POST['pname']);
            $pcompany=mysqli_real_escape_string($db,$_POST['pcompany']);
            $ptype=mysqli_real_escape_string($db,$_POST['pclassi']);
            $features=mysqli_real_escape_string($db,$_POST['Discription']);
            $img_name=mysqli_real_escape_string($db,$_FILES['pimage']['name']);


     $check_reg_no=0;


 
$regsql="SELECT * FROM company where registration_no like '$co_reg_no' ";
$result = mysqli_query($db,$regsql);
if(mysqli_num_rows($result)>0)
{
  $check_reg_no=1;
}
else 
{
  $check_reg_no=0;
}

 
if($co_reg_no=='' || $pname == '' || $pname == '' || $pcompany == '' || $ptype=='' || $pclassi == '' || $features == '' || $features == '' || $img_name == '' )
 {

    echo "All Field Are Required"."<br>"."<br>";
     ?> 
    <a href="add_product.php" class="d-inline">Add Again</a> <br><br>
    <a href="index.php" class="d-inline">Go Home Page</a>
     <?php 
} 
elseif ($check_reg_no==0) {

echo "your Registration number does not exist"."<br>";
?> <a href="index.php" class="d-inline">Go Home Page</a> <?php  
}
  else { 
 
$pro_id=date("mjYHis");
    
	  $img_name=preg_replace("/\s+/","_", "$img_name");
	  $img_tmpname=$_FILES['pimage']['tmp_name'];
	  $img_type=$_FILES['pimage']['type'];
	  $img_size=$_FILES['pimage']['size'];
	  $img_ext = pathinfo($img_name,PATHINFO_EXTENSION);
	  $img_name=pathinfo($img_name,PATHINFO_FILENAME);
	  $img_name=$img_name."_".date("mjYHis").".".$img_ext;




$target="uploaded_image/".basename($img_name);


if ($img_size>6000000) 

{
  ?>  <h5> file should be less then 6 mb</h5>
	<?php 


}
else
 {
	$sql="INSERT INTO product_detail(product_id, co_reg_no, full_name, product_company, Product_type, classification, features, image_name) VALUES('$pro_id','$co_reg_no','$pname','$pcompany','$ptype','$pclassi','$features','$img_name')";

	
	   $result=mysqli_query($db,$sql);
   	if ($result) {
	  	$upload=1;
	 }
}

if ($upload) {
	
	if (move_uploaded_file($_FILES['pimage']['tmp_name'], $target)) {
		echo "<h2> your product is successfully added</h2>"."<br>";
		?> 
		<a href="add_product.php" class="d-inline"> Add one more Product</a> <br><br>
		<a href="index.php" class="d-inline">Go Home Page</a> <?php 


	}
}
}

$upload=0;
}

// company data part insert 
 $company_data=0;
if(isset($_POST['c_name']))
{

         

          $db=mysqli_connect("localhost","root","","sellingprice") or die("not connected to database");
          $c_name=mysqli_real_escape_string($db,$_POST['c_name']);
          $c_o_name=mysqli_real_escape_string($db,$_POST['c_o_name']);
          $no_emly=mysqli_real_escape_string($db,$_POST['no_emly']);
          $t_o_c=mysqli_real_escape_string($db,$_POST['t_o_c']);
          $about_line=mysqli_real_escape_string($db,$_POST['about_line']);
          $c_address=mysqli_real_escape_string($db,$_POST['c_address']);
          $c_pin=mysqli_real_escape_string($db,$_POST['c_pin']);
          $c_state=mysqli_real_escape_string($db,$_POST['c_state']);
          $rest = mysqli_real_escape_string($db,substr($c_name, 0, 2));
          $reg_no=mysqli_real_escape_string($db,$rest.date("mjYHius"));
                 
         if (strlen($about_line)<201) {
         	
         
  
               $sql="INSERT INTO company(id,registration_no,company_name,owner_name,no_of_emply,type_of_com,about,address,pincode,state) VALUES(NULL,'$reg_no','$c_name','$c_o_name','$no_emly','$t_o_c','$about_line','$c_address','$c_pin','$c_state')";

             $result=mysqli_query($db,$sql);
             

         if ($result)
          {
   
            $company_data=1;
        }
        else
          { 
          	echo ("description of error :".mysqli_error($result)); 
          	echo "something went wrong" .$company_data;
          }


        if ($company_data==1)
         {
          
          echo "Your Registration Number is : ".$reg_no."<br>";
          ?>
          <a href="company_reg.php">Add one more Company</a> 
          <a href="index.php">Goto home page</a>
          <?php 


        } 
    $company_data=0;  
}else
 {echo "your about strings are too large"; }
       
}
 
// user regitration data

$user_data=0;
if (isset($_POST['reg_data'])) {
	
$db=mysqli_connect("localhost","root","","sellingprice") or die("not connected to database");
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $number=mysqli_real_escape_string($db,$_POST['number']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $cpassword=mysqli_real_escape_string($db,$_POST['cpassword']);
   $co=0;
   if ($name=='' || $number=='' || $email=='' || $password=='' || $cpassword=='')
    {       
     echo "<script> alert('Every Field Are Required') </script>";
      ?>
         <a href="index.php">Goto home page</a>
          <?php 
   }
   else if (strcmp($password, $cpassword)) {
   	echo "<script> alert('password not match') </script>";
      ?>
         <a href="index.php">Goto home page</a>
          <?php 
   }else 
   {

   	$sql="INSERT INTO register(name, mobile, email, password) VALUES ('$name','$number','$email','$password')";
   	$result = mysqli_query($db,$sql);
   	if ($result) {
   		echo "Registration successfully"; echo "<br>";echo "<br>";
   		?>
         <a href="index.php">Goto home page</a>
          <?php 
   	}
   }
   

}






// login data check 

if(isset($_POST['login_data'])) {
	
$db=mysqli_connect("localhost","root","","sellingprice") or die("not connected to database");
    $email=mysqli_real_escape_string($db,$_POST['lemail']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
   if ($email=='' || $password=='')
    {  
         echo "<script> alert('user_name or password are Required') </script>"; 
    }
    else 
        $sql="SELECT * FROM register where email='$email' and password='$password'";
          
        $res=mysqli_query($db,$sql);
       if(mysqli_num_rows($res)>0)
        {
           while ($rows= $res->fetch_assoc()) 
           { 
               $rows['name'];
               $rows['mobile'];

               session_start();
               $_SESSION["username"] =$email;
               $_SESSION["pass"]  = $password;
               $_SESSION['name']  = $rows['name'];
               $_SESSION['mobile']=$rows['mobile'];
              
           } header('location:index.php');
 
       }
       else 
       {
        echo "user does not exist"."<br>";
        ?>  <a href="index.php">Go To Home</a> <?php
       }
    mysqli_close($db);
    header('location:index.php');
}
 ?>