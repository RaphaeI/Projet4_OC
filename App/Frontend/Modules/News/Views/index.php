<div id="homeNews" class="container">
<?php
	$i = 0;
	foreach ($listeNews as $news){
	?>
				<section>
					<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
					<p><?= $news['dateAjout']->format('d.m.Y') ?></p>
					<p><?= (nl2br($news['contenu']))?></p>
					<h4><a href="news-<?= $news['id'] ?>.html">Lire</a></h4>
				</section>
	<?php } ?>
</div>