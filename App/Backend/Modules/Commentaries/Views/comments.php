<p style="text-align: center">Il y a actuellement <?= $nombreComments ?> commentaire(s). En voici la liste :</p>
 
<table>
  <tr><th>Id</th><th>News</th><th>Auteur</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th><th>Signalé</th></tr>
<?php
foreach ($listComments as $comments)
{ ?>
  <tr>
  		<td><?php echo $comments['id'] ?></td>
      <td><?php 
        if($comments->report() == '1'){
          echo'signalé';
        }
       else{
        echo'non signalié';
       } ?>
<!--       <td>', $comments['news'], '</td>
  <td>', $comments['auteur'], '</td>
  <td>le ', $comments['date']->format('d/m/Y à H\hi'), '</td>
  <td>', ($comments['date'] == $comments['date'] ? '-' : 'le '.$comments['date']->format('d/m/Y à H\hi')), '</td>
  <td><a href="comment-update-', $comments['id'], '.html"><i class="fas fa-edit"></i></a> <a href="comment-delete-',
  $comments['id'], '.html"><i class="fas fa-trash"></i></a></td>
        <td>',if($comments['reported'] == true){echo'signalé'} else(){}, '</td>
</tr>', "\n"; -->
<?php }
?>
</table>
