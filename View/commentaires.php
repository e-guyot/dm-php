<table class="table">
    <thead>
        <tr>
            <th scope="col">pseudo</th>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($commentaires as $commentaire) { ?>  
            <tr>
                <th><?= $commentaire['pseudo']; ?></th>
                <td><?= $commentaire['titre'] ?></td>
                <td><?= $commentaire['libelle'] ?></td>
                <td><a class="btn btn-primary" href="<?=$route?>modifier?id=<?= $commentaire['id'];?>" role="button">Modifier</a></td>
                <td><a class="btn btn-primary" href="<?=$route?>supprimer?id=<?= $commentaire['id'];?>" role="button">Supprimer</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>