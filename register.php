<?php
include("includes/header.php");
?>

<html>

<body>
	<section class="page-section cta">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 mx-auto">
					<div class="cta-inner bg-faded text-center rounded">
						<div id="main">
							<form action="" method="post">
								<h2><b>Register<b /></h2><br />
								<?php if (isset($_GET['error'])) { ?>
									<p class="error"><?php echo $_GET['error']; ?></p>
								<?php } ?>
								<label>User Name:</label>
								<input type="text" name="user_name" placeholder="User Name"><br />

								<label>E-mail:</label>
								<input type="email" name="email" placeholder="E-mail"><br />

								<label>Password:</label>
								<input type="password" name="password" placeholder="Password"><br /><br />

								<button type="submit" class="submit" onclick="submit()">Register</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

<?php
include("includes/footer.php");
?>

</html>







<?php
include "db_conn.php";

$queryUserName = isset($_POST['user_name']) ? $_POST['user_name'] : null;
$queryUserEmail = isset($_POST['email']) ? $_POST['email'] : null;
$queryUserPassword = isset($_POST['password']) ? $_POST['password'] : null;

// Formuleer query
if (isset($_POST)) {
	$sql = "INSERT INTO `users` (user_name, email, password) VALUES ('{$queryUserName}', '{$queryUserEmail}','{$queryUserPassword}')";


	// Poging uitvoeren query
	if ($conn->query($sql) === TRUE) {
		// Uitvoeren query gelukt
		echo "<script>alert(`account toegevoegd 'users'.`)</script>";
		header("Location:index.php");
	} else {
		// Uitvoeren query mislukt
		echo "<script>alert(`Error: " . $sql . "<br>" . $conn->error . "`)</script>";
	}
}


// Afsluiten verbinding
$conn->close();
// exit();

?>