<?php 
ob_start();
?>
<!-- affiche un formulaire pour ajouter un nouveau genre avec les differents films qui sont de ce genre -->
 <form class="formulaire_genre" action="/sql-cinema/index.php?action=NvGenre" method="post" >
    <p>
        <label> 
            Libellé du genre 
            <input id="libelle_genre" class='input_role' type="text" name="libelle" required>
        </label>
    </p>
    <p class='p_flex'>
        <label>
            films qui sont de ce genre 
        </label>
            <select id='multi_champ' class='input_role' name="films[]" multiple>
                <option value="">None</option>
            <?php foreach ($requete->fetchAll() as $film) { ?>
                <option value="<?=$film['titre_film']?>"> <?= $film["titre_film"] ?> </option>
            <?php }?>
            </select>
        
    </p>
    <p>
        <input id ="genre-submit" class="boutton_film" type="submit" name="submit" value="Ajouter le Genre">
    </p>

<?php
$title="Nouveau genre";
$titre_secondaire="Creation d'un nouveau genre";
$contenu = ob_get_clean();
require_once('template.php');