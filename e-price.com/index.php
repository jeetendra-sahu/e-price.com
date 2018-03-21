<?php 
 session_start();
 
if (isset($_SESSION['username']) )
 {
     $user=$_SESSION['username'];
     $pass=$_SESSION['pass'];
     $name=$_SESSION['name'];
     $mob=$_SESSION['mobile'];
   
}

/*
$con=mysqli_connect("localhost","root","","sellingprice") or die("not connected to database");
$sql="SELECT * FROM product_detail where Product_type='Mobile' ";
$result=mysqli_query($con,$sql);

while (mysqli_num_rows($result)) {
  
 }

*/



?>



<!DOCTYPE html>
<html>
<head>
	<title>create one page responsive</title>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap-social/assets/fonts/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-social/bootstrap-social.css">


<script type="text/javascript">


function emailcheck(str) {
    if (str.length == 0) 
    { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}

  
function welcomemsg(){
    document.getElementById('signupicon').style.display="none";
    document.getElementById('activesession').style.display="none";
  var $a= '<?php echo $user; ?>';
  var $b= '<?php echo $pass; ?>';
   if ($a=='' && $b=='') {
    document.getElementById('signupicon').style.display="block";
    document.getElementById('activesession').style.display="none";
   }
   else
   {
    document.getElementById('signupicon').style.display="none";
    document.getElementById('activesession').style.display="block";
   }
}
window.addEventListener('load',welcomemsg);

// email id check function during Registration 


</script>


<style type="text/css">
  
	#slideupdown{
		margin-top: 75px;
	}
 

</style>


</head>
<body>  
 
<nav class="navbar row  navbar-expand-md fixed-top bg-danger navbar-dark" id="originalcontainer">
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsebar">
    <span class="navbar-toggler-icon"></span>
  </button>
        

 <div class="collapse navbar-collapse" id="collapsebar" style="align-content: right;">
    <ul class="navbar-nav mr-auto my-2 my-sm-0 " >
 

    <li class="nav-item">
        <a class="nav-link" href="#home"><i class="fa fa-home" style="font-size: 25px; padding: 0px;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#mobile">Mobile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#laptop">Laptop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Desktop">Desktop</a>
      </li> 
      <li class="nav-item">
      	<a class="nav-link" href="#Tablet">Tablet</a>
      </li>   
      
 
 
    <li class="nav-item" >
            <span  data-toggle="tooltip" data-placement="bottom" title="Registration your company"> 
           <a href="company_reg.php" class="nav-link">company</a>
          </span>
      </li>

      <li class="nav-item">
      <a href="add_product.php" class="nav-link" title="Publish your new product">Publish-Product</a>
      </li>

  <!-- sign up icon -->    
    
       <div id="signupicon" >
        <li class="nav-item" style="display: inline-block;">
        <a href="#" class="nav-link" title="Register as new user" data-toggle="modal" data-target="#register"><i class="fa fa-user" style="font-size: 30px; padding: 0px;"> </i> </a>
         </li>
      <li class="nav-item" style="display: inline-block;">
      <a href="#" class="nav-link" title="login your account" data-toggle="modal" data-target="#loginform"><span class="glyphicon glyphicon-log-in"></span> <i class="fa fa-sign-in" style="font-size: 30px; padding: 0px;"></i></a>
     </li>
   </div>
  
 

<!-- active is session is active -->
  <div id="activesession" style="display: none;">
    <li class="nav-item ">
    <div class="dropdown">
      <a href="#" class="nav-link" class=" dropright dropdown-toggle" data-toggle="dropdown"> <span > <i class="fa fa-cog"></i> </span> </a>
      <div class="dropdown-menu dropdown-menu-right"> 
      <h5 class="dropdown-header">welcome</h5>
      <a href="#" class="dropdown-item"> <?php echo $name; ?> </a>
      <a href="#" class="dropdown-item"> <?php echo $user; ?> </a>
      <a href="#" class="dropdown-item"> <?php echo $mob ; ?> </a>
      <a href="logout.php" class="dropdown-item"> Logout </a>
      </div>   </div>
       </li>
     </div>
   

   
  </ul>

 </div>

         <li class="nav nav-item active">
            <a href="index.php" class="nav-link navbar-brand" > <img src="logo.png"></a>
         </li>
</nav>  

<!-- bootstrap madal for Registration -->


<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerLabel">Register as new user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="getdata.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="number" class="col-form-label">Mobile</label>
            <input type="text" name="number" id="number" class="form-control">
            
          </div> 
          <div id="txtHint"> </div>
          <div class="form-group">
           
            <label for="email" class="col-form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" onkeyup="emailcheck(this.value)">
          </div>

          <div class="form-group">
            <label for="password" class="col-form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="cpassword" class="col-form-label">Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" class="form-control">
          </div>

          <input type="submit" name="reg_data"  id="submit" value="Register" class="form-control btn btn-success" >


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="form-control btn btn-secondary" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>

