<?php foreach ($archivesCommentaires as $archive) { ?>
<div class="card">
    <div class="card-title"><?= $archive['titre'];?></div>
  <div class="card-body">
      Pseudo : <?= $archive['pseudo'];?><br>
      <?= $archive['libelle'];?>
  </div>
</div>
    
<?php echo''; //si les autres champ sont vides
}
?>