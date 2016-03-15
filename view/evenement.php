
    <!-- ------------------------------------------------- evenement -------------------------------------------------- -->
    <section  id="event" class="vpheight adjusting">

            <div class="center">
                    <?php
                    
                             $superCtrl = new SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries();
                             $events = $superCtrl->getCurrentEvents();
                             var_dump($events);
                             cpt = 0;
                             foreach ($events as $event) {
                                 cpt++
                              echo '<div class="event event-'.cpt.'"><div class="event-contain"><h3>'.$event   </div></div>';

                             }
                    
                ?>

            </div>


            <div class="bottomslide"><a href="#caroussel"><img src="./img/fleche-rougeup.png"/></a></div>
    </section>
	