<!--bootstrap modal for login -->

<div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Login your account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="getdata.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="lemail" class="col-form-label">E-mail</label>
            <input type="email" class="form-control" id="lemail" name="lemail" placeholder="Enter your email address">
          </div>
          <div class="form-group">
            <label for="lpassword" class="col-form-label">Password</label>
            <input type="password" name="password" id="lpassword" class="form-control" placeholder="Enter your password">
          </div>
          <input type="submit" name="login_data" id="lsubmit" value="Login" class="form-control btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>     
      </div>

    </div>
  </div>
</div>




 
<!-- after login icon  -->





<!--  carousel slide bar using bootstrap -->
<div  data-target="#originalcontainer">

<div id="home">
   <div id="slideupdown" class="row carousel slide" data-ride="carousel" width="100%" height="500px">
<div class="col-md-12">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block"    src="images/b1.jpg" alt="Slide Image1" width="100%" height="500px">
    </div>
    <div class="carousel-item active">
      <img class="d-block"    src="images/b2.jpg" alt="Slide Iamge2" width="100%" height="500px">
    </div>
    <div class="carousel-item ">
      <img class="d-block"    src="images/b3.jpg" alt="Slide Iamge3" width="100%" height="500px">
      </div>
      <div class="carousel-item">
         <img class="d-block" src="images/b4.jpg" alt="Slide image 4" width="100%" height="500px">
       </div>
    <div class="carousel-item">
      <img class="d-block"    src="images/b5.jpg" alt="Slide Image 5" width="100%" height="500px">
    </div>
    <div class="carousel-item ">
      <img class="d-block"    src="images/b6.jpg" alt="Slide Image 6" width="100%" height="500px">
    </div>
   </div>
  </div>
 </div>

 <a class="carousel-control-prev" href="#slideupdown" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slideupdown" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>






<!-- moblie images bars-->

<div class="container-fluid">

    <ul class="" id="mobile">
 
<?php 
 
$con=mysqli_connect("localhost","root","","sellingprice") or die("not connected to database");
$sql="SELECT * FROM product_detail where Product_type='Mobile' ";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
$r=1;
?>
<div class="row">
<?php 

while ($row=mysqli_fetch_assoc($result)) {
  if ($r<5) {
    
  

?> 
  
    <div class="card-deck col-md-3 "> 
      <div class="card" style="width: 10rem;">
        <img   src="uploaded_image/<?php echo $row['image_name']; ?>"  class="card-img-top img-thumbnail" class="imgcontent" width="200" height="150"   alt="Card image cap">
        <div class="card-body card-block">

         <h4 class="card-title"><?php echo $row['full_name']; ?></h4>
           <p class="card-text"><?php echo $row['classification']."  "; ?> </p>
        <a href="#" class="btn btn-primary">View Detail</a>
        </div>
      </div>
      </div>  

<?php  } $r++; }  ?> 
</div>
      
    </ul>
 




<!-- laptop images bar-->
<ul id="laptop">
<?php 
 
 
$sql="SELECT * FROM product_detail where Product_type='laptop' ";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
$r=1;
?>
<div class="row">
<?php 
while ($row=mysqli_fetch_assoc($result)) {
  if ($r<7) {
     
  

?> 
  
    <div class="col-md-4 card-deck"> 
      <div class="card" style="width: 15rem;">
        <img   src="uploaded_image/<?php echo $row['image_name']; ?>"  class="card-img-top img-thumbnail" class="imgcontent" width="200" height="150"   alt="Card image cap">
        <div class="card-body card-block">

         <h4 class="card-title"><?php echo $row['full_name']; ?></h4>
           <p class="card-text"> <?php echo $row['classification']." " ; ?> </p>
        <a href="#" class="btn btn-primary">View Detail</a>
        </div>
      </div>
      </div>  

<?php  }  $r++; } ?> 
</div>
</ul>



<!-- Desktop View list  -->

<ul id="Desktop">  
<?php 
 
 $sql="SELECT * FROM product_detail where Product_type='Desktop' ";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
$r=1;
?>
<div class="row">
<?php 
while ($row=mysqli_fetch_assoc($result)) {
  if ($r<7) {
     
  

?> 
  
    <div class="col-md-4 card-deck"> 
      <div class="card" style="width: 15rem;">
        <img   src="uploaded_image/<?php echo $row['image_name']; ?>"  class="card-img-top rounded" class="imgcontent" width="200" height="200"   alt="Card image cap">
        <div class="card-body card-block">

         <h4 class="card-title"><?php echo $row['full_name']; ?></h4>
           <p class="card-text"> <?php echo $row['classification']." " ; ?> </p>
        <a href="#" class="btn btn-primary">View Detail</a>
        </div>
      </div>
      </div>  

<?php  }  $r++; } ?> 
</div>

