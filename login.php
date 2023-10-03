<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<title>
		The Ratna-park Store-login/signup
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!---google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,400;0,600;1,200&display=swap" rel="stylesheet">
	<!---google fonts-->
</head>

<body>
	<a name="top"></a>
	<div class="container">
		<div class="navbar" id="navbar">
			<div class="logo">
				<a href="index.php"><img src="logo/logo2.png"></a>
			</div>
			<nav class="navback" id="navback">
				<ul id="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="prod-page.php">Products</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="#buttom">Contacts</a></li>
					<li><a href="login.php">
							<?php
							if (!empty($_SESSION['loggedIn'])) {
								echo $_SESSION['username'];
							} else {
								echo "Login";
							}
							?>
						</a></li>
					<li><a href="#"><img src="logo/cart.png" width="40px" height="40px"></a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- //header -->



	<?php
	session_start();
	function showForm($defaults = array(), $errors = array())
	{
		$username = !empty($defaults['username']) ? $defaults['username'] : '';
		$password = !empty($defaults['password']) ? $defaults['password'] : '';
		$html = "
		<div class='form-container'>
        <h1 class='userlogin'>User Login</h1>
        <div class='mainform'>
			<form action='" . $_SERVER['PHP_SELF'] . "' method='POST' class='login'>
			<input type='text' name='username' value='$username' class='input-feild' placeholder='username'> <br>";
		if (!empty($errors['username'])) {
			$html .= '<span class="errorLi">' . $errors["username"] . '</span>';
		}
		$html .= "
			<input type='password' class='input-feild' name='password' value='$password' placeholder='password'> <br>";
		if (!empty($errors['password'])) {
			$html .= '<span class="errorLi">' . $errors["password"] . '</span>';
		}
		$html .= "
		<input type='checkbox' name='chckbox' class='check-feild' id='chck'>Remember Me<br><br>	<br>		
			<input type='submit' value='login' class='login-btn'>
			<a href='signup.html'><button type='button' class='login-btn' id='btn2'>Signup</button></a>
			</form>";
		echo $html;
	}
	function processForm()
	{
		$con = mysqli_connect("localhost", "root", "", "webproj");
		if (!$con) {
			die("error" . mysqli_connect_error());
		}
		$sql = "SELECT * 
	FROM users 
	WHERE username= '{$_POST['username']}' AND password='{$_POST['password']}'";
		$result = mysqli_query($con, $sql);
		$rows = mysqli_num_rows($result);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['loggedIn'] = true;
			$_SESSION['username'] = $_POST['username'];
			// if ($rows['type'] == "admin") {
			// 	header('location:admin.php');
			// } else {
			header('location:index.php');
			// }
			// echo $rows['type'];
		} else {
			session_destroy();
			die("invalid login");
		}
	}
	function validateForm()
	{
		$errors 	=	array();
		$data 		= 	$_POST;
		$username  = 	$data['username'];

		$length 	=	strlen($data['password']);
		if (strlen(trim($username)) == 0) {
			$errors['username'] = "username is required";
		}

		if ($length < 6 || $length > 12) {
			$errors['password'] = "password should be between 6 to 12 characters";
		}

		return $errors;
	}
	if (!empty($_POST)) {
		$errors = validateForm();

		if (!empty($errors)) { //validation failed
			showForm($_POST, $errors);
		} else { //validation success

			showForm($_POST);
			processForm();
		}
	} else {
		showForm();
	}
	?>
	</form>
	</div>
	</div>
	<!-- //footer -->
	<a name="buttom"></a>
	<div class="footer">
		<div class="container">
			<div class="row-footer">

				<div class="footer-col-1">
					<img src="logo/logo2.png">
					<p>Known for Fashion</p>
				</div>
				<div class="footer-col-2">
					<h3>Contact us</h3>
					<div class="footer-data">
						<ul>
							<li>Phone:9876543210</li>
							<li><a href="mailto:rstnaparkstore@google.com">Mail Us</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-col-3">
					<h3>our services</h3>
					<div class="footer-data">
						<ul>
							<li>Men's complete fashion</li>
							<li>Online & ofline store</li>
							<li>Customer support</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-4">
					<h3>Available brands</h3>
					<div class="footer-data">
						<ul>
							<li>Addidas</li>
							<li>calvien klien</li>
							<li>guchi</li>
							<li>luios vitton</li>
						</ul>
					</div>
				</div>
				<br>
			</div>
			<hr>
			<p class="rights">All Rights Reserved:Bibek Bhattarai</p>
			<div class="icon">
				<ul>
					<li> <a href="#"><img src="logo/facebook.png"></a></li>
					<li> <a href="#"><img src="logo/twitter.png"></a></li>
					<li> <a href="#"><img src="logo/instagram.png"></a></li>
				</ul>
			</div>
		</div>
	</div>
	</div>
	<script src="login.js"></script>
</body>

</html>