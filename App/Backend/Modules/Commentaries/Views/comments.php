<p style="text-align: center">Il y a actuellement <?= $nombreComments ?> commentaire(s). En voici la liste :</p>
 
<table>
  <tr><th>Id</th><th>News</th><th>Auteur</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th><th>Signalé</th></tr>
<?php
foreach ($listComments as $comments)
{ ?>
  <tr>
  		<td><?php echo $comments['id'] ?></td>
      <td><?php echo $comments['news']?></td>
     <td><?php echo $comments['auteur'] ?></td>
     <td><?php echo $comments['date']->format('d/m/Y à H\hi') ?></td>
     <td><?php echo ($comments['date'] == $comments['date'] ? '-' : 'le '.$comments['date']->format('d/m/Y à H\hi')) ?></td>
     <td><?php echo '<a href="comment-update-', $comments['id'], '.html"><i class="fas fa-edit"></i></a> <a href="comment-delete-',
        $comments['id'], '.html"><i class="fas fa-trash"></i></a> '?></td>
      <td>
      <?php 
        if($comments->report() == '1'){
          echo '<i class="fas fa-flag redflag"></i>';
        }
       else{
        echo '<i class="fas fa-times"></i>';
       } ?></td>    
</tr>
<?php }
?>
</table>
