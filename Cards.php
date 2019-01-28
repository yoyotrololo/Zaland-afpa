

<?php
try
{
	$bdd = new PDO('mysql:host=172.14.140.8;dbname=Zalandafpa;charset=utf8', 'Justin', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>


<div class="card-group">
    <div class="row">
        <div class="col-sm-4">
  <div class="card">
    <img src="./img/chemise_bleue.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Chemise Bleue Homme</h5>
      <p class="card-text">Description produit</p>
        <a href="#" class="btn btn-primary">Voir article</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
            </div>
  </div>
        
        <div class="col-sm-4">
  <div class="card">
    <img src="./img/chemise_jean.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Chemise en Jeans</h5>
      <p class="card-text">Description produit</p>
        <a href="#" class="btn btn-primary">Voir article</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
      </div>
  </div>
        <div class="col-sm-4">
  <div class="card">
    <img src="./img/pantalon.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pantalon</h5>
      <p class="card-text">Description produit</p>
        <a href="#" class="btn btn-primary">Voir article</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
</div>
