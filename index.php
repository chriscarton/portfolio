<?php 
require_once('header.php');
?>
	<header id="Intro">
		<p>Bon on va se dire c'est une maquette.</p>
		<p>Qu'est-ce qu'on fait ?</p>
	</header>
	<div id="Content">
		<?php 
		if(!empty($_GET) && !empty($_GET['p']) && is_string($_GET['p'])){
			$project = $_GET['p'];
			var_dump($project);
			$path = 'projects/'.$project.'.php';
			if(file_exists($path)){
				include_once('projects/'.$project.'.php');
			}
		}else{
			include_once('listing.php');
		}

		?>
	</div>
	<footer>
		Chris Carton <?php echo date('Y'); ?>
	</footer>
	
<?php require_once('footer.php'); ?>