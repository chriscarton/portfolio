<div id="firstPart">
	<section id="templateGrid1">
		<div class="section-intro">
			<h1>Projets en tant qu'indépendant (auto-entreprise)</h1>
		</div>
		<div class="grid">	
			<?= project($projects['esadvalenciennes']); ?>
			
			<div class="right">
				<?= project($projects['stephenmaas']); ?>
				<?= project($projects['petropelik']); ?>
			</div>
		</div>
	</section>
	<section class="ban" id="templateGrid2">
		<div class="grid">
			<?php
			echo project($projects['placeauxcartons']); 
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
	<section class="ban" id="templateGrid3">
		<div class="grid">
			<?php
			echo project($projects['emmanuelprin']);
			echo project($projects['assuranceslewis']); 
			echo project($projects['abcnatation']); 
			?>
		</div>
	</section>
	<section class="ban" id="templateGrid4">
		<div class="grid">
			<?php 
			echo project($projects['margot']); 
			echo project($projects['chriscarton']); 
			?>
		</div>
	</section>
</div>
<div id="secondPart">
	<section id="templateGrid5">
		<div class="section-intro">
			<h1>Projets en agence (Les Sentinelles du Web)</h1>
		</div>
		<div class="grid">
			<?php 
			echo project($projects['popeo']); 
			echo project($projects['funster']); 
			echo project($projects['femmesdebretagne']); 
			echo project($projects['artbox']); 
			echo project($projects['blogcolony']); 
			echo project($projects['gtliens']); 
			echo project($projects['handi']); 
			echo project($projects['toprhu']); 
			echo project($projects['bzh']); 
			echo project($projects['trezulien']); 
			echo project($projects['festimove']); 
			?>
		</div>
	</section>
</div>