
    <div class="col-md-6 offset-md-3 shadow p-3 mb-5 bg-white ">
        <div id="titre_gestion"><h2>Gestion de compte</h2></div>
        <form method="post" action="inscription.php" class="bootstrap-iso" id="form" name="formulaire">
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
                        <input class="form-control has-error" name="prenom" placeholder="Prenom" type="text" />
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
                        <input class="form-control has-error" name="mail" placeholder="E-mail" type="email" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h5>Mot de passe :</h5>
                    <div class="form-group input-group">
                        <div class="input-group-addon">
                            <i class="fab fa-expeditedssl"></i>
                        </div>
                        <input class="form-control has-error" name="pass" type="password" />
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
                        <select class="form-control has-error" name="genre" type="text">
                            <option>HOMME</option>
                            <option>FEMME</option>
                        </select>
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
                        <input class="form-control has-error" name="numRue" placeholder="Numéro" type="text" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <h5>Adresse :</h5>
                    <div class="form-group input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <input class="form-control has-error" name="nomRue" placeholder="Adresse" type="text" />
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
                        <input class="form-control has-error" name="CP" placeholder="Postal" type="text" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <h5>Ville :</h5>
                    <div class="form-group input-group">
                        <div class="input-group-addon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <input class="form-control has-error" name="ville" placeholder="Ville" type="text" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <h5>Pays :</h5>
                    <div class="form-group input-group">
                        <div class="input-group-addon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <input class="form-control has-error" name="pays" placeholder="Pays" type="text" />
                    </div>
                </div>
            </div>
            <br>
    
            <input class="btn btn-primary" id="btn_maj" type="button" value="Mettre à jour"><br><br>
            <input class="btn btn-primary" type='button' id='btn_sup' value="Supprimer compte">
            <p id="p_reponse"></p>
        </form>
    </div>










    <!-- ATTENTION : l'attribut 'name' de chaque input doit correspondre exactement aux noms de champs de la table 'clients' -->
<!--
    <div id="div_contenu">
        <form action='' method='' id="form_maj">
            <input type='text' name='prenom' placeholder="prenom" id="prenom">
            <input type='text' name='nom' placeholder="nom" id="nom">
            <input type='text' name='genre' placeholder="genre" id="genre">
            <input type='text' name='ville' placeholder="ville" id="ville">
            <input type='text' name='pays' placeholder="pays" id="pays">
            <input type='text' name='CP' placeholder="CP" id="CP">
            <button type='button' id='btn_maj'>Mettre à jour</button>
        </form>
        <p id="p_reponse">Réponse du PHP</p>
        <button type='button' id='btn_sup'>Supprimer compte</button>
    </div>
-->

    <script>
        //REQUETE POUR METTRE A JOUR LES INFOS
        $(document).ready(function() {
            $("#btn_maj").click(function() {
                var json = {
                    "champModif": [],
                    "nouvellesValeurs": []
                };; //préparation du json
                var allInputs = $("#form_maj > input"); // récupération de tous les inputs
                var num = 0;
                for (i = 0; i < allInputs.length; i++) {
                    if ($(allInputs[i]).val() != '') { // pour éviter de rentrer dans le json des champs vides
                        json["champModif"][num] = $(allInputs[i]).attr('name'); //entrer 
                        json["nouvellesValeurs"][num] = $(allInputs[i]).val();
                        num++;
                    }
                }
                jsonString = JSON.stringify(json);
                jsonString = "[" + jsonString + "]"; // pour que le json soit lisible parl e php
                var requete = $.post('gestion_compte.php', {
                        json: jsonString, //envoi du json
                        routeur: 'update' //envoi du routeur
                    })
                    .always(function() {
                        $('#p_reponse').text(requete.responseText);
                    });
            });
        });
        // REQUETE POUR SUPPRIMER COMPTE
        $(document).ready(function() {
            $('#btn_sup').click(function() {
                var requete = $.post('gestion_compte.php', {
                        routeur: 'delete' //envoi du routeur
                    })
                    .always(function() {
                        $('#p_reponse').text(requete.responseText);
                    });
            });
        });

    </script>
