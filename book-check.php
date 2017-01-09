<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<meta charset="utf-8">
<title>Search it!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.form-control{
	padding:6px !important;}
#laform{ max-width: 630px; }

</style>
</head>  
  
  
    <?php 
	
	if(isset($_POST['submit1'])){
	
		include "fonts/adp.php";
		
		$usrnm = $_POST['usrnm'];
		$pss = $_POST['pss'];
		
		if($usrnm == $aduser AND $pss == $adpass){
			require("fonts/xollts.php");
			
				$query = "SELECT * ";
				$query .= "FROM bookings ";
				$query .= "ORDER BY id DESC ";
				$query .= "LIMIT 300 ";
				$result = mysqli_query($connection, $query);
				//Test if there was a querry error
				if(!$result){
					die("the query went wrong!");
					}
			echo '
		
		
			
	<!DOCTYPE html>
	<html>
	<head>
	<title>ADMINISTRATION</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<meta charset="utf-8">		
	</head>
	<body>
		<h1 class="text-center text-muted">Last 300 reservations</h1>
                
               
      <table class="table table-striped center-block" style="width:80%;display:table">
    	<tbody>
        	<tr>
            	<th>ID</th><th>TYPE</th><th>NAME</th><th>DATE</th><th>TIME</th><th>ADULTS</th><th>CHILDREN</th><th>COST</th><th>Created</th>
            </tr>';
			
					while($row = mysqli_fetch_assoc($result)){
					
					echo'<tr>
					<td> ' . $row["id"] . '</td><td> ' . $row["type"] . '</td><td>' . $row["name"] . '</td><td>' .$row["date"] . '</td><td>' .$row["time"] . '</td><td>' .$row["adults"] . '</td><td>' .$row["children"] . '</td><td>' .$row["cost"] . '</td><td>' .$row["created"] . '
					
					<tr>'; }; 
					echo'
				
            
	</table>			
	</body>';}
	
	else{
		echo '
		<div class="container">
			<h1>Password or username not ok</h1>
			<h2>are you kidding me?</h2>
		</div>';}
	}

?>