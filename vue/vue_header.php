<link rel="stylesheet" type="text/css" href="./css/main_css.css">
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-sm-2 "></div>
            <div class="col-sm-8">
                <h1>Zaland'Afpa</h1>
            </div>
            <?php  
          
            if(isset($_SESSION['connexion'])){
            ?>
            <div class="col-sm-2">
                <nav class="navbar navbar-expand-lg ">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <div class="form-group input-group ">
                                    <div class="input-group-addon">
                                        <a class="nav-link fa fa-user " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:30px"></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="?page=vue_gestion">Gestion compte</a>
                                            <a class="dropdown-item" href="#">Mes commandes</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <div class="form-group input-group ">
                                    <div class="input-group-addon">
                                        <a class="nav-link fa fa-shopping-basket " href="?page=vue_panier"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:32px"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <div class="form-group input-group ">
                                    <div class="input-group-addon">
                                        <a class="nav-link fa fa-power-off" alt="se déconnecter" href="#" id="btn_deconnexion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:32px"></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <?php
            } else {
            ?>

            <div class="col-sm-2">
                <button id="bouton" type="button" class="btn btn-dark" data-toggle="modal" data-target="#panel_connexion" data-whatever="@mdo">Connexion/S'inscrire</button>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php
    include('./vue/vue_connexion.php');
    ?>
</header>

<script>

    $(document).ready(function(){
        $('#btn_deconnexion').click(function() {
            var requete = $.get('back/deconnexion.php', function() {
            })
            .always(function() {
                location.reload();
            });
        });
    });

</script>