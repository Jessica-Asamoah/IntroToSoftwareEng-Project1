<?php 
	session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: loginp.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: loginp.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
	<title>Home</title>

</head>		
<body>
	<section>
	<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
	</section>

	<section class="header">
	<?php  if (isset($_SESSION['email'])) : ?>
	<h1>Hello <strong><?php echo $_SESSION['email']; ?></strong></h1>
	</section>
	<section id="message">
		<img src="https://www.iconpacks.net/icons/2/free-sad-face-icon-2691-thumb.png">
		 
		<p>Sorry, the service is down at the moment. <br/>Please try again later. </p>
		<a href="homepage.php?logout='1'" class='btn btn-primary'>CLICK HERE TO LOGOUT</a>
		<?php endif ?>
		</section>
	<section id="footer">
        <p id="contactUs">
            Call us on: 030-234-0983/030-456-8675
        </p>
        E-mail: newcreationchurch@gmail.com
        <p>Designed and built with all the love in the world by Jessica Asamoah</p>
    </section>
		
</body>
</html>