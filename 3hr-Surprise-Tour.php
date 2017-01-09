
<?php

	include('Includes/Header.php');

$type = $_POST['type'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$DD = $_POST['DD'];
$MM = $_POST['MM'];
$YY = $_POST['YY'];


$date = $DD . ' ' . $MM . ', ' . $YY;
$time = $_POST['time'];
$costAdult = $_POST['costAdult']; 
$costChild = $_POST['costChild'];

$costTotalAd = $costAdult * $adults;
$costTotalCh = $costChild * $children;

$cost = $costTotalAd + $costTotalCh;

if($type == ""){
$mess = "Something went wrong. We do not have what kind of transfer you need. Sorry go back and fill in the form again<br />";
$ok = "notok";
}

if($adults == ""){
$mess = "Something went wrong. We need at least one adult. Please go back and check that<br />";
$ok = "notok";
}

if($DD == ""){
$mess = "Hey, we need a date. Please give us one<br />";
$ok = "notok";
}

if($MM == ""){
$mess = "Hey, we need a date. Please give us one<br />";
$ok = "notok";
}

if($YY == ""){
$mess = "Hey, wee need a date. Please give us one<br />";
$ok = "notok";
}

if($time == ""){
$mess = "Please set a time for the tour<br />";
$ok = "notok";
}

if ($ok == "notok"){
echo "
		<div class='container'>

			<table class='table text-center center-block' style='max-width: 300px'>
			<th style='color: #882121'>Please, correct the following:</th>
			<tr><td class='danger'>$mess</td><tr>
			<tr><td><input type='button' value='Go Back to recorrect' class='btn btn-default' onClick='history.go(-1)'></td><tr>
			</table>
		</div>";
exit();
} else{



$ok = "ok";
$mess = "";

echo '<div class="container">
    	<h2>Your Tour Details:</h2>
    	<p><b>Tour: </b> '. $type . '</p>
		<p><b>Adults: </b>' . $adults . '</p>
		<p><b>Children: </b>' . $children . '</p>
		<p><b>Date: </b>' . $date . '</p>
		<p><b>Time: </b>' . $time . '</p>
		<p><b>Total Cost: </b>' . $cost . ' €</p>		
		<button type="button" class="btn btn-primary" onClick="history.go(-1)" id="back">Go back and recalculate</button>
		  <button type="submit" class="btn btn-default" onClick="removeMute()" id="confirm">Confirm</button>  
		  
		 <form method="post" action="validate.php" class="form-inline" id="formPersonal" style="display:none">
		 
		 <input type="text" value=" '. $type . ' " style="display: none" name="type">
		 <input type="text" value=" '. $adults . ' " style="display: none" name="adults">
		 <input type="text" value=" '. $children . ' " style="display: none" name="children">
		 <input type="text" value=" '. $date . ' " style="display: none" name="date">
		 <input type="text" value=" '. $time . ' " style="display: none" name="time">
		 <input type="text" value=" '. $cost . ' " style="display: none" name="cost">
		 
		 
         <div class="col-lg-10">
         	<h3 id="PersonalTitle">Personal Details</h3>
           
			
		  <div class="form-group">
                <label for="name"  id="nameTitle">Full Name</label>
                <input type="text" style="" class="form-control" id="name" name="name" placeholder="Your Name">                
          </div>
		  
		  <p>&nbsp;</p>
		  
		  <div class="form-group">
                <label for="mobile"  id="mobileTitle">Mobile</label>
                <input type="number" style="" class="form-control" id="mobile" name="mobile" placeholder="Mobile No.">                
          </div>
		  
		  <p>&nbsp;</p>
		  
		  <div class="form-group">
                <label for="email"  id="emailTitle">Email address</label>
                <input type="text" style="" class="form-control" id="email" name="email" placeholder="example@yourmail.com">                
          </div>
		  
		  <p>&nbsp;</p>
		  
		  	  <div class="form-group">
                <label for="comments"  id="commentsTitle">Comments</label>
                <input type="text" style="" class="form-control" id="comments" name="comments" placeholder="(Optional)">                
          </div>
		  
		  <p>&nbsp;</p>
		  
		  <div class="col-lg-6">
		   <button type="submit" name="submit3h" class="btn btn-primary btn-lg center-block" style="padding: 7px 52px;">Go!</button> 
		   
		   <p>
		   
		   <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppppcmcvdam.png" alt="Pay with PayPal, PayPal Credit or any major credit card" />
			</p>  
			
			</div>
			
	 </div>
	
	 
	</form> 
	 ';
}
?>

<script type="text/jscript">

function removeMute(){
	document.getElementById('formPersonal').style.display = "block"
	document.getElementById('back').style.display = "none"
	document.getElementById('confirm').style.display = "none"
	
	
undefined;
	};

</script>
