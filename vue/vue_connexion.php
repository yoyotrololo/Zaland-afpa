<div class="modal fade" id="panel_connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="connexion">
            <div class="modal-header">
                <h2>Connexion</h2>
            </div>
            <div class="modal-body">
                <form method="" action="">
                    <div class="form-row">
                        <label for="recipient-name" class="col-form-label">E-mail : </label>
                        <input class="form-control has-error" id="mail" name="mail" placeholder="Email" type="mail" />
                    </div>
                    <div class="form-row">
                        <label for="recipient-name" class="col-form-label">Mot de passe : </label>
                        <input class="form-control has-error" id="pass" name="pass" type="password" />
                    </div>
                    <br>
                    <p id="p_erreurCo"></p>
                    <input type="button" id="btn_connexion" value="Connexion" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" id="inscription">S'inscrire</a> / <a>Mot de passe oublié</a>

            </div>
        </div>
        <div class="modal-content" id="form_inscription">
            <div class="modal-header">
                <h2>Inscription</h2>
            </div>
            <div class="modal-body">

                <form class="bootstrap-iso" name="formulaire">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Nom :</h5>
                            <div class="form-group input-group ">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input class="form-control has-error" id="nom" name="nom" placeholder="Nom" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Prenom :</h5>
                            <div class="form-group input-group">
                                <div class="input-group-addon">
                                    <i class="far fa-user"></i>
                                </div>
                                <input class="form-control has-error" id="prenom" name="prenom" placeholder="Prenom" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Genre :</h5>
                            <div class="form-group input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-transgender"></i>
                                </div>
                                <select class="form-control has-error" id="genre" name="genre" type="text">
                                    <option>HOMME</option>
                                    <option>FEMME</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Date de naissance :</h5>
                            <div class="form-group input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-birthday-cake"></i>
                                </div>
                                <input class="form-control has-error" id="dateNaissance" name="dateNaissance" type="date" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h5>Numéro Rue :</h5>
                            <div class="form-group input-group ">
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <input class="form-control has-error" name="numRue" id="numRue" placeholder="Numéro" type="text" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h5>Adresse :</h5>
                            <div class="form-group input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <input class="form-control has-error" name="nomRue" id="nomRue" placeholder="Adresse" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h5>Code postal :</h5>
                            <div class="form-group input-group ">
                                <div class="input-group-addon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <input class="form-control has-error" name="CP" id="CP"  placeholder="Postal" type="text" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h5>Ville :</h5>
                            <div class="form-group input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <input class="form-control has-error" name="ville" id="ville" placeholder="Ville" type="text" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h5>Pays :</h5>
                            <div class="form-group input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <input class="form-control has-error" name="pays" id="pays" placeholder="Pays" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5> E-mail :</h5>
                            <div class="form-group input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                <input class="form-control has-error" name="mail" id="mail" placeholder="E-mail" type="email" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5> Mot de passe :</h5>
                            <div class="form-group input-group">
                                <div class="input-group-addon">
                                    <i class="fab fa-expeditedssl"></i>
                                </div>
                                <input class="form-control has-error" name="pass" id="pass" placeholder="Mot de passe" type="password" />
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary" id="btn_inscription" type="button" value="Inscription">
                </form>
                <p id="reponse_inscri"></p>
            </div>
            <div class="modal-footer">
                <a href="#" id="inscription">S'inscrire</a> / <a>Mot de passe oublié</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("form_inscription").style.display = 'none';
    $("#inscription").click(function() {
        var inscription = document.getElementById("connexion");
        while (inscription.firstChild) {
            inscription.removeChild(inscription.firstChild);
        }
        document.getElementById("form_inscription").style.display = 'block';
    })


    $(document).ready(function() {

        $('#btn_inscription').click(function() {
            var requete = $.post('back/inscription.php', {
                    nom: $('#nom').val(),
                    prenom: $('#prenom').val(),
                    numRue: $('#numRue').val(),
                    nomRue: $('#nomRue').val(),
                    CP: $('#CP').val(),
                    ville: $('#ville').val(),
                    pays: $('#pays').val(),
                    mail: $('#mail').val(),
                    pass: $('#pass').val(),
                    genre: $('#genre').val(),
                    dateNaissance: $('#dateNaissance').val()
                })
                .always(function() {
                     reponse = requete.responseText;          
                     if (reponse == "Un compte existe déjà avec cet email") {
                        $('#reponse_inscri').text('Un compte existe déjà avec cet email');
                     } else { 
                       $('#reponse_inscri').text('Votre compte a bien été créé'); }
                })
        });

        $('#btn_connexion').click(function() {
            var requete = $.post('back/connexion.php', {
                    mail: $('#mail').val(),
                    pass: $('#pass').val()
                })
                .always(function() {
                    reponse = requete.responseText;
                    if (reponse == 'Mauvais identifiant ou mot de passe !') {
                        $('#p_erreurCo').text('Mauvais identifiant ou mot de passe !');
                    } else {
                        location.reload();
                    }
                });
        });

    })

</script>
