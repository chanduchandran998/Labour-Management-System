<?php include_once( 'user_header.php'); 

 include_once( 'includes/connection.php' );










 $db = new Database();
$message = '';


if( isset( $_POST['submit'])) {

	$name = $_POST['name'];
	$email= $_POST['email'];
	$add=$_POST['add'];
	$dob=$_POST['dob'];
	$password= md5($_POST['password']);
	$loc=$_POST['loc'];
	$mob=$_POST['mob'];
	
	
	
			echo $stmnt = "INSERT INTO `customer`(`name`, `email`, `address`, `dob`, `password`, `location`,`moblie`) VALUES(:name , :email ,:add, :dob, :password, :loc, :mob)";
			$params = array(
			':name' => $name,
			':email' =>  $email,
			':add' => $add,
			'dob' => $dob,
			':password' => $password,
			':loc' => $loc,
			':mob' => $mob
			

			);

			if ($db->execute_query($stmnt, $params) ) {
			?>
			<!-- <script type="text/javascript">
				window.alert("Now you are user..please login to your account");
				window.location.href="index.php";
			</script> -->
			<?php
				}
			else
			{
				echo $db->error;
					$message = 'Error';
			}
		
}

 ?>

	<div class="panel">
    	<div class="panel-body">
	        <h3 class="title-hero">   
	        </h3>
	        <div align="Center">
	        <div id="page-title">


	    <h2 id="text">Employee Registration</h2>
	</div>



	        <form class="form-horizontal bordered-row" data-parsley-validate action="" method="post">
	        	<div class="row">
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Name</label>
		                    <div class="col-sm-4">
		                        <input type="Text" name="name" placeholder="Name" class="form-control"  min="6"  required="required">
		                    </div>
		                </div>
	        		</div>
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">E-Mail</label>
		                    <div class="col-sm-4">
		                        <input type="email" name="email" placeholder = "E Mail" class="form-control" required="required">
		                    </div>
		                </div>
	        		</div>

	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Address</label>
		                    <div class="col-sm-4">
                               <input type="text" name="add" placeholder = "Address" class="form-control"  required="required">
		                    </div> 
		                </div>
	        		</div>
              
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Date of Birth</label>
		                    <div class="col-sm-4">
                               <input type="Date" max="2000-01-01" name="dob" placeholder = "Date of Birth" class="form-control"  required="required">
		                    </div>
		                </div>
	        		</div>
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Password</label>
		                    <div class="col-sm-4">
                               <input type="password" name="password" placeholder = "Password" class="form-control" id="password">
		                    </div> 
		                </div>
	        		</div>
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Confirm Password</label>
		                    <div class="col-sm-4">
                               <input type="password" name="password" placeholder = "Password" class="form-control"  required="required" id="confirm_password">
		                    </div> 
		                </div>
	        		</div>

	        		
	        		

	        	
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Location</label>
		                    <div class="col-sm-4">
                               <input type="text" name="loc" placeholder = "Location" class="form-control"  required="required">
		                    </div>
		                </div>
	        		</div>
	        	
	        	<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Mobile</label>
		                    <div class="col-sm-4">
                               <input type="text" pattern="[6789][0-9]{9}" maxlength="10" name="mob" placeholder = "Mobile Number" class="form-control"  required="required">
		                    </div>
		                </div>
	        		</div>
	        	  </div>	
                <div class="content-box text-center">
                    <input type="submit" name="submit" value="Submit"  class="btn btn-primary">
                </div>
              
				
				<div class="alert alert-success">
						
	                </div>
            		
	        </form>
	    </div>
    </div>
    </div>

<?php include_once( 'home_footer.php'); ?>



<style type="text/css">
	#text
	{
		margin-top: 130px;
	}

</style>