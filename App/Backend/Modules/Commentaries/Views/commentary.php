<p style="text-align: center">Il y a actuellement <?= $nombreNews ?> news. En voici la liste :</p>
 
<table class="table">
  <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
<?php
foreach ($listeNews as $news)
{
  echo '<tr>
  			<td>', $news['auteur'], '</td><td>', $news['titre'], '</td>
  			<td>le ', $news['dateAjout']->format('d/m/Y à H\hi'), '</td>
  			<td>', ($news['dateAjout'] == $news['dateModif'] ? '-' : 'le '.$news['dateModif']->format('d/m/Y à H\hi')), '</td>
  			<td><a href="news-update-', $news['id'], '.html"><i class="fas fa-edit"></i></a> <a href="news-delete-',
  			$news['id'], '.html"><i class="fas fa-trash"></i></a></td>
  		</tr>', "\n";
}
?>
</table>

<a href="http://projet4/admin/news-insert.html"><h3>Ajouter une news</h3></a>