<?php

class SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries {
	/* on mets en private les sous-contrôleurs */

	private $_weekMealsCtrl;
	private $_reservationCtrl;
	private $_eventCtrl;

	
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

	private function allView() {
		require './view/header.php';
		require './view/reservation.php';
		require './view/evenement.php';
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
		if (isset($_SESSION['flash'])) {
			foreach ($_SESSION['flash'] as $typeFlash => $message) {
				if ($message == "danger") {
					foreach ($message as $error) {
						echo '<div class="alert alert-' . $typeFlash . '">' . $error . '</div>';
					}
				} else {
					echo '<div class="alert alert-' . $typeFlash . '">' . $message . '</div>';
				}
			unset($_SESSION['flash']);
			}
		}
	}

}
