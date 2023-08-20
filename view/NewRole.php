<?php 
ob_start();
?>
<!-- affiche un formulaire pour ajouter un nouveau role avec les differents acteurs qui ont jouer ce role dans un film -->
<form class="formulaire_role" action="/sql-cinema/index.php?action=NvRole" method="post"  method="post">
<p>
    <label>Nom du role </label>
    <input class='input_role' type="text" name="nom_role" >
</p>
<?php 
    $acteurs=$requete2->fetchAll() ;
    $films=$requete1->fetchAll() 
?>
<div id="film_actor_selector">
    <p class="film_actor_line">
        <label>
            l'acteur
        </label>
        <select id='input_role1' class='input_role' name="acteurs_role[]" >
            <option value="">None</option>
            <?php foreach ($acteurs as $acteur) { ?>
                <option value="<?=$acteur['nom_complet']?>"> <?= $acteur["nom_complet"] ?> </option>
            <?php }?>
        </select> 
    a jouer ce role dans le film 
        <select class='input_role' name="films_role[]" >
            <option value="">None</option>
            <?php foreach ($films as $film) { ?>
                <option value="<?=$film['titre_film']?>"> <?= $film["titre_film"] ?> </option>
            <?php }?>
        </select>     
    </p>
</div>
<input id ="actor-submit"class="boutton_film" type="submit" value="submit">

</form>

<button id="film_actor_button1" >+</button>

<script>
    const div = document.getElementById("film_actor_selector")
    const ligne_ajout = document.querySelector(".film_actor_line")
    const bouton_nv_ligne = document.querySelector("#film_actor_button1")

bouton_nv_ligne.addEventListener("click" , function() {
    const new_ligne_ajout = ligne_ajout.cloneNode(true)
    film_actor_selector.appendChild(new_ligne_ajout)
    }) ;
</script>
<?php
$title="Nouveau Role";
$titre_secondaire="Creation d'un nouveau Role";
$contenu = ob_get_clean();
require_once('template.php');