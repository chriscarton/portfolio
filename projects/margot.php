<div class="grid cols-2">
	<?php 
	echo card(
		"img/projets/auto/margot/accueil.png",
		"Page d'accueil avec slider"
	); 
	echo card(
		"img/projets/auto/margot/produit.png",
		"Vue produit"
	); ?>
	
</div>
<div class="grid cols-3">
	<?php 
	echo card(
		"img/projets/auto/margot/contact.png",
		"page de contact"
	); 
	echo card(
		"img/projets/auto/margot/selection.png",
		"Sélection de produit"
	); 
	echo card(
		"img/projets/auto/margot/devis.png",
		"Fonctionnalité : demander un devis pour les produits sélectionnés"
	); ?>
</div>
<div class="grid cols-2">
	<?php 
	echo card(
		"img/projets/auto/margot/finitions.png",
		"Dernières finitions ajoutées"
	); 
	echo card(
		"img/projets/auto/margot/histoire.png",
		"Lien vers la page histoire"
	); ?>
</div>
<div class="grid cols-2">
	<?php 
	echo card(
		"img/projets/auto/margot/revendeurs.png",
		"Localisation des revendeurs"
	); 
	echo card(
		"img/projets/auto/margot/revendeurs-2.png",
		"Au clic sur une région dans le menu déroulant"
	); ?>
</div>
<div class="grid cols-2 for-3-1">
	<?php 
	
	echo card(
		"img/projets/auto/margot/recherche.png",
		"Fonctionnalité de recherche en <i>ajax</i>"
	); 

	echo card(
		"img/projets/auto/margot/menurapide.png",
		"Sur la droite un menu en <i>ajax</i> permettant de naviguer plus \"rapidement\""
	); 
	?>
</div>
<?php 
	echo info("La dernière version a été dévelopée sous CakePHP 3 avec des outils modernes de développement comme <i>NPM</i>, <i>Gulp</i> et <i>Sass</i>.");
?>