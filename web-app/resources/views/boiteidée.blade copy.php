
<!DOCTYPE html>
<html lang="fr">

    <head>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
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

    
    <body>
    
        <header class="navbar">
            <nav id="navbar">
                <a href="accueil">  <img src="images/logo_cesi.png" alt="logo cesi_bde"></a>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
        
                <ul>
            
                    <li><a href="accueil">Home</a></li>
                    <li><a href="Evenements.html">Events</a></li>
                    <li><a href="Boutique">Shop</a></li>  
                    <li><a href="boiteidée">Idea box</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="welcome" ><i class= "fas fa-user-circle"></i></a></li>
            
                </ul>
        
            </nav>
    
    
        </header>

        <section>
            <div class="container">
                @foreach ($ideas as $idea)
                    <div>
                        {{$idea->sujet}}
                        {{$idea->description}}
                        <img src="/images/$idea->image">
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <div class="container">   
                    
                <div class="row">
                    <div class="contactez-nous">
                        <h1>Idea box</h1>
                        <p>Do you have a problem?an idea?a propose?contact us!</p>
                        <form method="post" action="{{url('images/upload')}}">
                        @csrf
                        
                            <div>
                                <label for="sujet">why are you writing?</label>
                                <select name="sujet" required>
                                    <option value="" disabled selected hidden>choose the goal </option>
                                    <option value="probleme-compte">A problem with your account?</option>
                                    <option value="question-produit">Question about a product?</option>
                                    <option value="Suggestion">Suggestion?</option>
                                    <option value="autre">Other...</option>
                                </select>
                            </div>
                            <div>
                                <label for="description">insert description</label>
                                <textarea  name="description" placeholder="Bonjour, je vous contacte car...." required></textarea>
                            </div>
                            <div>
                                <label for="image">add picture</label>
                                <input type="file" name="image" placeholder="DRAG-n-DROP" >
                            </div>
                            <div>
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            <div>
        </section>
    </body>
</html>