<div id="firstPart">
	<section class="row-1">
		<div class="intro">
			<h1>Projets en tant qu'indépendant</h1>
		</div>
		<div class="grid">	
			<?= projectBis($projects['esadvalenciennes']); ?>
			
			<div class="subgrid">
				<?= projectBis($projects['stephenmaas']); ?>
				<?= projectBis($projects['petropelik']); ?>
			</div>
		</div>
	</section>
	<section class="row-2">
		<div class="grid">
			<?php
			echo projectBis($projects['placeauxcartons']); 
			?>
			<div class="subgrid">
				<div class="info">
					<p>Les deux essais suivants ont conduit à l'élaboration de ce système de site <i>one page</i>.</p>
				</div>
				<?php 
				echo concept([
					'title'=>'Petit vélo',
					'url'=>'https://chris-carton.com/concepts/petitvelo',
					'cover'=>'img/concepts/petitvelo.png'
				]);
				echo concept([
					'title'=>'Open mind',
					'url'=>'https://chris-carton.com/concepts/openmind',
					'cover'=>'img/concepts/openmind.png'
				]);
				?>
			</div>
		</div>
	</section>
	<section class="row-3">
		<div class="grid">
			<?php
			echo projectBis($projects['emmanuelprin']);
			echo projectBis($projects['assuranceslewis']); 
			echo projectBis($projects['abcnatation']); 
			?>
		</div>
	</section>
	<section class="row-4">
		<div class="grid">
			<?php 
			echo projectBis($projects['margot']); 
			echo projectBis($projects['chriscarton']); 
			?>
		</div>
	</section>
</div>
<div id="secondPart">
	<section class="row-5">
		<div class="intro">
			<h1>Projets en agence <small>(Les Sentinelles du Web)</small></h1>
		</div>
		<div class="grid">
			<?php 
			echo projectBis($projects['popeo']); 
			echo projectBis($projects['funster']); 
			echo projectBis($projects['femmesdebretagne']); 
			echo projectBis($projects['artbox']); 
			echo projectBis($projects['blogcolony']); 
			echo projectBis($projects['gtliens']); 
			echo projectBis($projects['handi']); 
			echo projectBis($projects['toprhu']); 
			echo projectBis($projects['bzh']); 
			echo projectBis($projects['trezulien']); 
			echo projectBis($projects['festimove']); 
			?>
		</div>
	</section>
</div>