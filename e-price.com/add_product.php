
<!DOCTYPE html>
<html>
<head>
	<title>add product form</title>
   
   <script type="text/javascript">
   function registfunction(){ 
   var x = document.getElementById("product_form");
    var text = "";
 
     
   text += x.elements[1].value;
    
    
    if(text=='')
    {  
       document.getElementById("error_reg").style.display="block";
       document.getElementById("error_reg").innerHTML = "this field can not be empty";
      return false;

       }
    else 
    {  
    document.getElementById("error_reg").style.display="none";
   
    return true;
    
    }

   }
     
   </script>
 



</head>
<body bgcolor="gray">

<div class="container-fluid">
	<div class=" ">
	<div class="row card-header text-center"><a href="index.php" class="col-sm-1"> <i class="fa fa-home" style="font-size: 25px;" title="Go To Home Page"></i></a> <h5 class="col-sm-11"> Add Product Detailed </h5></div>
		<div class=" jumbotron card-body">
			<form action="getdata.php"  method="post" enctype="multipart/form-data" id="product_form" name="product_form" onsubmit="return registfunction()">
			
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" >Prodect Full Name</label>
    <div class="col-sm-10">
      <input type="text"   class="form-control" id="staticEmail" name="pname" placeholder="Ex: Samsung Galaxy On7 Prime (Black, 4GB RAM, 64GB Memory)">
    </div>
  </div>

   <div class="form-group row">
     <label class="col-sm-2 col-form-label" for="co_reg"> Company Registration Number</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="company_reg_no" onchange="registfunction()"  placeholder="Enter Company Registration Number" id="co_reg">
       <div id="error_reg"></div>
     </div>
    </div>

  <div class="form-group row">
    <label for="productcompany" class="col-sm-2 col-form-label">Product Company</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="productcompany" name="pcompany">
    </div>
   </div>

    <div class="form-group row">
                  <label for="producttype" class="col-sm-2 col-form-label">Product Type</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="producttype" name="ptype">
                   <option>Mobile</option>
                   <option>Laptop</option>
                   <option>Tablet</option>
                   <option>Desktop</option>
                    </select>    
                  </div>
  </div>
  


  <div class="form-group row">
  	    <label for="classi" class="col-sm-2 col-form-label">Classification</label>
        <div class="col-sm-10">
          <textarea maxlength="200" class="form-control" id="classi" placeholder="Example: for mobile-->i.e-2GB RAM 8GB ROM ....." name="pclassi"></textarea>
        </div>
 </div>


 
<div class="form-group row">
        <label for="classi" class="col-sm-2 col-form-label">Features</label>
        <div class="col-sm-10">
          <textarea maxlength="200" class="form-control" id="features" placeholder="Write 2 to 5 line about your product" name="Discription"></textarea>
        </div>
 </div> 
     
<div class="form-group row">

  <div class="col-sm-2">
   <label id="pimageid" class="col-form-label">Product Image</label>
  </div>

  <div class=" col-sm-10 ">
     
<div class="input-group">
  <div class="custom-file" >
    <input type="file" class="custom-file-input show" id="pimageid" name="pimage">
    <label class="custom-file-label" for="pimageid" id="pimageid"><p id="imgid">Choose file </p> </label>
  </div>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Upload</button>
  </div>
</div>
</div>
</div>

<div class="input-group row col-sm-12" style="align-items: center;">
    <button class="btn btn-success btn-lg btn-block" type="submit" name="Submit1">Submit</button>
</div>
 
</form>	 
	</div>
</div>
</div>













<link rel="stylesheet" type="text/css" href="bootstrap-social/assets/fonts/font-awesome.css">
<link rel="stylesheet" type="text/css" href="bootstrap-social/bootstrap-social.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</body>
</html>

