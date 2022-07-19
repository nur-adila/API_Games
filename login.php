<?php

include 'conection/config.php';

session_start();

error_reporting(0);


if (isset($_SESSION['email']) and isset($_SESSION['password'])) {
    header("Location: dokumentasi.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];

		header("Location: dokumentasi.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>
    <div class="center">
      <h1>Sign In</h1>
      <form method="POST">
        <div class="txt_field">
          <input type="text" name="email" value="<?php echo $email; ?>" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" value="<?php echo $password; ?>" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="submit" value="Sign In">
        <div class="signup_link">
          Not a member? <a href="register.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
