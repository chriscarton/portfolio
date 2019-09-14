<div class="template cols-2">
	<?php
	echo projectCard(
		"img/projets/auto/placeauxcartons/placeauxcartons-accueil.png",
		"Le site est <i>one page</i>. Le menu fait défiler vers les différentes sections."
	);
	echo projectCard(
		"img/projets/auto/placeauxcartons/placeauxcartons-actions.png",
		"Voici l'une de ces sections."
	);
	echo projectCard(
		"img/projets/auto/placeauxcartons/placeauxcartons-contact.png",
		"Section contact."
	);
	echo projectCard(
		"img/projets/auto/placeauxcartons/blogplaceauxcartons.png",
		"Voici la partie blog (qui est gérée par WordPress)."
	);
	?>
</div>
<div style="margin-top:50px;">
	<?php
	echo projectInfo(
		"<p>L'administration du site (hors blog) se fait (après connexion) par modification directe des éléments de la page via l'attribut <code>contentEditable</code>. Un éditeur de texte est intégré (qui permet même de changer la couleur des textes...). Le but était de créer une administration facile à prendre en main.</p>"
	);
	?>
</div>