<?php

session_start();
require_once '../lib/autoLoader.php';
if (isset($_POST['submitContact'])) {
    
    

    if (!empty($_POST)) {

	$contact = new ContactController();
	$form = $contact->mailOperations(
		$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message']);
	header('Location:../index.php?action=contact');
    }
}

