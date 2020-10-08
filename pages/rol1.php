<?php
//session start
session_start();
$email = $_SESSION['email'];
$rol = $_SESSION['rol'];
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['email'])) {
	header('Location: ../index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>User Authentication</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <!-- Navbar  -->
  <div class="navbar-fixed">
    <nav class="light-blue lighten-1 navbar-fixed" role="navigation">
      <div class="nav-wrapper container "><a id="logo-container" href="#" class="brand-logo">Rol 1</a>
        <a href="../config/logout.php" class="right">Salir</a>
      </div>
    </nav>
  </div>

  <!-- Main content  -->
  <main>
			<div class="row center">
		    <div class="col s12 m8 offset-m2">
		      <div class="card-panel blue">
		        <span class="white-text">
							<?php
				        echo "Email: $email \n";
								echo "Rol: $rol";
				       ?>
		        </span>
		      </div>
		    </div>
		  </div>
  </main>

  <!-- Footer  -->
  <footer class="page-footer orange">
    <div class="footer-copyright center">
      <div class="container">
        <a href="https://github.com/alexisrv" class="white-text">© 2020 alexisrv</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

</body>

</html>
