<?php

	include('Includes/Header.php');

$type = $_POST['type'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$date = $_POST['date'];
$time = $_POST['time'];
$cost = $_POST['cost'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$ok = "ok";
$mess = "";
$t=time();
$created = date("M-d-Y",$t);

if($name == ""){
$mess = "Please, provide us your name<br />";
$ok = "notok";
}
if($email == ""){
$mess = "Please, provide us your email<br />";
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
}

if ($ok == "ok"){
	require("fonts/xollts.php");
	
	$query = "INSERT INTO bookings (type, adults, children, date, time, cost, comments, created, name, mobile, email) 

VALUES('{$type}', '{$adults}', '{$children}', '{$date}', '{$time}', '{$cost}', '{$comments}', '{$created}', '{$name}', '{$mobile}', '{$email}')";

$result = mysqli_query($connection,$query);

//Test if there was a query error.
	if(!$result){
	die("Database query failed.");}
	
	echo '
		<div class="container">
	
			<h2>Thanks for your reservation!</h2>
			
			<p>Dear ' . $name . ',</p>
			
			<p>your reservation has been succefully taken! </p>
			
			<p>We will contact you shortly to refine some details</p>
			
			<p>Here are our contact mobile numbers: </br>
			 <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +33 6 1111111111111</br>
			 <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +33 6 1111111111111</p>
			 
			<p>Best regards</p>
			
			
			
			
		</div>	
			';
		include ('Includes/company-mail.php'); 





}

?>