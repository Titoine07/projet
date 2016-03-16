<?php

class WeekMealsController {

	private $_weekMealsManager;

	
	public function __construct() {
		$this->_weekMealsManager = new WeekMealsManager(PDOFactory::getConnection());
	}

	public function createNextWeekMeals(array $plats) {
		$this->_weekMealsManager->createNextWeekMeals($plats);
	}

	public function getWeekMealsById($id) {
		$meals = $this->_weekMealsManager->getWeekMealsById($id);
	if ($meals == false) {
		echo '<div id="aucun">Aucun menu pour cette semaine. Ce n\'est certainement pas à cause d\'un probleme avec l\'impection sanitaire!</div>';
		die();
	}
		return $meals;
	}

	public function updateWeekMeals(array $plats){
		$this->_weekMealsManager->updateCurrentWeekMeals($plats);
	}

	public function getweekNumbers(){
		$weeks = $this->_weekMealsManager->getWeekNumbers();
		return $weeks;
	}
}
