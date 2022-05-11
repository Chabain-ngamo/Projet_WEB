<!DOCTYPE html>
<html lang="en">
@extends('template.master')

@section('title', 'Sigup')

@section('heading', 'SIGN UP')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= device-width , initial-scale=1.0">
    <title>BDE CESI</title>
    <!--link rel="stylesheet" href=".\assets\vendors\boostrap\bootstrap-5.1.3-dist\css\bootstrap.min.css"> 
 	<link rel="stylesheet" href=".\assets\vendors\fontawesome\css\all.min.css"> 
    <link rel="stylesheet" type="text/css" href="Authentification.css"-->

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Authentification.css')}}">
    
    <!-- we had linked the css file -->
</head>
<body>
    <div class="full-page"> 
        <div class="navbar">
            <div>
                <a href='Authentification.html'>BDE UCAC</a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="accueil">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Conctact</a></li>
                    <li><button class="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width: auto;">Login</button></li>
                </ul>
            </nav>
        <!-- navigation bar is finished -->
    <!-- now let us make the styling for the navigation bar -->
        </div>
        
        <div id='login-form'class="login-page"> 
            <!-- creating the form-box -->
            <div class="form-box">
                
                <div class="button-box">
                    <div id="btn"></div>
                    <button type='button' onclick="login()" class="toggle-btn" >Log In</button>
                    <button type='button' onclick="register()" class="toggle-btn">Register</button>
                </div>
                <!-- creating the Login-form -->
                <form method="post" id="login" class="input-group-login"> 
                    @csrf
                    <input type="text" class='input-field' placeholder="Email" required >
                    <input type="password" class='input-field' placeholder="Enter Password" required >
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class=" submit-btn">Log in</button>
                </form>
                <!-- creating the registration form -->
                <form method="post" id="register" class="input-group-register"> 
                    @csrf
                    <input name="firstname" type="text" class='input-field' placeholder="First Name" required>
                    <input name="secondname" type="text" class='input-field' placeholder="Last  Name" required >
                    <input name="centre" type="text" class='input-field' placeholder="Localisation" required >
                    <input name="email" type="email" class='input-field' placeholder="Email Id" required >
                    <input name="password" type="password" id="password" class='input-field'  placeholder="Enter Password" required >
                    <input type="password" class='input-field' placeholder="Confirm Password" required >
                    <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
                    <!-- <span id="error"></span> -->
                    <small></small>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
            </div>
         
        </div>
    </div> 
    
    <!--script src="./Authentification.js" ></script-->
    <script src="{{ asset('javascript/Authentification.js') }}"></script>
    
</body>
</html> 
