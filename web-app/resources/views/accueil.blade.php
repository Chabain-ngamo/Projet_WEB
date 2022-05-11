<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/x-icon" href="https://www.we-ark.fr/wp-content/uploads/2020/03/cesi_logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleaccueil.css')}}">   
    <script src = "{{asset('jquery/jquery-3.6.0.min.js')}}"></script>    
    <link rel = "stylesheet" href = "{{asset('fontawesome/css/all.css')}}">
    
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
        <a href="Accueil.html"> <img src="images/logo_cesi.png" alt="logo cesi_bde"></a>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>

        <ul>

            <li><a href="Accueil.html">Accueil</a></li>
            <li><a href="Evenements.html">Evenements</a></li>
            <li><a href="Boutique.html">boutique</a></li>
            <li><a href="boiteidee.html">Boîte à idées</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="connexion.html"><i class= "fas fa-user-circle"></i></a></li>

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
                <a href=""><button class="btn button1">READ MORE</button></a>
                <a href=""> <button class="btn button2">LOGIN</button></a>
            </div>
        </div>
    </div>

</section>

<body>

    <section class="cards-wrapper">
        <div class="card-grid-space">
            <div class="num">Events</div>
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
                    <img src="https://images.pexels.com/photos/2570145/pexels-photo-2570145.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
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
                    <img src=https://images.pexels.com/photos/2826131/pexels-photo-2826131.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260 alt="">
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
                    <img src=https://images.pexels.com/photos/3681591/pexels-photo-3681591.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 alt="">
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
                    <img src=https://images.pexels.com/photos/1689731/pexels-photo-1689731.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 alt="">
                    <strong>KANAA Albert</strong>
                    <p>...</p>
                </div>

            </div>
        </div>
        <h1 class="h1">BDE MEMBERS</h1>
    </section>

</body>