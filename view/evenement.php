
<!-- ------------------------------------------------- evenement -------------------------------------------------- -->
<section  id="event" class="vpheight adjusting">

		<div class="center">
			<?php

				$superCtrl = new SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries();
				$events = $superCtrl->getCurrentEvents();

				$cpt = 0;
				foreach ($events as $event) {
					$cpt++;
					echo '<div class="event event-'.$cpt.'"><div class="event-contain"><h2>'
					.$event->NOM_EVENEMENT.'</h2><p>'.$event->DESCRIPTION_EVENEMENT.'</p><p>'
					.$event->DATE_EVENEMENT. '</p></div></div>';

				}

			?>
		</div>

		<div class="bottomslide"><a href="#caroussel"><img src="./img/fleche-rougeup.png"/></a></div>
</section>
