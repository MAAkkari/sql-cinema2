<?php 
ob_start();
session_start();
$film=$requete->fetchAll();
?>
<main> 
<!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <a href="index.php?action=infoFilm&id=22"><img src="/sql-cinema/public/img/joker.png" style="width:100%"></a>
      <div class="text">Joker 2019</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <a href="index.php?action=infoFilm&id=1"><img src="/sql-cinema/public/img/oppenheimerHozitontal.jpg" style="width:100%"></a>
      <div class="text">Oppenheimer 2023</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <a href="index.php?action=infoFilm&id=2"><img src="/sql-cinema/public/img/barbieHorizontal.avif" style="width:100%"></a>
      <div class="text">Barbie 2023</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div class="carousel_btn"style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>


  <!-- second carousel  -->
  <h2 class="soustitre_homepage">Derniers Sorties</h2>
  <div class="containerCaousel2">
      <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"> </i>
          <div class="carousel2">
              <?php foreach($film as $element){ ?> 
                  <a href="index.php?action=infoFilm&id=<?= $element['id_film'] ?>"><img src="<?=$element['affiche']?>" alt="affiche de <?=$element['titre_film']?>" draggable="false"></a>
              <?php } ?>
          </div>
        <i id="right" class="fa-solid fa-angle-right"> </i>
      </div>
  </div>

  <h2 class="soustitre2_homepage">Genres Populaires</h2>


  <div class="genres_populaires">
      <?php foreach($requete2->fetchAll() as $genre) { ?>
      <a href="/sql-cinema/index.php?action=infoGenre&id=<?php echo $genre["id_genre"] ?>"><?= $genre["libelle"] ?></a>
      <?php } ?> 
  </div>

</main>

<?php
$title="Accueil";
$titre_secondaire="";
$contenu = ob_get_clean();
require_once('template.php');