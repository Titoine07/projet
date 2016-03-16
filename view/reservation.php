
<!-- ------------------------------------- Reservation et Carte du jours ------------------------------------ -->
<section id="resa" class="vpheight adjusting">

    <div class="center contain-resa">

	<div id="week-menu">
	    <?php
	    $superCtrl = new SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries();
	    $plats = $superCtrl->getCurrentWeekMeals();

	    echo '<div id="num-week"><h3>SEMAINE : ' . ($plats->NUM_SEMAINE) . '</h3></div>';

	    $cpt = 0;
	    foreach ($plats as $key => $value) {
		if ($cpt > 0 && $cpt < 8) {
		    echo '<div class="menu menu-' . $key . '">' . $key . '<br/><span>' . $value . '</div>';
		}
		$cpt++;
	    }
	    ?>
	    <button class="carte"><a href="index.php?action=carte">MENU</a></button>
	</div>

	<div id="horaire">
	    <h3>HORAIRES</h3>
	    <p>Le restaurant est ouvert tous les jours <br/>
		Tous les jours de 12:00 à 01:30<br/>
		cuisine en continu de midi à minuit
	    </p>
	</div>

	<div id="form-resa">

	    <h3>RESERVATION</h3>

	    <form class="formulaire-resa" action="index.php?resa=cerveza" method="post" >
		<div class="design-resa">
		    <label class="label-resa" for="textinput">NOM</label>
		    <input id="textinput" name="name" type="text" placeholder="Enter your name" class="form" required="required"><br/>
		</div>

		<div class="design-resa">
		    <label class="label-resa" for="phone">TELEPHONE</label>
		    <input id="phone" name="phone" type="tel" placeholder="Enter your phone number" class="form" required="required"><br/>
		</div>

		<div class="design-resa">
		    <label class="label-resa" for="date">DATE</label>
		    <input id="date" name="date" type="date"  class="form" required="required"><br/>
		</div>

		<div class="design-resa">
		    <label class="label-resa" for="time">HORAIRE</label>
		    <input id="time" name="time" type="time"  class="form" required="required"><br/>
		</div>

		<div class="design-resa">
		    <label class="label-resa" for="chairs">PERSONNES</label>
		    <input id="chairs" name="chairs" type="number"  min="1" max="10" class="form" required="required"><br/>
		</div>

		<div class="design-resa">
		    <label class="label-resa" for="email">EMAIL</label>
		    <input id="email" name="email" type="email"  class="form" placeholder="Enter your Email Adress" required=""><br/>
		</div>


		<button id="submit" name="submit" class="btn-resa">RESERVER</button>
	    </form>

	    <?php
	    if (!empty($_GET['resa']) && $_GET['resa'] == 'cerveza') {
		$superCtrl->sendResa($_GET);
	    }
	    ?>
	</div>

    </div>
    <div class="bottomslide"><a href="#event"><img src="./img/fleche-rouge.png"/></a></div>
</section>
