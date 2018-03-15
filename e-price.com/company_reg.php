
<!DOCTYPE html>
<html>
<head>
	<title>Company Registration Form</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-social/assets/fonts/font-awesome.css">
<link rel="stylesheet" type="text/css" href="bootstrap-social/bootstrap-social.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--  form validation in javasipt   


<script type="text/javascript">
  function validate() {


    var c_name=document.forms["vform"]["c_name"];
    var c_o_name=document.forms["vform"]["c_o_name"];
    var no_emly=document.forms["vform"]["no_emly"];
    var t_o_c=document.forms["vform"]["t_o_c"];
    var about_line=document.forms["vform"]["about_line"];
    var c_address=document.forms["vform"]["c_address"];
    var c_pin=document.forms["vform"]["c_pin"];
    var c_state=document.forms["vform"]["c_state"];
    

    if (c_name.value=='') {
      alert('Company name is required');
      return false;
    }
    else if(c_o_name.value=='')
    {
      alert('company owner name is required');
      return false;
    }
    else if(no_emly.value==''){
      alert('number is required');
      return false;
    }
    else if(t_o_c.value=='')
    {
      alert('type of company is required');
      return false;
    }
    else if(about_line.value=='')
    {
      alert('Enter some detail about your comapny');
      return false;
    }
    else if(c_address.value=='')
    {
      alert('address field if comulsary');
      return false;
    }
    else if(c_pin.value=='')
    {
      alert('pincode is required');
      return false;
    }

    else if(c_state.value=='')
    {
      alert('state name is required');
      return false;
    }

}
</script>
 
 -->
 
</head>


<body>
<div class="container-fluid"> 
<div id="onsucces"></div>
 <form method="post" action="getdata.php" enctype="multipart/form-data" id="insert_form" name="vform"> 
 
<div class=" row  card-header text-center"><a href="index.php" class="nav-link" class="col-sm-2" data-toggle="tooltip" data-placement="bottom" title="Goto Home Page"> <i class="fa fa-home"  style="font-size: 20px;"  ></i></a> <h5 class="col-sm-10 text-center"> Company Registration form </h5></div> 

   <div class=" form-group row">
   	<label class="col-sm-2 col-form_lablel" for="c_name"> Company Name </label> 
   	<input type="text" name="c_name" id="c_name" class="col-sm-10 form-control" placeholder="Choose your company Name" />

   </div>

   <div class=" form-group row">
   	<label class=" col-sm-2 col-form_lablel" for="c_o_name"> Company Owner Name </label> 
   	<input type="text" name="c_o_name" id="c_o_name" class="col-sm-10 form-control" placeholder="Enter Name Owmer of company" />
   	</div>
 
   	<div class="form-group row">
   	<label class=" col-sm-2 col-form_lablel" for="no_emly">No Of Employee</label> 
   	<input type="text" name="no_emly" id="no_emly" class="col-sm-10 form-control" placeholder="Enter Number of employee in your company" />

   </div>

   <div class="form-group row">
   	<label class=" col-sm-2 col-form_lablel" for="t_o_c">Type of company</label> 
   	<input type="text" name="t_o_c" id="t_o_c" class="col-sm-10 form-control" placeholder="Enter what type of your comapny" />
   </div>
   
   
   <div class="form-group row">
   	<label class="col-sm-2 col-form_lablel" for="about_line">About </label>
   	<textarea class="col-sm-10 form-control" rows="4" placeholder="Enter information about your company in 200 Text" name="about_line" id="about_line"></textarea>

      </div>

    <div class="">
    	<div class="row card-header text-center" style="padding: 0px;"> <h5 class="col-sm-12"> Address Part </h5></div>
    </div>
 

  
   <div class="form-group row">
   	<label class=" col-sm-2 col-form_lablel" for="c_address"> Company Full Address</label> 
   	<input type="text" name="c_address" id="c_address" class="col-sm-10 form-control" placeholder="Eneter Company Addres" />

   </div>
   <div class="form-group row">
   	<label class=" col-sm-2 col-form_lablel" for="c_pin">Pincode</label> 
   	<input type="text" name="c_pin" id="c_pin" class="col-sm-10 form-control" placeholder="Enter Pincode"/>
   </div>

   <div class="form-group row">
   	<label class=" col-sm-2 col-form_lablel" for="c_state"> State</label> 
   	<input type="text" name="c_state" id="c_state" class="col-sm-10 form-control" placeholder="Enter your State " />
   </div>
 <div class="form-group row " style="align-items: center;">
    <input class="btn btn-success btn-lg btn-block col-sm-12" type="submit" name="c_data" id="c_data" value="Registered as company" /> 
</div>
</form>
<div id="ajdata">
  
</div>
</div>










<script type="text/javascript" src="file/jquery.js" ></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>

