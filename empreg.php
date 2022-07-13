<?php include_once( 'user_header.php'); 

 include_once( 'includes/connection.php' );










 $db = new Database();
$message = '';


if( isset( $_POST['submit'])) {

	$name = $_POST['name'];
	$email= $_POST['email'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$mob=$_POST['mob'];
	$deg=$_POST['deg'];
	$gender=$_POST['gender'];
	$description=$_POST['description'];
	$loc=$_POST['loc'];
	$work=$_POST['work'];
	
	
			$stmnt = "INSERT INTO `employee`(`name`, `email`, `dob`, `password`, `mobile`, `designation`, `gender`, `description`, `location`, `worktime`) VALUES (:name , :email , :dob, :password, :mob, :deg, :gender, :description, :loc, :work)";
			$params = array(
			':name' => $name,
			':email' =>  $email,
			'dob' => $dob,
			':password' => md5($password),
			':mob' => $mob,
			':deg' => $deg,
			':gender' => $gender,
			':description' => $description,
			':loc' => $loc,
			':work' => $work
			

			);

			if ($db->execute_query($stmnt, $params) ) {
				?><script type="text/javascript">
					window.alert("The request has been submitted, Please wait..");	
	        window.location.href="home.php";
				</script>
			<?php
				}
			else
			{
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
	    <h2>Employee Registration</h2>
	    
	</div>

	        <form class="form-horizontal bordered-row" data-parsley-validate action="" method="post">
	        	<div class="row">
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Name</label>
		                    <div class="col-sm-4">
		                        <input type="Text" name="name" placeholder="Name" class="form-control"  min="6">
		                    </div>
		                </div>
	        		</div>
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">E-Mail id</label>
		                    <div class="col-sm-4">
		                        <input type="email" name="email" placeholder = "E Mail id" class="form-control">
		                    </div>
		                </div>
	        		</div>
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Date of Birth</label>
		                    <div class="col-sm-4">
                               <input type="text" name="dob" placeholder = "Date of Birth" class="form-control">
		                    </div>
		                </div>
	        		</div>
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Password</label>
		                    <div class="col-sm-4">
                               <input type="password" name="password" placeholder = "Password" class="form-control">
		                    </div> 
		                </div>
	        		</div>

	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Mobile Number</label>
		                    <div class="col-sm-4">
                               <input type="password" name="mob" placeholder = "Mobile" class="form-control">
		                    </div> 
		                </div>
	        		</div>
              
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Designation</label>
		                    <div class="col-sm-4">
                               <input type="text" name="deg" placeholder = "Designation" class="form-control">
		                    </div>
		                </div>
	        		</div>

	        		<div class="col-md-12">
			        	<div class="form-group">
	        		 <label class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-4">
                                 <select  name="gender" required class="form-control">
                                 <option selected="selected" disabled="disabled">select</option>
                                    <option value="m">Male</option>   
                                    <option value="f">Female</option>  
                                </select>
                            </div>
                             </div>
	        		</div>
                            <div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Description</label>
		                    <div class="col-sm-4">
                               <input type="text" name="description" placeholder = "Description" class="form-control">
		                    </div>
		                </div>
	        		</div>
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Location</label>
		                    <div class="col-sm-4">
                               <input type="text" name="loc" placeholder = "Location" class="form-control">
		                    </div>
		                </div>
	        		</div>
	        		<div class="col-md-12">
			        	<div class="form-group">
		                    <label class="col-sm-3 control-label">Work time</label>
		                    <div class="col-sm-4">
                               <input type="text" name="work" placeholder = "Work Time" class="form-control">
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
