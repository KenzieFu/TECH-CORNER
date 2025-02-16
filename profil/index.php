<?php
session_start();

if (empty($_SESSION['login'])) {
	header("Location: ../auth/login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Login & Logout PHP</title>
</head>

<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4  mt-5">

				<?php
				if (isset($_SESSION['error'])) {
				?>
					<div class="alert alert-warning" role="alert">
						<?php echo $_SESSION['error'] ?>
					</div>
				<?php
				}
				?>

				<?php
				if (isset($_SESSION['message'])) {
				?>
					<div class="alert alert-success" role="alert">
						<?php echo $_SESSION['message'] ?>
					</div>
				<?php
				}
				?>

				<div class="card">
					<div class="card-title text-center">
						<h1>Data telah di-update</h1>

						<p><a href="profile.php">Update Profile</a></p>
					</div>
					<div class="card-body">
						<p>Hello: <?php echo $_SESSION['name'] ?></p>
						<p>Kamu berhasil update data.</p>
						<center>
							<a href="../forum/all.php">Lanjut ke forum</a>
						</center>
					</div>
				</div>
			</div>

		</div>

	</div>
</body>

</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['message']);
?>