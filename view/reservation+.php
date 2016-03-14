<?php
// Si la session est vide, commence la!
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Affiche les erreurs de $_SESSION['flash']
if(isset($_SESSION['flash'])) {

    foreach ($_SESSION['flash'] as $typeFlash=>$message) {

        if($message=="danger"){

            foreach($message as $error){

                echo '<div class="alert alert-' . $typeFlash . '">' . $error . '</div>';

            }
        }
        else{
            echo '<div class="alert alert-' . $typeFlash . '">' . $message . '</div>';
        }

        unset($_SESSION['flash']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Réservation</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div align="center">

<form class="form-horizontal" action="" method="post" >
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Reservation</legend>

        <!-- Nom-->
        <div class="form-group">
            <label class="col-md-5 control-label" for="textinput">Name</label>
            <div class="col-md-5">
                <input id="textinput" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Phone-->
        <div class="form-group">
            <label class="col-md-5 control-label" for="phone">Phone Number</label>
            <div class="col-md-5">
                <input id="phone" name="phone" type="tel" placeholder="Enter your phone number" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Date -->
        <div class="form-group">
            <label class="col-md-5 control-label" for="date">Pick a Date</label>
            <div class="col-md-5">
                <input id="date" name="date" type="date"  class="form-control input-md" required="">
            </div>
        </div>

        <!-- Time -->
        <div class="form-group">
            <label class="col-md-5 control-label" for="time">Pick a Time</label>
            <div class="col-md-5">
                <input id="time" name="time" type="time"  class="form-control input-md" required="">
            </div>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label class="col-md-5 control-label" for="email">Email Adress</label>
            <div class="col-md-5">
                <input id="email" name="email" type="email"  class="form-control input-md" placeholder="Enter your Email Adress" required="">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-5 control-label" for="submit"></label>
            <div class="col-md-5">
                <button id="submit" name="submit" class="btn btn-primary pull-right">Submit reservation</button>
            </div>
        </div>

        <br/><a href='../index.php'>Return to Index Page</a>

    </fieldset>
</form>
</div>
</body>

<?php

if(isset($_POST)){

    if(!empty($_POST)){

        require_once '../lib/lib.php';
        require_once '../lib/autoloader.php';

        $reservation = new ReservationController();
        $validation = $reservation->mailOperations(
                                            $_POST['name'],
                                            $_POST['phone'],
                                            $_POST['date'],
                                            $_POST['time'],
                                            $_POST['email']);
    }
}
?>
</html>