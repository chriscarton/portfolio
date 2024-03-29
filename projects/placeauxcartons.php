<div class="grid cols-2">
	<?php
	echo card(
		"img/projets/auto/placeauxcartons/placeauxcartons-accueil.png",
		"Le site est <i>one page</i>. Le menu fait défiler vers les différentes sections."
	);
	echo card(
		"img/projets/auto/placeauxcartons/placeauxcartons-actions.png",
		"Voici l'une de ces sections."
	);
	echo card(
		"img/projets/auto/placeauxcartons/placeauxcartons-contact.png",
		"Section contact."
	);
	echo card(
		"img/projets/auto/placeauxcartons/blogplaceauxcartons.png",
		"Voici la partie blog (qui est gérée par WordPress)."
	);
	?>
</div>
<?php
echo info(
	"L'administration du site (hors blog) se fait (après connexion) par modification directe des éléments de la page via l'attribut <code>contentEditable</code>. Un éditeur de texte est intégré (qui permet même de changer la couleur des textes...). Le but était de créer une administration facile à prendre en main."
);
?>