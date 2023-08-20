<?php 
ob_start();
?>
<!-- formulaire pour ajouter un nouveau realisateur -->
 <form class="formulaire_realisateur" action="/sql-cinema/index.php?action=NvRealisateur" method="post" enctype="multipart/form-data">
    <p>
        <label> 
            Nom du realisateur 
            <input class='input_acteur' type="text" name="name_realisateur" required>
        </label>
    </p>
    <p>
        <label>
            Prenom du realisateur 
            <input class='input_acteur' type="text" name="prenom_realisateur" required>
        </lavel>
    </p>
    
    <p>
        <label >
            Date de naissance 
            <input class='input_acteur' type="date" name="naissance_realisateur" required>
        </label>
    </p>
    <p>
        <label>
            Photo du realisateur
            <input class='input_acteur' type="file" name="image_realisateur" required>
        </label>
    </p>
    <p>
        <label>
            Sexe
            <select class='input_acteur' name="sexe_realisateur" required>
                <option value="female">Femme</option>
                <option value="male">Homme</option>
            </select>
        </label>
    </p>
    <p>
        <input id="realisateur_submit" class="boutton_film" type="submit" name="submit" value="Submit !">
    </p>
    
 </form>
        
<?php
$title="Nouveau Réalisateur";
$titre_secondaire="Creation d'un nouveau réalisateur";
$contenu = ob_get_clean();
require_once('template.php');