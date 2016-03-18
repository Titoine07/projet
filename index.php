<?php
header("content-type : text/html ; charset='UTF-8'");
mb_internal_encoding("UTF-8");
require_once './lib/autoLoader.php';
// Si la session est vide, commence la!
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset= "UTF-8"/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/jquery.cycle2.js"></script>
		<script type="text/javascript" src="js/jquery.cycle2.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.cycle2.video.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Podkova' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<title>Le Quai des Machines</title>

	</head>

	<body>
		<?php
		$superCtrl = new SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries();

		if (!isset($_GET['action'])) {

			$superCtrl->mainView();
		} else {
			switch ($_GET['action']) {
				case 'carte':
					$superCtrl->displayCarte();
					break;

				case 'resto':
					$superCtrl->displayResto();
					break;

				case 'contact':
					$superCtrl->displayContact();
					break;

				default:
					break;
			}
		}
		?>
	</body>

</html>