<?php

class SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries {
	/* on mets en private les sous-contrôleurs */

	private $_weekMealsCtrl;
	private $_reservationCtrl;
	private $_eventCtrl;
	private $_newsletterController;
	private $_contactController;

	
	public function __construct() {
		$this->_weekMealsCtrl = new WeekMealsController();
		$this->_reservationCtrl = new ReservationController();
		$this->_eventCtrl = new EventsController();
		$this->_newsletterController = new NewsletterController();
		$this->_contactController = new ContactController();
	}

	public function mainView() {
		require './view/caroussel.php';
		require './view/nav.php';
		self::allView();
	}

	private function allView() {
		require './view/header.php';
		require './view/reservation.php';
		require './view/evenement.php';
	}
	
	public function displayContact(){
		require './view/nav.php';
		require './view/contact.php';
    }

	public function getCurrentWeekMeals() {
		$plats = $this->_weekMealsCtrl->getWeekMealsById(date('W'));
		
		echo '<div id="num-week"><h3>SEMAINE : ' . ($plats->NUM_SEMAINE) . '</h3></div>';

		$cpt = 0;
		foreach ($plats as $key => $value) {
			if ($cpt > 0 && $cpt < 8) {
				echo '<div class="menu menu-' . $key . '">' . $key . '<br/><span>' . $value . '</div>';
			}
			$cpt++;
		}
	}

	public function getCurrentEvents() {
		return $this->_eventCtrl->getUpcomingEvents();
	}

	public function displayCarte() {
		require './view/nav.php';
		require './view/carte.php';
	}
	
	public function sendResa(array $data) {
		
		$this->_reservationCtrl->mailOperations(
			$data['name'], $data['phone'], $data['date'], $data['time'], $data['chairs'], $data['email']);
	}
		
	public function alertFlash(){
		// Affiche les erreurs de $_SESSION['flash']
		if (!empty($_SESSION['flash'])) {
			if ($_SESSION['flash'] == "success") {
				return $_SESSION['flash']['success'];
			} else {
				foreach ($_SESSION['flash'] as $message) {

					echo $message;
				}
			}
			unset($_SESSION['flash']);
		}
	}

	public function displayResto() {
		require './view/nav.php';
		require './view/retso.php';
	}
	
	
	
}
