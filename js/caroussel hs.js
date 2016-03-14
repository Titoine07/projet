// Execution de cette fonction lorsque le DOM sera entièrement chargé


$(document).ready(function() {
			
	
	var width = $(window).width();
	var height = $(window).height();
	
	// Calcul préalables :
		// Element de référence pour la zone de visualisation (ici le premier item)
		//var Reference = $(".imgcontainer li:first-child");
		// Nombre d'éléments de la liste
		var NbElement = $(".imgcontainer li").length;
	// Ciblage de la bande de diapositives
	$(".imgcontainer")
		// Englobage de la liste par la zone de visualisation
		.wrap('<div class="imgcontainer-conteneur"></div>')
		// Application d'une largeur à la bande de diapositive afin de conserver une structrure horizontale
		.css("width", (width * NbElement) );
	// Ciblage de la zone de visualisation
	
	
	$(".imgcontainer-conteneur")
		// Application de la largeur d'une seule diapositive
		.width( width )
		// Application de la hauteur d'une seule diapositive
		.height(height)
		// Blocage des débordements
		.css("overflow", "hidden");


// Actions de navigation
		// Initialisation du compteur
		Cpt = 0;
		
		// Clic sur le bouton "Suivant"
		$(".rightslide").click(function() {
			
			if(Cpt < (NbElement-1) ) {
				
				// Ajout +1 au compteur (nous allons sur la diapositive suivante)
				Cpt++;
				// Mouvement du carrousel en arrière-plan
				
				$(".imgcontainer").animate({
					marginLeft : - (width * Cpt)
				});
			}
           // fin du if	
		});

		// Clic sur le bouton "Précédent"
		$(".leftslide").click(function() {
			
			// Si le compteur est supérieur à zéro
			if(Cpt > 0) {
				// Soustraction -1 au compteur (nous allons sur la diapositive précédente)
				Cpt--;
				// Mouvement du carrousel en arrière-plan
				$(".imgcontainer").animate({
					marginLeft : - (width * Cpt)
				});
			}
		});
		
		$(window).resize(function() {
				width = $(window).width();
				height = $(window).height();
				$(".imgcontainer").css( {"width": width ;"height" : height} );
				$(".imgcontainer-conteneur").resize( width , height );
				console.log(height);
			});
		
		
});