</ul>
<!-- Tablet bar images -->
<ul id="Tablet"> 
<?php 
 
$con=mysqli_connect("localhost","root","","sellingprice") or die("not connected to database");
$sql="SELECT * FROM product_detail where Product_type='tablet' ";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
$r=1;
?>
<div class="row">
<?php 
while ($row=mysqli_fetch_assoc($result)) {
  if ($r<7) {
     
  

?> 
  
    <div class="col-md-4 card-deck"> 
      <div class="card" style="width: 15rem;">
        <img   src="uploaded_image/<?php echo $row['image_name']; ?>"  class="card-img-top img-thumbnail" class="imgcontent" width="200" height="150"   alt="Card image cap">
        <div class="card-body card-block">

         <h4 class="card-title"><?php echo $row['full_name']; ?></h4>
           <p class="card-text"> <?php echo $row['classification']." " ; ?> </p>
        <a href="#" class="btn btn-primary">View Detail</a>
        </div>
      </div>
      </div>  

<?php  }  $r++; } ?> 
</div>

</div>
</div>
</ul>

<!-- yooutube videos add our website  -->
<footer class="footer bg-success">
      <div class="">
        <div class="row">
        	<div class="col-md-3">
        	<h4 class="text-center" style="padding-bottom: 0px;">Available Product</h4>
        	
        	<table class="table" >
              <thead>
                <tr>
                  <th>Mobile</th>
                  <th>Laptop</th>
                  <th>Tablet</th>
                </tr>
              </thead>
              <tr>
              	<td>Samsung</td>
              	<td>Dell</td>
              	<td>Sony</td>
              </tr>
              <tr>
              	<td>Micromax</td>
              	<td>HP</td>
              	<td>Samsung</td>
              </tr>
              <tr>
              	<td>Sony Xperia</td>
              	<td>Acer</td>
              	<td>Apple iPad</td>
              </tr>
              <tr>
              	<td>Nokia</td>
              	<td>Asus</td>
              	<td>Lenovo Yoga </td>
              </tr>       		
             </table>
        </div>
        	<div class="col-md-3">
        		<h4 class="text-bold"> <u>suggestion Form</u></h4>
        		<form>
        			<div class="form-group">
        				<label for="FName">Full Name:</label>
        				<input type="text" class="form-control" name="FName" id="FName" placeholder="Enter Full Name ">
                </div>
                <div class="form-group">
                  <label for="Email">E-mail</label>
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Enter Valid Email">
                </div>
                <div class="form-group">
                  <label for="comment">Comment :</label>
                  <textarea placeholder="Type Message Here"  class="form-control" rows="3" id="comment"></textarea>

                </div>

                  <input type="submit"  class="row col-md-3 btn btn-primary" style="margin-left: 50px;" name="queryform" id="queryform" value="submit">

               </form>
        			</div>
        		

            <div class="col-md-3 social-buttons" >
              <h4 class="text-center"><u>Connect With Us</u></h4>
               <a href="https://www.facebook.com/Er.jeetendra.modi" class="btn btn-block btn-social btn-facebook" >
              <span class="fa fa-facebook"></span> Follow on Facebook
            </a>
            <a href="https://twitter.com/jeetumodisahu" class="btn btn-block btn-social btn-twitter" >
            <span class="fa fa-twitter"></span> follow on Twitter
          </a>
          <a class="btn btn-block btn-social btn-instagram">
            <span class="fa fa-instagram"></span> Follow on Instagram
          </a>
           <a class="btn btn-block btn-social btn-linkedin">
            <span class="fa fa-linkedin"></span> Sign in with LinkedIn
          </a>             
            </div>



            <div class="col-md-3">
              <h4 style="border-bottom-color: blue;"><u>Contect Us </u></h4>
              <p>Name   :JEETENDRA SAHU</p>
              <p>Mobile : +91 9644993531</p>
              <p>E-mail : sahujeetendra06@gmail.com</p>
              <p>Youtube channel : Technical modi ji</p>

            </div>
        	</div>
        </div>
      </div>
    </footer>
<div class="">
<footer class="footer bg-light">
   <div class="row">
     <div class="col-md-12">
      <p>Copyright &copy developed and maintained by
       <a href="#" class="card-link">JEETENDRA SAHU</a>
       <a href="#" class="card-link">Dell</a>
       <a href="#" class="card-link">HP</a>
       <a href="#" class="card-link">Sony</a>
       <a href="#" class="card-link">Samsung</a>
       <a href="#" class="card-link">Nokia</a>
       <a href="#" class="card-link">Asus</a>
       <a href="#" class="card-link">Acer</a>
       <a href="#" class="card-link">Micromax</a>
       <a href="#" class="card-link">Apple</a>
       <a href="#" class="card-link">Lenovo</a>
       <a href="#" class="card-link justify-content-right">About Jeetendra sahu</a>
</p> 
     </div>
   </div>

</footer>

</div>








 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>