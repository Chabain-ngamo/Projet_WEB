
<!DOCTYPE html>
<html lang="fr">
@extends('template.master')



<head>
    <link rel="icon" type="image/x-icon" href="https://www.we-ark.fr/wp-content/uploads/2020/03/cesi_logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleboiteidee.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>    
    <script src = "assets/vendors/fontawesome/js/all.js"></script> 
    <script src="./assets/vendors/jquery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">


    
    
    

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
      <a href="">  <img src="images/logo_cesi.png" alt="logo cesi_bde"></a>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      
      <ul>
         
          <li><a href="accueil">Accueil</a></li>
          <li><a href="Evenements.html">Evenements</a></li>
          <li><a href="Boutique">boutique</a></li>  
          <li><a href="boiteidée">Boîte à idées</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="welcome" ><i class= "fas fa-user-circle"></i></a></li>
         
      </ul>
       
  </nav>
  
  
  </header>
  
<body>

  <section>
    <div class="container">   
            
        <div class="row">
    <div class="contactez-nous">
        <h1>Boite à idée</h1>
        <p>Un problème, une question, une sugggestion ? N’hésitez pas et contactez-nous!</p>
        <form method="post">
        @csrf
        <div>
        <label for="nom">Votre nom</label>
        <input type="text" name="nom" placeholder="KANAA" required>
        </div>
        <div>
        <label for="email">Votre e-mail</label>
        <input type="email" name="email" placeholder="monadresse@mail.com" required>
        </div>
        <div>
        <label for="sujet">Quel est le sujet de votre message ?</label>
        <select name="sujet" required>
        <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
        <option value="probleme-compte">Problème avec mon compte</option>
        <option value="question-produit">Question à propos d’un produit</option>
        <option value="Suggestion">Suggestion</option>
        <option value="autre">Autre...</option>
        </select>
        </div>
        <div>
        <label for="message">Votre message</label>
        <textarea  name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
        </div>
        <div>
        <button type="submit">Soumettre</button>
        </div>
        </form>
        </div>
        
    

    </div>
    <div>
  </section>
    </body>
</html>