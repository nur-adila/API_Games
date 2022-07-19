<?php

include 'conection/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['email'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
        header("location: login.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>
    <div class="center">
      <h1>Sign Up</h1>
      <form method="POST">
		<div class="txt_field">
          <input type="text" name="username" value="<?php echo $username; ?>" required>
          <span></span>
          <label>Username</label>
        </div>

		<div class="txt_field">
          <input type="text" name="email" value="<?php echo $email; ?>" required>
          <span></span>
          <label>Email</label>
        </div>

		<div class="txt_field">
          <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
          <span></span>
          <label>Password</label>
        </div>

        <div class="txt_field">
          <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
          <span></span>
          <label>Confirm Password</label>
        </div>

        <input type="submit" name="submit" value="Sign Up">
        <div class="signup_link">
          Have a Account? <a href="login.php">SignIn</a>
        </div>
      </form>
    </div>

  </body>
</html>