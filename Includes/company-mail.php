<?php
//warning email
	
	$subject = $name . ' just made a reservation for' . $date;
	$txt = '<h2>New booking!</h2>
	
	<h3>Tour Details</h3>
    	<p><b>Tour: </b> '. $type . '</p>
		<p><b>Adults: </b>' . $adults . '</p>
		<p><b>Children: </b>' . $children . '</p>
		<p><b>Date: </b>' . $date . '</p>
		<p><b>Time: </b>' . $time . '</p>
		<p><b>Total Cost: </b>' . $cost . ' €</p>	
	<h3>Personal Details</h3>
		<p><b>Name: </b> '. $name . '</p>
		<p><b>Mobile: </b> '. $mobile . '</p>
		<p><b>Email: </b> '. $email . '</p>
		<p><b>Comments: </b> '. $comments . '</p>

	<p>&nbsp;</p>
	<br/>
	<hr>';
	
	
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From:$name<$email>" . "\r\n";
	
	mail("martinpedraza1979@gmail.com",$subject,$txt, $headers);

?>