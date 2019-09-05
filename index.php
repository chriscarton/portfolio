<?php 
require_once('no-cache.php');
require_once('projects.php');
require_once('header.php');
?>
	<header id="Header">
		<h1>Chris Carton</h1>
		<h2>Portfolio / Designer, Développeur Web</h2>
	</header>
	<div id="Content">
		<?php 
		require_once('dispatcher.php');
		?>
	</div>
	<footer>
		Chris Carton <?php echo date('Y'); ?>
	</footer>	
<?php require_once('footer.php'); ?>