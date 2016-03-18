<?php
session_start();
require_once '../lib/autoLoader.php';


if (isset($_POST['submitNewsletter'])) {

    if (!empty($_POST['mail'])) {

	$ctrl = new NewsletterController();
	$check = $ctrl->mailOperations($_POST['mail']);
	header('Location:../index.php?action=contact');
    }
}


