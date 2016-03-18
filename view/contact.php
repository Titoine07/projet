

<div class="container-fluid center-contact" style="font-family: 'Podkova', serif;">
	<div class="row">

		<div class="col-sm-12" style="padding: 0px; margin-bottom: 10px">
			<a target="_blank" href="https://www.google.com/maps/place/Les+Machines+de+l'%C3%AEle/@47.2049586,-1.5622382,15.75z/data=!4m2!3m1!1s0x0:0xb1bb929d858aecf9?hl=fr-FR"><img  src="img/map.jpg" style="border: 1px solid lightsteelblue ;width: 100% ; border-radius: 5px""></a>
		</div>

		<hr>

		<div class="col-sm-12" style="background-color: rgba(0, 0, 0, 0.15); border: 1px solid lightsteelblue; border: 0px; border-radius: 5px">

			<div class="col-sm-6">
				<h2>Le Quai Des Machines</h2>
				<address>
					<strong>Les Machines de l’île</strong><br/>
					Parc des Chantiers<br>
					Boulevard Léon Bureau<br>
					44 200 Nantes<br>
					<abbr title="Phone">Phone:</abbr> +33 2 51 17 49 89
				</address>

				<hr>

				<!--		Formulaire Newsletter-->
				<form class="form-inline" action="traitement/tnewsletter.php" method="post" id="createform" style="padding-top: 3px;">

					<h2>Subscribe Newsletter:</h2>

					<div class="form-group">
						<input  class="form-control" id="mail" type='email' name='mail' placeholder="Enter your Email" required=""/>
					</div>
					<button class="btn btn-danger" type="submit" name="submitNewsletter" value="Subscribe">Subscribe</button>
				</form>

			</div>


			<!--		Formulaire Contact-->
			<div class="col-sm-6 col-right">

				<h2>Contact Us</h2>

				<form class="form-horizontal" method="post" action="traitement/tcontact.php">
					<div class="form-group">
						<div class="col-sm-12">
							<input class="form-control" id="firstName" name="name" placeholder="Name" required="" type="text">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<input class="form-control" name="email" placeholder="Email" required="" type="email">
						</div>
						<div class="col-sm-6">
							<input class="form-control" name="phone" placeholder="Phone(optional)" type="text">
						</div>
					</div>

					<div class="form-group">

						<div class="col-sm-12">
							<textarea class="form-control" minlength="10" rows="4" name="message" placeholder="Message"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<button class="btn btn-danger pull-right" name="submitContact">Submit</button>
						</div>
					</div>
				</form>


			</div><!--/col-sm-6-->
			<div class="msg">
				<?php
				$erreurs = new SuperCtrlDeLaMortQuiTueMemeLesDimanchesEtLesJoursFeries();
				$erreurs->alertFlash();
				?>
			</div>
		</div><!--/col-sm-12-->

	</div>
</div>




