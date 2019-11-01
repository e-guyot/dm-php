<form action="/dm_php2/<?= $param;?>" method="post">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre" name="titre" value="<?= $titre;?>">
  </div>
  <div class="form-group">
      <label for="libelle">Texte</label>
    <textarea class="form-control" id="libelle" name="libelle" rows="3"><?= $text;?></textarea>
  </div>
    <input type="hidden" name="id_commentaire" value="<?= $id_commentaire;?>">
    <button type="submit" class="btn btn-primary"><?= $textButton;?></button>
</form>