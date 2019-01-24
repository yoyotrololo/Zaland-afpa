<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="?page=accueil"><i class="fa fa-home" style="font-size:35px;"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" style="font-size:1.5em; color:white;" href="?page=homme">Homme | <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-size:1.5em; color: white;" href="?page=femme">Femme</a>
            </li>
        </ul>
        <nav class="navbar navbar-light bg-dark">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:white;"><span class="fa fa-search"></span></button>
        </form>
        </nav>    
    </div>
</nav>


<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "";
}
?>