<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/x-icon" href="https://www.we-ark.fr/wp-content/uploads/2020/03/cesi_logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>    
    <script src = "assets/vendors/fontawesome/js/all.js"></script> 
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <title>CESI BDE</title>
    
</head>
    <nav id="navbar" style="width: 100%; z-index: 9999999;">
        <img src="images/logo_cesi.png" alt="logo cesi_bde">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        
        <ul>
            <li><a href="">Accueil</a></li>
            <li><a href="">Evenements</a></li>
            <li><a href="Boutique">boutique</a></li>  
            <li><a href="boiteidée">Boîte à idées</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="welcome" ><i class= "fas fa-user-circle"></i></a></li>

        </ul>
    </nav>


<header >
        
    <h1>BIENVENUE SUR CESI BDE</h1>
    <h5>La plateforme dédiée à l'épanouissement des étudiants</h5>
    <div class="row-1">
    <a href=""><h4>EN SAVOIR PLUS</h4> </a>
    <a href=""> <h6>CONNECTEZ-VOUS</h6></a>
    </div>
   
       
</header>

<body>
<main>
    <section class="featured">
        <div class="container">
            <div class="row-2">
                <div class="col-5"><h2>Evènements</h2></div>
                <div class="col-5"><h2>Boutique</h2></div>
                <div class="col-5"><h2>Activités</h2></div>
            </div>

            <div class="row">    
                <div class="col-4">
                    <img src="images/ag.png">
                    <h3>nous organisons de nombreux évènements tout aussi distrayant qu'intéressant</h3>
                    <a href=""><h4>EN SAVOIR PLUS</h4> </a>
                </div>
                <div class="col-4">
                    <img src="images/bt.png">
                    <h3>nous disposons d'une boutique en ligne pour la vente des produits commestibles</h3>
                    <a href="Boutique"><h4>EN SAVOIR PLUS</h4> </a>
                </div>
                <div class="col-4">
                    <img src="images/ac.png">
                    <h3>nous promouvons de nombreuses activités toutes ausssi sportives qu'intéllectuelles grace à nos différents clubs</h3>
                    <a href=""><h4>EN SAVOIR PLUS</h4> </a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-2">
        <h2>A PROPOS</h2>

        <div class="row-2">
            <div class="col-5"><img src="images/ic.png"></div>
            <div class="col-5"><img src="images/ic.png"></div>
            <div class="col-5"><img src="images/ic.png"></div>
        </div>

        <h2>MEMBRES DU BDE</h2>

    </section>

</main>
    
     
    
    
    <section>
        <footer>
            <h1>Nos objectifs</h1>
            <div class="services">
                <div class="service">
                    
                    <p>Réseau de campus d'enseignement supérieur et de formation professionnelle, CESI poursuit sa mission
                        en permettant à des apprentis salariés et étudiants de devenir acteurs des transformations des entreprises et 
                        de la société, grace à son école d'ingénieu, son école supérieur de l'alternace,son école de formation
                        des managers et son activité de certification.</p>
                </div>
                <div class="service">
                    <h3>politique</h3>
                    <p>.</p>
                </div>
                <div class="service">
                    <ul>
                        <li class="face"><i class="fab fa-facebook"></i>  BDE</li>
                        <li class="mail"><i class="fab fa-youtube"></i>  BDE channel</li>
                        <li class="phone"><i class="fa fa-envelope"></i>  BDE@gmail.com</li>
                        <li class="insta"><i class="fab fa-instagram"></i>  BDE</li>
                        <li class="phone"><i class="fa fa-phone"></i>  +33 456 2154</li>
                        <li class="phone"><i class="fab fa-twitter"></i>  BDE</li>
                    </ul>
                </div>
            </div>
            <p id="Contact">engagement et diversité   Mentions légales</p>

        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
			window.onload = function(){
 				let departScroll = window.pageYOffset;
				window.onscroll = function() {
			        let currentScrollpos = window.pageYOffset;
					console.log(departScroll + '<---->' + currentScrollpos);
					if (departScroll > currentScrollpos) {
						document.getElementById("navbar").style.position = "fixed"; 
						document.getElementById("navbar").style.display = ""; 
						document.getElementById("navbar").style.transform = "";
					}
					else {
						//document.getElementById("navbar").style.display = "none";
						document.getElementById("navbar").style.transform = "translateY(-500px)";
					}
					departScroll = currentScrollpos;
			}


		}
	</script>
    </section>
</body>
</html>
