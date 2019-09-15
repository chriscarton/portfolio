<div class="grid cols-2">
	<?php
	echo card(
		"img/projets/auto/mrsjune/june-1.png",
		"Le projet comporte sur cette page une vidéo en arrière plan."
	);
	echo card(
		"img/projets/auto/mrsjune/mrsjune-2.png",
		"La balise <code>video</code> utilisée dispose des attributs autoPlay et loop."
	);
	?>
</div>
<div class="grid cols-3">
	<?php 
	echo card(
		"img/projets/auto/mrsjune/june-categories.png",
		"Les boutons rouges permettent d'afficher les vignettes en fonction de la catégorie choisie."
	);
	echo card(
		"img/projets/auto/mrsjune/june-hover.png",
		"Au survol des vidéos la lecture se déclenche grace à un évènement JavaScript."
	);
	echo card(
		"img/projets/auto/mrsjune/june-footer.png",
		"Footer incluant la navigation."
	);
	?>
</div>
<?php 
	echo info("Le projet a aussi nécessité l'optimisation des vignettes vidéo avec <code>ffmpeg</code> pour accélérer le temps de chargement de la page.")
?>