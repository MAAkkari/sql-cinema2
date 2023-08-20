<?php 
ob_start();
?>
<!-- affiche un formulaire qui permet de crée un nouvel acteur et de selectionner les roles qu'il a jouer dans differents films -->
<form class="formulaire_acteur" action="/sql-cinema/index.php?action=NvActeur" method="post" enctype="multipart/form-data">
    <p>
        <label> 
            Nom de l'acteur
            <input class='input_acteur' type="text" name="name_acteur" required>
        </label>
    </p>
    <p>
        <label>
            Prenom du acteur 
            <input class='input_acteur' type="text" name="prenom_acteur" required>
        </lavel>
    </p>
    <p>
        <label>
            Sexe
            <select class='input_acteur' name="sexe_acteur" required>
                <option value="female">Femme</option>
                <option value="male">Homme</option>
            </select>
        </label>
    </p>
    <p>
        <label >
            Date de naissance 
            <input class='input_acteur' type="date" name="naissance_acteur" required>
        </label>
    </p>
    <p>
        <label> Photo de l'acteur
            <input class='input_acteur' type="file" name="image_acteur" required>
        </label>
    </p>
    <?php 
    $films=$requete1->fetchAll() ;
    $roles=$requete2->fetchAll() 
    ?>
    <div id="film_actor_selector">
        <p class="film_actor_line">
            <label>
                cet acteur a jouer
            </label>
            <select class='input_acteur' name="roles_acteur[]" >
                <option value="">None</option>
                <?php foreach ($roles as $role) { ?>
                    <option value="<?=$role['nom_role']?>"> <?= $role["nom_role"] ?> </option>
                <?php }?>
            </select> 
        dans le film
            <select class='input_acteur' name="films_acteur[]" >
                <option value="">None</option>
                <?php foreach ($films as $film) { ?>
                    <option value="<?=$film['titre_film']?>"> <?= $film["titre_film"] ?> </option>
                <?php }?>
            </select>     
        </p>
        <button type="button" class='acteur+' id="film_actor_button2"  >+</button>
    </div>
   
    <p>
        <input id="submit_acteur" class="boutton_film" type="submit" name="submit" value="Submit !">
    </p>
</form>



<script>
    const div = document.getElementById("film_actor_selector")
    const ligne_ajout = document.querySelector(".film_actor_line")
    const bouton_nv_ligne = document.querySelector("#film_actor_button2")

bouton_nv_ligne.addEventListener("click" , function() {
    const new_ligne_ajout = ligne_ajout.cloneNode(true)
    film_actor_selector.appendChild(new_ligne_ajout)
    }) ;
</script>

<?php
$title="Nouvel Acteur";
$titre_secondaire="Creation d'un nouvel Acteur";
$contenu = ob_get_clean();
require_once('template.php');