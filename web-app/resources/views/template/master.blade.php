<?php
// Start the session

use App\Models\User;

session_start();
?>

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


<body>
  <header>
    
    <?php
    //Set session variables
    $_SESSION["username"] = '{{$User->firstname}}';
    echo 'Session variable is set.';
     ?>

    <!-- Nav -->
    <div><h1>@yield('heading')</h1></div>
  </header>

  
 
  <main>
    <div>@yield('content')</div>
  </main>

 
</body>
</html>