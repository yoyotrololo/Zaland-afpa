<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Connexion</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form  method="post" enctype="text/plain" name="formulaire" onSubmit="return valider();">
          <div class="form-row">
          
                  <div class="form-group col-sm-6 offset-sm-3">
        <label for="recipient-name" class="col-form-label">E-mail:</label>
            <input type="mail" class="form-control" id="email" name="mail">
          </div>
            </div>
              <div class="form-row">
                  <div class="form-group col-sm-6 offset-sm-3">
            <label for="recipient-name" class="col-form-label">Mot de passe:</label>
            <input type="password" class="form-control" id="pass" name="pass">
          </div>
            </div>
            <div class="form-group offset-sm-4">
             <button type="button" class="btn btn-primary" >Connexion</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
       
      </div>
    </div>
  </div>
</div>
        

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fa fa-home" style="font-size:35px;"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" style="font-size:1.5em;" href="#">Homme <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-size:1.5em;" href="#">Femme</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="fa fa-search"></span></button>
    </form>
  </div>
</nav>

