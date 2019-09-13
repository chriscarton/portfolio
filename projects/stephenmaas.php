<div class="project-container">
	<?php 
	echo projectCard(
		"img/projets/auto/stephenmaas/maasaccueil.png",
		"Voici la page d'accueil du site. <br>Stephen Maas est un artiste, sculpeur vivant à Paris."
	);

	echo projectCard(
		"img/projets/auto/stephenmaas/maasworks.png",
		"Le site présente les projets sous forme de grille."
	);
	?>
</div>
<div class="project-template cols-2">
	<?php
	echo projectCard(
		"img/projets/auto/stephenmaas/maasproject.png",
		"Toutes les photos d'un seul projet."
	);
	echo projectCard(
		"img/projets/auto/stephenmaas/maaslightbox.png",
		"Quand on clique sur une photo s'ouvre une <i>lightbox</i>."
	);
	echo projectCard(
		"img/projets/auto/stephenmaas/maasmore.png",
		"Le menu sur la gauche est déroulant. Il affiche 10 projets et un lien \"more\" qui mène à un index." 
	);
	echo projectCard(
		"img/projets/auto/stephenmaas/maasadmin.png",
		"Le site dispose aussi d'une interface d'administration."
	);
	?>
</div>