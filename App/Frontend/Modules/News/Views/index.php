<div id="homeNews">
<?php
	$i = 0;
	foreach ($listeNews as $news){
	?>
				<section>
					<div class="articleInfos">
						<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
						<p><?= $news['dateAjout']->format('d.m.Y') ?></p>
						
					</div>
					<div class="articlePreview">
						<p><?= (nl2br($news['contenu']))?></p>
						<a href="news-<?= $news['id'] ?>.html"><h4>Lire</h4></a>
					</div>
									
				</section>
	<?php } ?>
</div>