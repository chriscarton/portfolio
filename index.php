<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio - Chris Carton</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<!-- 	<section id="Intro">
		<p>Bon on va se dire c'est une maquette.</p>
		<p>Qu'est-ce qu'on fait ?</p>
	</section> -->

	<?php 
	


	function project($project){
		ob_start();
		?>
		<div class="project" style="background-color:<?php echo $project['background_color'] ?? 'white' ?>;">
			<div class="background-image" style="background-image:url('<?php echo $project['cover'] ?? ''; ?>');">
				
			</div>
			<div class="overlay"></div>
			<div class="pattern"></div>
			<div class="encart">
				<h1><?= $project['title'] ?></h1>
				<div class="intro">
					<?= $project['intro'] ?>
				</div>
				<div class="btn-container">
					<a class="btn">Suite <span class="arrow">→</span></a>
				</div>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}
	?>

	<section class="grid" id="templateGrid1">
		
		<?= project([
			'title'=>'Esad Valenciennes',
			'intro'=>"<p>Site réalisé intégralement pour <b>l'École Supérieure d'Art et de Design</b> de <b>Valenciennes</b> (anciennement <i>École Supérieure Nationale des Beaux-Arts de Valenciennes</i>).</p> <p>Site réalisé sur <b>CakePHP 2</b> avec authentification, pages, actualités, et système de modules en pages d'accueil et d'informations.</p>",
			'background_color'=>'#FFEA6E',
			'cover'=>'img/projets/auto/esad.png'
		]); ?>
		
		<div class="right grid">
			<?php
			/*
			echo project([
				'title'=>'Place aux Cartons',
				'intro'=>"<p>Site réalisé intégralement pour <b>l'Association Place aux Cartons</b> à <b>Valenciennes</b>.</p><p>Ce site dispose d'une d'authentification basique et d'un système d'administration maison à la volée grâce à l'attribut <code>contentEditable</code></p><p>Il est couplé à un WordPress pour la partie blog.</p>",
				'background_color'=>'#996F42',
				'cover'=>'img/projets/auto/placeauxcartons.png'
			]); 
			*/
			?>

			<?= project([
				'title'=>'Stephen Maas',
				'intro'=>"<p>Site réalisé sur CakePHP 2. Dispose d'un système d'administration et d'une navigation en <i>Ajax</i></p>",
				'background_color'=>'#71B6DB',
				'cover'=>'img/projets/auto/stephenmaas.png'
			]); ?>

			<?= project([
				'title'=>'Petr Opelik',
				'intro'=>"<p>Site portfolio réalisé sur CakePHP 2 avec une <b>navigation originale</b> combinant Javascript (avec les librairie jQuery et Vivus), Ajax et Svg.</p>",
				'background_color'=>'#75DB71',
				'cover'=>'img/projets/auto/petropelik.png'
			]); ?>
		</div>
		
	</section>
</body>
</html>