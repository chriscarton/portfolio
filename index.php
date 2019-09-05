<?php 
require_once('no-cache.php');
require_once('projects.php');
require_once('header.php');
?>
	<header id="Header">
		<div class="inblock">
			<h1>
				<a href="/portfolio">
					Chris Carton
				</a>
			</h1>
			<h2>Portfolio / Designer, Développeur Web</h2>
		</div>
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