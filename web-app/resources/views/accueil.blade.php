<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style-->
    <link rel="stylesheet" href="{{asset('css/styleaccueil.css')}}">   
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
        <a href="accueil"> <img src="images/logo_cesi.png" alt="logo cesi_bde"></a>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>

        <ul>

        <li><a href="accueil">home</a></li>
        <li><a href="activity">Events</a></li>
        <li><a href="Boutique">Shop</a></li>  
        <li><a href="boiteidée">Idea box</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="users/add" ><i class= "fas fa-user-circle"></i></a></li>

        </ul>

    </nav>

</header>

<section class="sections home text-center">
    <div class="overlay">
        <div class="home-content">
            <div class="container">
                <h3 class="home-title">Welcome to CESI BDE</h3>
                <p class="home-desc">
                    The platform dedicated to the development of students
                </p>
                <a href="#middle"><button class="btn button1">READ MORE</button></a>
                <a href="users/add"> <button class="btn button2">LOGIN</button></a>
            </div>
        </div>
    </div>

</section>

<body>

    <section class="cards-wrapper">
        <div class="card-grid-space">
            <div class="num" id="middle">Events</div>
            <a class="card" href="Evenements.html" style="--bg-img: url(../images/festi.jpg)">
                <div>
                    <h1>Festi fury</h1>
                    <p>The event not to be missed of the year</p>

                </div>
            </a>
        </div>
        <div class="card-grid-space">
            <div class="num">Shop</div>
            <a class="card" href="Boutique.html" style="--bg-img: url(../images/Image1.png)">
                <div>
                    <h1>BDE SHOP</h1>
                    <p>The bde shop is an online shop where you can find many interesting items</p>

                </div>
            </a>
        </div>
        <div class="card-grid-space">
            <div class="num">Idea box</div>
            <a class="card" href="boiteidee.html" style="--bg-img: url(../images/oreille.jpg)">
                <div>
                    <h1>Here to hear you</h1>
                    <p>The idea box is the place where you can submit your proposals for ideas for a possible activity to organize or tell us about your problems or a concern if you have any</p>

                </div>
            </a>
        </div>
    </section>

    <section>

        <h1 class="h1-text">
            <i class="fa fa-users" aria-hidden="true"></i>About us
        </h1>
        <div class="containera">
            <div class="box">
                <div class="top-bar"></div>
                <div class="top">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                </div>
                <div class="content">
                    <img src="./images/chabain.png" alt="">
                    <strong>NGAMO Chabain </strong>
                    <p>LEADER</p>
                </div>

            </div>
            <div class="box">
                <div class="top-bar"></div>
                <div class="top">
                    <div>
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </div>
                    <div>

                    </div>
                </div>
                <div class="content">
                    <img src=./images/maiva.png alt="">
                    <strong>MAGNIFOUET Maiva</strong>
                    <p>...</p>
                </div>

            </div>
            <div class="box">
                <div class="top-bar"></div>
                <div class="top">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                </div>
                <div class="content">
                    <img src=./images/jordan.png alt="">
                    <strong>TCHOUNGA Jordan</strong>
                    <p>...</p>
                </div>

            </div>
            <div class="box">
                <div class="top-bar"></div>
                <div class="top">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                </div>
                <div class="content">
                    <img src=./images/Albert.png alt="">
                    <strong>KANAA Albert</strong>
                    <p>...</p>
                </div>

            </div>
        </div>
        <h1 class="h1">BDE MEMBERS</h1>
    </section>

</body>