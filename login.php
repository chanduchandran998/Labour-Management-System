<?php
include_once( 'includes/connection.php' );
include_once( 'user_header.php' ); 


	$db = new Database();

	$message = '';
	$id ='';
	if ( isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$stmnt="select * from customer where email = :username and password =:password";
	$params = array(
		':username' => $username,
		':password' => $password
		);
	$admin = $db->display($stmnt,$params);
	if( $admin ) {
		//print_r($admin);
		$id = $admin[0]['id'];
		session_start();
		
		$_SESSION['userid'] = $id;
		$_SESSION['mob'] = $admin[0]['mobile'];
		$_SESSION['username'] = $username;
		$_SESSION['type']	= 'user'; 	
		header('Location: search.php');
			}

			exit();
		
		
	} else{
		$message = 'Invalid username or password!';
	}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/styles.css">
    <script type="text/javascript" src="../assets/js-core.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form method="post" action="" data-parsley-validate="">
			        <div class="content-box">
			            <h3 class="content-box-header content-box-header-alt bg-default">
			                <span class="icon-separator">
			                    <i class="glyph-icon icon-cog"></i>
			                </span>
			                <span class="header-wrapper">
			                    Login
			                    <small>Login to LMS</small>
			                </span>
			            </h3>
			            <div class="content-box-wrapper">
			                <div class="form-group">
			                    <div class="input-group">
			                        <input type="email" class="form-control" name="username" placeholder="Username" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="input-group">
			                        <input type="password" class="form-control" name="password" placeholder="Password" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="input-group">
			                        <input type="submit" class="btn btn-success btn-block" name="login" value="Login">
			                    </div>
			                </div>
			            </div>
			        </div>
			    </form>
			</div>		
		</div>
			
	</div>
	

    <!-- JS Demo -->
	<script type="text/javascript" src="../assets/widgets/parsley/parsley.js"></script>
    <script type="text/javascript" src="../assets/admin-all-demo.js"></script>
</body>
</html>
<?php

 include_once( 'home_footer.php' ); ?>