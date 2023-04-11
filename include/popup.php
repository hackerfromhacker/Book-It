<?php
if (isset($_POST['register'])) 
{
	include("connect/db.php");
	$user_id  = $_POST['user_id'];
	$fname  = $_POST['fname'];
	$lname  = $_POST['lname'];
	$phone  = $_POST['phone'];
	$email  = $_POST['email'];
	$password  = $_POST['password'];
	$user_type  = $_POST['user_type'];

	$qryadmn = $db->prepare("SELECT * FROM users WHERE semail = '$email'");
	$qryadmn->execute();

	if ($qryadmn->rowcount() > 0) 
	{
		$err = 'Email already registered with us.';
	} 
	else 
	{
		$db->prepare("INSERT INTO users (user_id, fname, lname, phone, semail, password, user_type) VALUES ('$user_id', '$fname', '$lname', '$phone', '$email', '$password', '$user_type')")->execute();
		header("location:index.php?reglogin");
	}
}

if (isset($_POST['submit'], $_POST['email'], $_POST['password'])) 
{	session_start();
	include("connect/db.php");
	$email = $_POST['email'];
	$password = $_POST['password'];

	$qrycustomer= $db->prepare("SELECT * FROM users WHERE semail='$email' AND password='$password' AND user_type='Customer'");
	$qrycustomer->execute();
	$countcustomer = $qrycustomer->rowcount();
	
	$qryadmin= $db->prepare("SELECT * FROM users WHERE semail='$email' AND password='$password' AND user_type='Admin'");
	$qryadmin->execute();
	$countadmin = $qryadmin->rowcount();
	
	if($countcustomer > 0) {
		//Login Successful
		session_regenerate_id();
		$rowcustomer= $qrycustomer->fetch();
		$_SESSION['SESS_CUSTOMER_ID'] = $rowcustomer['user_id'];
		session_write_close();
		header("location: user/index.php");
		exit();
	}
	else if($countadmin > 0) {
		//Login Successful
		session_regenerate_id();
		$rowadmin= $qryadmin->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rowadmin['user_id'];
		session_write_close();
		header("location: admin/index.php");
		exit();
	}
	else 
	{
		$err = 'Username or password is wrong! Try Again.';
	}
}

?>
<!-- modals -->
<!-- log in -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center">Log In</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				if (isset($msg)) {
					echo '<p class="alert alert-success">' . $msg . '</p>';
				}
				if (isset($err)) {
					echo '<p class="alert alert-danger">' . $err . '</p>';
				}
				?>
				<form action="index.php?reglogin" method="post" autocomplete="off">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email" name="email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>
					<div class="right-w3l">
						<input type="submit" name="submit" class="form-control" value="Log in">
					</div>
					<div class="sub-w3l">
						<div class="custom-control custom-checkbox mr-sm-2">
							<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
							<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
						</div>
					</div>
					<p class="text-center dont-do mt-3">Don't have an account?
						<a href="#" data-toggle="modal" data-target="#register">
							Register Now</a>
					</p>
					<p class="text-center dont-do mt-3">(Or)</p>
					<div class="social text-center mt-2">
						<ul class="list-unstyled">
							<li class="d-inline">
								<a class="icon fb" href="#facebook">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="d-inline mx-1">
								<a class="icon tw" href="#twitter">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="d-inline">
								<a class="icon gp" href="#google-plus">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Register</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				if (isset($msg)) {
					echo '<p class="alert alert-success">' . $msg . '</p>';
				}
				if (isset($err)) {
					echo '<p class="alert alert-danger">' . $err . '</p>';
				}
				?>
				<form action="index.php?reg" method="post" autocomplete="off">
					<input type="hidden" name="user_id" value="<?php echo "RNTX" . rand(9874475896, 1); ?>">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Firstname" name="fname" required pattern="[a-zA-Z1 _]{3,50}">
                        <input type="hidden"  name="user_type" value="<?php echo "Customer";?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Lastname" name="lname" required pattern="[a-zA-Z1 _]{1,50}">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Phone Number" name="phone" required pattern="[0-9]{10,10}" maxlength="10" minlength="10" >
					</div>					
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email" name="email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" id="password1" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Confirm Password" name="Confirm Password" id="password2" required>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Register" name="register">
					</div>
					<div class="sub-w3l">
						<div class="custom-control custom-checkbox mr-sm-2">
							<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
							<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms
								& Conditions</label>
						</div>
					</div>
					<p class="text-center dont-do mt-3">(Or)</p>
					<div class="social text-center mt-2">
						<ul class="list-unstyled">
							<li class="d-inline">
								<a class="icon fb" href="#facebook">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="d-inline mx-1">
								<a class="icon tw" href="#twitter">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="d-inline">
								<a class="icon gp" href="#google-plus">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	<?php if (isset($_GET['reg'])) { ?>
		$(document).ready(function() {
			$("#registerbtn").click();
		});
	<?php } ?>
	<?php if (isset($_GET['reglogin']) || isset($_GET['logout']) || isset($_GET['expired'])) { ?>
		$(document).ready(function() {
			$("#loginbtn").click();
		});
	<?php } ?>
</script>