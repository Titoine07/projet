<?php
header("content-type : text/html ; charset='UTF-8'");
mb_internal_encoding("UTF-8");
require_once './lib/autoLoader.php';
// Si la session est vide, commence la!
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
		$superCtrl = new SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries();
?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset= "UTF-8"/>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

		<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Podkova' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<?php $superCtrl->bootStrap();	?>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/style-carte.css"/>
		<title>Le Quai des Machines</title>
	
	</head>

	<body>
		<?php


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