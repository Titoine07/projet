<?php
require_once '../lib/autoLoader.php';
$superCtrl = new SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries();
	
	if (isset($_POST) && !empty($_POST)) {
	
		$superCtrl->sendResa($_POST);
	} 

header('Location: ../index.php?#resa');

