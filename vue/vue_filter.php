
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
				
					<li class="filter"><a class="selected" href="#0" data-type="all">Tous les articles</a></li>
					<li class="filter" data-filter=".color-1"><a name="Femme" id="Femme" class="btn_genre" href="#Femme" data-type="color-1">Femme</a></li>
					<li class="filter" data-filter=".color-2"><a name="Homme" id="Homme" class="btn_genre" href="#Homme" data-type="color-2">Homme</a></li>
				</ul> <!-- cd-filters -->
                <section class="cd-gallery">
			<ul>
				<li class="mix color-1 check1 radio2 option3"><img src="img/img-1.jpg" alt="Image 1"></li>
                    </ul>
                </section>
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

    </main>
</body>

<script>
    
    $(document).ready(function() {
        $(".btn_genre").click(function() {
            var genre = this.id;
            var requete = $.get("http://localhost/zaland-afpa/back/filtres.php", { 
                genre: genre   })
            .always(function() {
                    var json =  JSON.parse(requete.responseText);
                    //console.log(json);
                    $(json).each(function(i){
                        var article = json[i];
                        var balise_img = document.createElement('img');
                        var url_img = "./" + article.lien_image;
                        balise_img.setAttribute('src', url_img);
                        
                        
                        console.log(balise_img);
                        console.log(json[i]);
                    })
                
                
                
                
                
                
                
                
            })
            /*var req = $.ajax({
                method : "GET",
                url : "http://localhost/zaland-afpa/back/filtres.php",
                data : { genre : genre }
            })
            .always(function(response) {
                console.log(response);
            });*/
        })    
    })

</script>