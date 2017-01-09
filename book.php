	<?php include('Includes/Header.php')?>

	<style type="text/css">
    
    .yellow-btn{color: black;
    background-color: #edd927;
    background-repeat: no-repeat;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFCF31B', endColorstr='#FFDFC134');
    background: -webkit-gradient(linear, left top, left bottom, from(#fcf31b), to(#dfc134));
    background: -moz-linear-gradient(top, #fcf31b 0%, #dfc134 100%);
    background: -ms-linear-gradient(top, #fcf31b 0%, #dfc134 100%);
    background: -o-linear-gradient(top, #fcf31b 0%, #dfc134 100%);
    background: linear-gradient(top, #fcf31b 0%, #dfc134 100%);
    border: 1px solid #999400;
    text-shadow: 1px 1px #e1d803;
	font-size: 23px;
	display: inline-block;
	text-align:center;
	font-family: SofiaProBold,"Helvetica Neue","Helvetica",Arial,sans-serif;}
	
	.yellow-btn:hover{color: #333;
	background: -webkit-gradient(linear, left top, left bottom, from(#FBD62A), to(#fcf31b));
    background: -moz-linear-gradient(top, #FBD62A 0%, #fcf31b 100%);
    background: -ms-linear-gradient(top, #FBD62A 0%, #fcf31b 100%);
    background: -o-linear-gradient(top, #FBD62A 0%, #fcf31b 100%);
    background: linear-gradient(top, #FBD62A 0%, #fcf31b 100%);}
	
    </style>



			<!--------	if(isset($_POST['3hrSTour'])){
				require("3hr-Surprise-Tour.php");
				} else{
					echo'';
					
					}           ----------->

<div class="container">
  <h2>Book Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn yellow-btn" data-toggle="modal" data-target="#myModal"><span class="glyphicon-calendar glyphicon glyphicon-align-left" aria-hidden="true"></span> Book Now</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    
    	
    
      <!---------------------------------------    Modal content   ----------------------------->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">3Hr Surprise Tour</h4>
        </div>
        <div class="modal-body">
         
         
         <form method="post" action="3hr-Surprise-Tour.php">
         <div class="col-lg-6">
         
         	<input name="type" style="display:none" value="3hr Surprise Tour">
         
              <div class="form-group">
                <label for="ticketAd">Ticket for Adults</label><br/>
                <select style="max-width:70px;display: inline;" class="form-control" id="ticketAd" name="adults">
                	<option selected value="">--</option>
                    <option value=1>01</option>
                    <option value=2>02</option>
                    <option value=3>03</option>
                    <option value=4>04</option>
                    <option value=5>05</option>
                    <option value=6>06</option>
                    <option value=7>07</option>
                    <option value=8>08</option>
                    <option value=9>09</option>
                    <option value=10>10</option>
                  </select>
                <span class="text-muted">€74.50 each</span>
                <input name="costAdult" value="74.5" style="display:none">
              </div>
              
               <div class="form-group">
                <label for="ticketCh">Ticket for Children</label><br/>
                 <select style="max-width:70px;display: inline;" class="form-control" id="ticketCh" name="children">
                	<option selected value="">--</option>
                    <option value=1>01</option>
                    <option value=2>02</option>
                    <option value=3>03</option>
                    <option value=4>04</option>
                    <option value=5>05</option>
                    <option value=6>06</option>
                    <option value=7>07</option>
                    <option value=8>08</option>
                    <option value=9>09</option>
                    <option value=10>10</option>
                  </select>
                <span class="text-muted">€39.00 each</span>
                <input name="costChild" value="39" style="display:none">
              </div>
              
               <div class="form-group">
                <label for="date">Select Date</label><br/>
                <select style="max-width: 72px;display: inline;" class="form-control" id="date" name="DD">    
                   <option value="" selected="selected" disabled>DD</option>
                       <?php
                    
                    $i = 1;
                    while ($i <= 31){
                    $lzeroD = str_pad($i, 2, "0", STR_PAD_LEFT);
                    echo "<option value = '$lzeroD'>$lzeroD</option>";
                    $i++;
                    }
                    ?>   
               </select>  
               
                <select name="MM" class="form-control" style="max-width:74px; display: inline;">
                    <option value="" selected="selected" disabled>MM</option>
                    <option value="JAN">Jan</option>
                    <option value="FEB">Feb</option>
                    <option value="MAR">Mar</option>
                    <option value="APR">Apr</option>
                    <option value="MAY">May</option>
                    <option value="JUN">Jun</option>
                    <option value="JUL">Jul</option>
                    <option value="AUG">Aug</option>
                    <option value="SEP">Sep</option>
                    <option value="OCT">Oct</option>
                    <option value="NOV">Nov</option>
                    <option value="DEC">Dec</option>
                </select>
                
                <select name="YY" class="form-control" style="max-width:88px; display: inline;">
                    <option value="" selected="selected" disabled>YYYY</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    
                </select>
                     
              </div>
              
               <div class="form-group">
                <label for="time">Select Time</label><br/>
                <input type="time" style="max-width: 150px;" class="form-control" id="time" name="time">                
              </div>
              
          <p>&nbsp;</p>
          
         </div> 
          
          <div class="col-lg-6">
          	<h3>About This Activity</h3>
          	<p>Your holidays. Your taste. Your stay. So we give you Your Tour! We visit at least one top sight seeing spot (Louvre / Montmartre / Notre Dame / i.e.), a view over the Seine + one drink and bite in a local bar.</p>
            
          <p>&nbsp;</p>
          
          </div>        
         
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
         
           
         
         
         
         
        </div>
        <div class="modal-footer">
        <p class="pull-left text-muted">Powered by us. So no money to others</p>
         <button type="submit" class="btn yellow-btn" name="3hrSTour">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size: 23px;">Close</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

	
    <?php include('Includes/Footer.php')?>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    
</body>
</html>
