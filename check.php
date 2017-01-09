<!DOCTYPE html> 
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADMINISTRATION</title>
<style>
	#login-cont{
		margin-left:auto;
		margin-right:auto;
		margin-top:20px;
		margin-bottom:50px;
		width:285px;
		height:auto;
		box-shadow:1px 1px 2px #CCC;
		padding:20px;
		border-radius:3px;
		}

</style>
</head>
<body>
	

	<h1 class="text-center">Administration Area</h1>
    <h2 class="text-center text-muted">This is where we check everything that is being done on the site</h2>
    
    <div class="container">
    
            <div id="login-cont">
        
                <form action="book-check.php" method="post">
                <div class="form-group">
                	<label for="usrnm">User:</label>
                    <input type="text" name="usrnm" class="form-control" id="usrnm">
                </div>
                <div class="form-group">
                	<label for="pss">Pass:</label>
                    <input type="password" name="pss" class="form-control" id="pss">
                </div>
                
                <div class="form-group text-center">    
                    <input type="submit" name="submit1" class="btn btn-default" value="Login" class="center-block">
                </div>
                </form>
            
            </div>
            
   </div>
   
   
 
   
   <hr>
   
    <footer class="footer">
      	<div class="container text-center">
        <p class="text-muted">Check me out, man !</p>
      </div>
    </footer>

	

</body>
</html>