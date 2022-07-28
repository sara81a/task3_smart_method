
<?php 
//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="arm";


//$query="SELECT  Nservice FROM servicemanager";



if(!($db=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

//if(!($result=mysqli_query($db,$query)))
//die("<p>the qurey error</p>");


//$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
//mysqli_free_result($result);


//$id = mysqli_real_escape_string($db2, $_POST['id']);





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>store integer</title>

	<link href="add-set.css" rel="stylesheet"/> 
	
    
	 <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

   <!-- Google Font -->
   <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   <link
	 href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
	 rel="stylesheet"
   />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   
    
   

    
    
  

    <!-- font awesome cdn link  -->
    
</head>
<body>



  
    <section>
  





<div class="out">
<div class="container">
<h1 class="BookHead"> HI  </h1>
<h1 class="BookHead">  for stroing integer in mysql</h1>

<form class="input" method="GET"   name="testForm2" onsubmit="return(validationFunc2())"  >


	
		


<div class="DateTime">
	<label for="date&time" ><strong>Enter the integer :</strong> </label>
	<input type="number" id="dateTime" name="date" style="width:650px; height:50px;" >
    </div>
	
	
    

	<br><br>	<br><br>
    <label for="Note" ><strong>Add any Note :</strong> <br>
	<textarea name="note" rows="4" cols="36" id="Note"Enter your Note about your Appointment></textarea></label>

	<br><br>

	
		
    
	
	<div class="end" >
	<input id="submit" name="submit" value="Add" type="submit" class="toogle" >
	<!--<input id="reset" value="reset" type="reset" >-->

    </div>  	


	
</form>


</div>
</div>



</section>

<div class="footer">
          <div class="box-container">
            
            
            <div class="box">
              <h3 style="font-size :large;">Email Us</h3>  
               
              <div class="info">
                
                <i class="fas fa-envelope"></i>
                      <a href="mailto:StudentID@student.ksu.edu.sa" style="font-size :large;">Email</a>
              </div>
               
            </div>
            <div class="box">
              <h3 style="font-size :large;">Contact Information</h3>
              <div class="info">
                <i class="fas fa-phone"></i>
                <p style="font-size :large;">+123-456-789 <br>
                 +111-222-3333</p>
              </div>
                 
            </div>
            
          </div>
          <h1 class="credit" style="font-size :large;">&copy; copyright @ 2022 by Sara Alsaleh software Engineers</h1>
        </div>






<script src="sc4.js"> </script>

</body>
</html>
<?php

if(isset($_GET['submit'])){

$datee=$_GET['date'];

$notes=$_GET['note'];

$qry="INSERT  Into task values(null,'$datee' ,'$notes')";

if(mysqli_query($db,$qry)){
    echo  '<script>alert("added sucsses"); </script>';}
//header('location:SetAvalibleAppFinally.php ');}

else{
    echo mysqli_error($db);}



}





?>