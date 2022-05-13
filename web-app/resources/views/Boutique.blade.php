<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stle-->
    <link rel="stylesheet" href="{{asset('css/styleboutique.css')}}">
    <!--Jquery-->
    <script src = "{{asset('jquery/jquery-3.6.0.min.js')}}"></script>    
    <!--Fontawesome-->
    <link rel = "stylesheet" href = "{{asset('fontawesome/css/all.css')}}">
    <!--Bootstrap-->
    <script src = "{{asset('bootstrap/css/bootstrap.min.css')}}"></script>    
    
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
    
    <title>CESI BDE</title>
    
            
    
</head>
<header class="navbar">
<nav id="navbar">
    <a href="accueil">  <img src="../images/logo_cesi.png" alt="logo cesi_bde"></a>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    
    <ul>
        <li><form> 
            <input type="text" name="text" class="search" placeholder="Recherche...">
            
          </form> </li>
        <li><a href="accueil">Home</a></li>
        <li><a href="activity">Events</a></li>
        <li><a href="Boutique">Shop</a></li>  
        <li><a href="boiteidée">Idea box</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="users/add" ><i class= "fas fa-user-circle"></i></a></li>

    </ul>
   
    
</nav>


</header>
<body>
 

    <section>
       
        <div class="container">   
            
        <div class="row">
            <div class="col-2">
                    <h1> Welcome to the shop of CESI BDE</h1>
                    <p>Lets promote our school </p>
                    <a href="Boutique/catalogue">Catalog &#10141;<!--il s'agit d'un html entities qui a servit à mettre une flèche--></a>
                </div>
            <div class="col-2">
                <img src="images/Image1.png" alt="image1">
                </div>
            </div>
        </div> 
     
    </section>
    
     
    
    
    <section>
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Ventes</a></li>
                                <li><a href="#">Commande</a></li>
                                <li><a href="#">paiements</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item" id="#about">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>CIRCLE SHOP</h3>
                            <p>Vente de produits et d'accessoires de qualité visant à promouvoir la culture vestimentaire Américaine.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Company Name © 2018</p>
                </div>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </section>
</body>
</html>
