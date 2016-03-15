<?php

$check = new SessionController();
$check->restricLogin();

echo '<h1>Upcoming Events</h1>';

$events = new EventsController();

if(isset($_GET['action'])){

    if($_GET['action'] =='delete'){
        $events->deleteEvent($_GET['id']);
    }
}

if(isset($_POST['submit'])) {

    if((!empty($_POST['eventName'])) && (!empty($_POST['dateEvent'])) && (!empty($_POST['eventDescription']))){

        $addEvent = new EventsController();

        $addEvent->saveEvent(($_POST['eventName']), ($_POST['eventDescription']), ($_POST['dateEvent']));
        $_SESSION['flash']['success'] = "Event added";

    } else {

        $_SESSION['flash']['danger'] = "Please fill all the fields";
    }
}

$data = $events->getUpcomingEvents();

foreach($data as $upcoming){
    echo "<div style='width:500px; '><fieldset style='border-bottom: 1px solid darkgray'>
            <h2>".$upcoming->NOM_EVENEMENT." | ".$upcoming->DATE_EVENEMENT."</h2>
            <p>".$upcoming->DESCRIPTION_EVENEMENT."</p>
            <a href='?p=events&action=delete&id=".$upcoming->ID_EVENEMENT."''>Delete</a>
          </fieldset></div></br>";
}
?>
<form id="event" action="" method="post">
    <fieldset>
        <legend><strong>Enter New Event:</strong></legend>
        <br><label for="eventName">Event name:</label>
        <input type="text" name="eventName" placeholder="Event Name"><br>

        <br><label for="dateEvent">Event date:</label>
        <input type="date" name="dateEvent"><br>

        <br><label for="eventDescription">Event description:</label>
        <textarea form="event" id="eventDescription" rows="8" name="eventDescription" placeholder="Type here..."></textarea>

        <br><input type="submit" name="submit" value="Submit">
    </fieldset>
</form>