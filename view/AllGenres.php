<?php 
    ob_start();
    session_start();
    ?>
    <div id="parallax_bloc">
        <div id="parallax_background"></div>
            <div id="TextAndBtn_parallax">
                <div class="titre_page"><h2>GENRES</h2><h2 class="point_rouge">.</h2></div>
                <p>RETROUVER VOS GENRES FAVORIS !</p>
            </div>
    </div> 
    <h2 class="soustitre2_homepage">Tout Les genres Genres</h2>


<div class="genres_populaires">
    <?php foreach($requete->fetchAll() as $genre) { ?>
        <a class="role_nom" href="/sql-cinema/index.php?action=infoGenre&id=<?php echo $genre["id_genre"] ?>">
        <?php echo $genre["libelle"]?></a>   
    <?php } ?> 
</div>











 </main> 

<?php
$title="Liste des genres";
$titre_secondaire="Tout les genres";
$contenu = ob_get_clean();
require_once('template.php');