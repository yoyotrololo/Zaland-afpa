
    <div class="col-md-6 offset-md-3 shadow p-3 mb-5 bg-white ">
        <div id="titre_gestion"><h2>Gestion de compte</h2></div>
        <form class="bootstrap-iso" id="form_maj">
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
                        <input class="form-control has-error" name="prenom" id="prenom" placeholder="Prenom" type="text" />
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
                    <h5>Mot de passe :</h5>
                    <div class="form-group input-group">
                        <div class="input-group-addon">
                            <i class="fab fa-expeditedssl"></i>
                        </div>
                        <input class="form-control has-error" name="pass" id="pass" type="password" />
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
                        <select class="form-control has-error" name="genre" id="genre" type="text">
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
                        <input class="form-control has-error" name="CP" id="CP" placeholder="Postal" type="text" />
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
            <br>
    
            <button class="btn btn-primary" id="btn_maj" type="button" value="Mettre à jour">Mettre à jour</button><br><br>
            <button class="btn btn-primary" type='button' id='btn_sup' value="Supprimer compte">Supprimer compte</button>
            <p id="p_reponse"></p>
        </form>
    </div>

    <script>
        //REQUETE POUR METTRE A JOUR LES INFOS
        $(document).ready(function() {
            $("#btn_maj").click(function() {
                var json = {
                    "champModif": [],
                    "nouvellesValeurs": []
                };; //préparation du json
                var allInputs = $("#form_maj > div > div > div > input"); // récupération de tous les inputs
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
                console.log(jsonString);
                var requete = $.post('back/gestion_compte.php', {
                        json: jsonString, //envoi du json
                        routeur: 'update' //envoi du routeur
                    })
                    .always(function() {
                        console.log(requete.responseText);
                        $('#p_reponse').text(requete.responseText);
                    });
            });
        });
        // REQUETE POUR SUPPRIMER COMPTE
        $(document).ready(function() {
            $('#btn_sup').click(function() {
                var requete = $.post('back/gestion_compte.php', {
                        routeur: 'delete' //envoi du routeur
                    })
                    .always(function() {
                        $('#p_reponse').text(requete.responseText);
                    });
            });
        });

    </script>
