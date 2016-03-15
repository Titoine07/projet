<?php

class SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries
{

    /* on mets en private les sous-contrôleurs */
    private $_weekMealsCtrl;
    private $_reservationCtrl;
    


    public function __construct() {
            $this->_weekMealsCtrl = new WeekMealsController();
            $this->_reservationCtrl = new ReservationController();
            $this->_eventCtrl = new EventsController();

    }


    public function mainView() {
            require './view/caroussel.php';
            require './view/nav.php';
            self::allView();
    }

    private function  allView() {
            require './view/header.php';
            require './view/reservation.php';
            require './view/evenement.php';
    }

    public function getCurrentWeekMeals() {
            return $this->_weekMealsCtrl->getWeekMealsById(date('W'));
    }

    public function sendResa() {

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
    }
    
    public function getCurrentEvents() {
        return $this->_eventCtrl->getUpcomingEvents();
        
    }

}