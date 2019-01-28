<!-- <div class="container-fluid" id="slide">
    <div id="block">
        <div class="row">
            <div class="col-sm-4"></div>
                <div class="col-sm-4" id='slider'>
                    <figure>
                        <img src="img/homme1.jpg" alt="Homme1">
                        <img src="img/homme2.jpg" alt="Homme2">
                        <img src="img/homme3.jpg" alt="Homme3">
                        <img src="img/femme1.jpg" alt="Femme1">
                        <img src="img/femme2.jpg" alt="Femme2">
                    </figure>
                </div>
        </div>
    </div>
</div>  -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="row">
        <div class="col-sm-3"></div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" class="col-sm-2">
      <img src="./img/chemise_bleue.jpg" class="d-block w-25" alt="...">
        
    </div>
    <div class="carousel-item" class="col-sm-2">
      <img src="./img/chemise_jean.jpg" class="d-block w-25" alt="...">
    </div>
    <div class="carousel-item" class="col-sm-2">
      <img src="./img/pantalon.jpg" class="d-block w-25" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>


<?php
include ('./vue/vue_cards.php');
?>