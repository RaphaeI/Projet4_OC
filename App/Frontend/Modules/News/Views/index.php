<div id="homeNews" class="container">
<?php
	$i = 0;
	foreach ($listeNews as $news){
		$i++;
		if ($i <= 2 || $i>4){
			if ($i % 2 == 1){ 
			?>
				<section id="blackSection">
					<?php echo"impair"?>
					<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
					<p><?= $news['dateAjout']->format('d.m.Y') ?></p>
					<p><?= strip_tags(nl2br($news['contenu'])) ?></p>
					<h4><a href="news-<?= $news['id'] ?>.html">Lire</a></h4>
				</section>
			<?php 
			}

			else if ($i % 2 == 0){
			?>			
				<section>
					<?php var_dump($i)?>
					<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
					<p><?= $news['dateAjout']->format('d.m.Y') ?></p>
					<p><?= strip_tags(nl2br($news['contenu'])) ?></p>
					<h4><a href="news-<?= $news['id'] ?>.html">Lire</a></h4>
				</section>
			<?php
			}
		}

		else{
			if ($i % 2 == 1){ 
			?>
				<section>
					<?php echo"impair"?>
					<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
					<p><?= $news['dateAjout']->format('d.m.Y') ?></p>
					<p><?= strip_tags(nl2br($news['contenu'])) ?></p>
					<h4><a href="news-<?= $news['id'] ?>.html">Lire</a></h4>
				</section>
			<?php 
			}

			else if ($i % 2 == 0){
			?>			
				<section id="blackSection">
					<?php echo"pair"?>
					<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
					<p><?= $news['dateAjout']->format('d.m.Y') ?></p>
					<p><?= strip_tags(nl2br($news['contenu'])) ?></p>
					<h4><a href="news-<?= $news['id'] ?>.html">Lire</a></h4>
				</section>
			<?php
			}

		}
	}
?>
</div>