<div id="homeNews">
<?php
	$i = 0;
	foreach ($listeNews as $news){
	?>
				<section>
					<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
					<p><?= $news['dateAjout']->format('d.m.Y') ?></p>
					<p><?= (nl2br($news['contenu']))?></p>
					<a href="news-<?= $news['id'] ?>.html"><h4>Lire</h4></a>
				</section>
	<?php } ?>
</div>