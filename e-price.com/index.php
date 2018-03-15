<?php 
session_start();
if (isset($_SESSION['username']) ) {
  $user=$_SESSION['username'];
  $pass=$_SESSION['pass'];
   
}


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



</script>


<style type="text/css">
body{
	position: relative;
}
	#slidebarusingbs4{
		margin-top: 55px;
	}
	#mobile,#laptop,#Desktop,#Tablet{
		margin-top: 10px;
	}

.imgcontent{
  width: 100px;
  height: 70px;
}
</style>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">  

<nav class="navbar fixed-top navbar-expand-xl bg-danger navbar-dark" id="originalcontainer">
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapse">
   
    <ul class="navbar-nav ml-left col-md-5 ">
    <li class="nav-item">
        <a class="nav-link" href="#home"><i class="fa fa-home" style="font-size: 25px; padding: 0px;"></i> </a>
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
    </ul>
  </div> 



  <a class="col-md-2 offset-md-1 navbar-brand " href="#">e-price.com</a> 

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse2">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" collapse navbar-collapse" id="collapse2">
 <ul class="navbar-nav ml-auto offset-md-3">
    <li class="nav-item" >
<span  data-toggle="tooltip" data-placement="bottom" title="Registration your company"> 
      <a href="company_reg.php" class="nav-link">company</a>
</span>
      </li>
      <li class="nav-item">
      <a href="add_product.php" class="nav-link" title="Publish your new product">Publish product</a>
      </li>

  <!-- sign up icon -->    
 
<div id="signupicon" >
      <li class="nav-item" style="display: inline-block;">
      <a href="#" class="nav-link" title="Register as new user" data-toggle="modal" data-target="#register"><i class="fa fa-user" style="font-size: 30px; padding: 0px;"> </i> </a>
      </li>
      <li class="nav-item" style="display: inline-block;">
      <a href="#" class="nav-link" title="login your account" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> <i class="fa fa-sign-in" style="font-size: 30px; padding: 0px;"></i></a>
     </li>
</div>
   
<!-- active is session is active -->
  <div id="activesession" style="display: none;">
    <li class="nav-item ">
    <div class="dropdown">
      <a href="#" class="nav-link" class=" dropright dropdown-toggle" data-toggle="dropdown"> <span > <i class="fa fa-cog"></i> </span> </a>
      <div class="dropdown-menu dropdown-menu-right"> 
      <h5 class="dropdown-header">welcome</h5>
      <a href="#" class="dropdown-item">jeetendra sahu</a>
      <a href="#" class="dropdown-item"> <?php echo $user; ?> </a>
      <a href="#" class="dropdown-item">9644993531</a>
      </div>
  </div>

    </li>
  </div>

  
  </ul>
</div>
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
          <div class="form-group">
            <label for="email" class="col-form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
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

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
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
<div  data-target="#originalcontainer" >

<div id="home" class="container-fluid">
   <div id="slidebarusingbs4" class="row carousel slide" data-ride="carousel" width="100%" height="500px">
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

 <a class="carousel-control-prev" href="#slidebarusingbs4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slidebarusingbs4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- moblie images bars-->

<div class="container-fluid jumbotron">
<div id="mobile">
 <div class="">
  <div id="navbar-example">
    <ul class="card-deck nav nav-tabs" role="tablist">
 
    <div class="col-md-3 card-deck"> 
      <div class="card" style="width: 15rem;">
        <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/6m.jpg"  alt="Card image cap">
        <div class="card-body card-block">

         <h4 class="card-title">Card title</h4>
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </div> 
      <div class=" col-md-3 card-deck"> 
      <div class="card" style="width: 15rem;">
        <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/2m.jpg" alt="Card image cap">
        <div class="card-body card-block">
         <h4 class="card-title">Card title</h4>
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> 
      </div> 
      <div class="col-md-3 card-deck"> 
      <div class="card" style="width: 15rem;">
        <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/3m.jpg" alt="Card image cap">
        <div class="card-body card-block">
         <h4 class="card-title">Card title</h4>
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> 
      </div> 
      <div class="col-md-3 card-deck"> 
      <div class="card" style="width: 15rem;">
        <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/4m.jpg" alt="Card image cap">
        <div class="card-body card-block">
         <h4 class="card-title">Card title</h4>
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> 
      </div>
      
    </ul>
  </div>
</div>
</div>




<!-- laptop images bar-->
<div id="laptop" class="" >
<div class="row">
<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/1l.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/2l.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/3l.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/4l.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/5l.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/6l.png" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

</div>
</div>




<!-- Desktop View list  -->
<div id="Desktop" class="">
<div class="row">
<div class="col-md-4 card-deck">
<div class="card text-center" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/d1.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/d2.png" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/d3.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>   
<div><div>  

<div class="row">
<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/d4.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/d5.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/d6.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

</div>
</div>



<!-- Tablet bar images -->

<div id="Tablet" class="">
<div class="row">
<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/t1.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/t2.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/t3.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/t4.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/t5.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-md-4 card-deck">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" class="imgcontent" width="200" height="150"  src="images/t6.jpg" alt="Card image cap">
  <div class="card-body card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
 


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
                  <textarea placeholder="Type Message Here"  class="form-control" rows="5" id="comment">                    
                  </textarea>
                </div>
                  
               </form>
        			</div>
        		

            <div class="col-md-3 social-buttons" >
              <h4 class="text-center"><u>Connect With Us</u></h4>
               <a class="btn btn-block btn-social btn-facebook">
              <span class="fa fa-facebook"></span> Sign in with Facebook
            </a>
            <a class="btn btn-block btn-social btn-twitter">
            <span class="fa fa-twitter"></span> Sign in with Twitter
          </a>
          <a class="btn btn-block btn-social btn-instagram">
            <span class="fa fa-instagram"></span> Sign in with Instagram
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