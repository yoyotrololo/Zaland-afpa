<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="./css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="./css/style.css"> <!-- Resource style -->


</head>

<body>


    <main class="cd-main-content">
        <div class="cd-tab-filter-wrapper">
            <div class="cd-tab-filter">
                <ul class="cd-filters">
                    <li class="filter"><a class="btn_genre" id="All" name="All" href="#All" data-type="all">Tous les articles</a></li>
                    <li class="filter" data-filter=".color-1"><a name="Femme" id="Femme" class="btn_genre" href="#Femme" data-type="color-1">Femme</a></li>
                    <li class="filter" data-filter=".color-2"><a name="Homme" id="Homme" class="btn_genre" href="#Homme" data-type="color-2">Homme</a></li>
                </ul> <!-- cd-filters -->

            </div> <!-- cd-tab-filter -->
        </div>
        <div class="cd-gallery">
            <ul id="articles">
                <!--<li class="mix color-1 check1 radio2 option3"><img src="img/img-1.jpg" alt="Image 1"></li>-->
            </ul>
        </div><!-- cd-tab-filter-wrapper -->

    </main>
</body>

<script>
    $(document).ready(function() {
                var requete = $.get("http://localhost/zaland-afpa/back/filtres.php")
                    .always(function() {
                        var json = JSON.parse(requete.responseText);
                        //console.log(json);
                        $(json).each(function(i) {
                            var article = json[i];
                            var li_article = document.createElement('li');
                            var balise_img = document.createElement('img');
                            var url_img = "./img/" + article.lien_image;
                            balise_img.setAttribute('src', url_img);
                            li_article.setAttribute('class', 'mix color-1 check1 radio2 option3');
                            $(li_article).append(balise_img);
                            $('#articles').append(li_article);
                        })
                    })



                $(".btn_genre").click(function() {
                                    /*var target = $(event.target);
                                    
                        			$('.cd-tab-filter .selected').removeClass('selected');
                        			target.addClass('selected');*/
                                    

                        console.log($(this));
                        //$(this).addClass('selected');
                        $('#articles').empty();
                        var genre = this.id;
                        var requete = $.get("http://localhost/zaland-afpa/back/filtres.php", {
                                genre: genre
                            })
                            .always(function() {
                                    var json = JSON.parse(requete.responseText);
                                    //console.log(json);
                                    $(json).each(function(i) {
                                            var article = json[i];
                                            var li_article = document.createElement('li');
                                            var balise_img = document.createElement('img');
                                            var url_img = "./img/" + article.lien_image;
                                            balise_img.setAttribute('src', url_img);
                                            li_article.setAttribute('class', 'mix color-1 check1 radio2 option3');
                                            $(li_article).append(balise_img);
                                            $('#articles').append(li_article);
                                          
                                
                                            var nom = article.nom;
                                            var prix = article.prix;
                                        
                                            $(li_article).append(nom);
                                            $(li_article).append(prix);
                                                                                      
                                            $(nom).hide();
                                            $(prix).hide();
                                           
                                           $(li_article).mousedown(function() {
                                                $(nom).show();
                                                $(prix).show();
                                            });
                                            $(li_article).mouseup(function(){
                                                $(nom).hide();
                                                $(prix).hide();
                                               
                                            })
                                        
                                           
                                          /*  $(li_article).hover(function() {
                                                   $(this).append(nom);
                                                   $(this).append(prix);
                                                })
                                         */
                                            })
                                    })
                            })
                })

</script>
