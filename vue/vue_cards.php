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
<div class="container-fluid" style="padding-right: 0px; padding-left:0px;">
   
    <h2>Notre sélection Homme</h2>
</div>

<div class="row" id="cards">
<div class="card-group">
    
        <div class="card">
            <img src="./img/chemise_bleue.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chemise Bleue - Homme</h5>
                <p class="card-text">Description produit</p>
                <a href="#" class="btn btn-primary">Voir article</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="./img/chemise_jeans.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chemise Jeans - Homme</h5>
                <p class="card-text">Description produit</p>
                <a href="#" class="btn btn-primary">Voir article</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="./img/pantalon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pantalon - Homme</h5>
                <p class="card-text">Description produit</p>
                <a href="#" class="btn btn-primary">Voir article</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
