<article>
	<h2><?= $news['titre'] ?></h2>
	<p><em><?= $news['auteur'] ?></em>, le <?= $news['dateAjout']->format('d/m/Y à H\hi') ?></p>

	<hr class="line">
	<p><?= nl2br($news['contenu']) ?></p>

	<?php if ($news['dateAjout'] != $news['dateModif']) { ?>
	  <p style="text-align: right;"><small><em>Modifiée le <?= $news['dateModif']->format('d/m/Y à H\hi') ?></em></small></p>
	<?php } ?>
		<hr class="line">
	<p><a href="commenter-<?= $news['id'] ?>.html">Ajouter un commentaire</a></p>

	<?php
	if (empty($comments))
	{
	?>
	<strong><p>Aucun commentaire n'a encore été posté. Soyez le premier à en laisser un !</p></strong>
	<?php
	}

	foreach ($comments as $comment)
	{
	?>
	<fieldset>
	  <legend>
	    Posté par <?= htmlspecialchars($comment['auteur']) ?> le <?= $comment['date']->format('d/m/Y à H\hi') ?>
	    <?php if ($user->isAuthenticated()) { ?> -
	      <a href="admin/comment-update-<?= $comment['id'] ?>.html">Modifier</a> |
	      <a href="admin/comment-delete-<?= $comment['id'] ?>.html">Supprimer</a>
	    <?php } ?>
	      <a href="/news-<?= $comment['news']?>/comment-report-<?= $comment['id'] ?>.html">Signaler</a>	
	  </legend>
	  <p><?= nl2br(htmlspecialchars($comment['contenu'])) ?></p>
	</fieldset>
	<?php
	}
	?>
</article>