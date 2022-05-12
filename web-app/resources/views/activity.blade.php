<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/x-icon" href="https://www.we-ark.fr/wp-content/uploads/2020/03/cesi_logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style-->
    <link rel="stylesheet" href="{{asset('css/styleevenements.css')}}">   
    <!--Jquery-->
    <script src = "{{asset('jquery/jquery-3.6.0.min.js')}}"></script>    
    <!--Fontawesome-->
    <link rel = "stylesheet" href = "{{asset('fontawesome/css/all.css')}}">
    <!--Bootstrap-->
    <script src = "{{asset('bootstrap/css/bootstrap.min.css')}}"></script>    
    
    <script type="text/javascript">
        window.onload = function() {
            let departScroll = window.pageYOffset;
            window.onscroll = function() {
                let currentScrollpos = window.pageYOffset;
                console.log(departScroll + '<---->' + currentScrollpos);
                if (departScroll > currentScrollpos) {
                    document.getElementById("navbar").style.position = "fixed";
                    document.getElementById("navbar").style.display = "";
                    document.getElementById("navbar").style.transform = "";
                } else {
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
        <a href="Accueil.html"> <img src="../images/logo_cesi.png" alt="logo cesi_bde"></a>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>

        <ul>

        <li><a href="accueil">Accueil</a></li>
        <li><a href="activity">Evenements</a></li>
        <li><a href="Boutique">boutique</a></li>  
        <li><a href="boiteidée">Boîte à idées</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="users/add" ><i class= "fas fa-user-circle"></i></a></li>

        </ul>

    </nav>

</header>

<body>
<section>
      
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="../images/Techday.png" alt="Techday" style="width:100%;">
              <div class="carousel-caption">
                <h3><button class="button button1">READ MORE</button></h3>
                
              </div>
            </div>
      
            <div class="item">
              <img src="images/festifury.png" alt="festifury" style="width:100%;">
              <div class="carousel-caption">
                <h3><button class="button button1">READ MORE</button></h3>
                
              </div>
            </div>
          
            <div class="item">
              <img src="../images/lasergame.png" alt="lasergame" style="width:100%;">
              <div class="carousel-caption">
                <h3><button class="button button1">READ MORE</button></h3>
                
              </div>
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
     

</section>

<section>
       
  <div class="container">   
    <h3>Nos évènements</h3>
  <div class="row">
      <div class="col-2">
        <ol>

        <div>
        <h1>Récents</h1>
          <li><a href="">Festival de la musique</a></li>
          <li><a href="">TECHDAY</a></li>
          <li><a href="">Cathofeast</a></li>  
        </div>

        <div class="oldevents">
          <h2>Plus anciens</h2>
          <li><a href="">Soirée de parainage</a></li>
          <li><a href="">Soirée de bienvenue</a></li>
          <li><a href="">Pool party</a></li>
        </div>

      </ol>    
          </div>
      <div class="col-2">
          <img src="../images/calendrier.png" alt="image1">
          </div>
      </div>
  </div> 

</section>

</body>
</html>
