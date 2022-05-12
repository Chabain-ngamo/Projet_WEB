<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="icon" type="image/x-icon" href="https://www.we-ark.fr/wp-content/uploads/2020/03/cesi_logo.png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Stle-->
        <link rel="stylesheet" href="{{asset('css/stylecatalogue.css')}}">
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
            <a href="">  <img src="../images/logo_cesi.png" alt="logo cesi_bde"></a>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            
            <ul>
                <li><form> 
                    <input type="text" name="text" class="search" placeholder="Recherche...">
                    
                </form> </li>
                <li><a href="../accueil">Accueil</a></li>
                <li><a href="../activity">Evenements</a></li>
                <li><a href="../Boutique">boutique</a></li>  
                <li><a href="../boiteidée">Boîte à idées</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="../users/add" ><i class= "fas fa-user-circle"></i></a></li>

            </ul>
        
            
        </nav>

    </header>

        <nav id="nav2">
            <img src="../images/Shop.png" alt="logo cesi_bde">
            
            
            <ul>
            
                <li><form> 
                    <input type="text" name="text" class="search" placeholder="Recherche...">
                    </form> </li>
                <li><a href="" ><i class='fas fa-shopping-cart' style='font-size:24px'></i></a></li>
            
            </ul>
            
        </nav>
    
    <body>
    
        <!--section de catégories-->
        <section class="categories">
            <div class="container">
                <h2>Catégories vedettes</h2>
            <div class="row">
                <div class="col-3">
                    <img src="../images/category-1.jpg" alt="category1">
                </div>
                <div class="col-3">
                    <img src="../images/category-2.jpg" alt="category2">
                </div>
                <div class="col-3">
                    <img src="../images/category-3.jpg" alt="category3">
                </div>
            </div>
                    
        </section>

        <!--Sneakers-->
        <section class="featured-products">
            <ul id='list'>
                <div class="container">
                    <h2>Sneakers</h2>
                    <div class="row">
                        <div class="col-4">
                            <li> <img src="../images/product-1.jpg" alt="produit 1">
                                <h3>Jordan 4 </h3>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o"></i>
                                    
                                </div>
                                <p>200 €</p>
                            </li>
                        </div>
                    
                        <div class="col-4">
                            <img src="../images/product-2.jpg" alt="produit 1">
                            <h3>jack cactus</h3>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o"></i>
                                
                                
                                
                            </div>
                            <p>80 €</p>
                        </div>

                        <div class="col-4">
                            <img src="../images/product-3.jpg" alt="produit 1">
                            <h3>Jordan 1 blue university</h3>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                
                            </div>
                            <p>120 €</p>
                        </div>

                        <div class="col-4">
                            <img src="../images/product-4.jpg" alt="produit 1">
                            <h3>Nike sb dunk low</h3>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                                
                            </div>
                            <p>20 €</p>
                        </div>
                    </div>
                    
                </div>
            </ul>
        </section>
        <!--Vêtements-->

        <section class="featured-products">
            <div class="container">
                <h2>Vêtements</h2>
                <div class="row">
                    <div class="col-4">
                        <img src="../images/product-5.jpg" alt="produit 1">
                        <h3>Cargo pants blue</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            
                        </div>
                        <p>30 €</p>
                    </div>

                    <div class="col-4">
                        <img src="../images/product-6.jpg" alt="produit 1">
                        <h3>Jogging vert</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            
                        </div>
                        <p>10 €</p>
                    </div>
                    <div class="col-4">
                        <img src="../images/product-7.jpg" alt="produit 1">
                        <h3>Pantalon jean</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            
                        </div>
                        <p>120 €</p>
                    </div>

                    <div class="col-4">
                        <img src="../images/product-8.jpg" alt="produit 1">
                        <h3>Casquette nike</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            
                        </div>
                        <p>7 €</p>
                    </div>

                    <div class="col-4">
                        <img src="../images/product-9.jpg" alt="produit 1">
                        <h3>hoodie Rick & Morty</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            
                        </div>
                        <p>9.99 €</p>
                    </div>

                    <div class="col-4">
                        <img src="../images/product-10.jpg" alt="produit 1">
                        <h3>Hoodie Supreme</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            
                        </div>
                        <p>12 €</p>
                    </div>

                    <div class="col-4">
                        <img src="../images/product-11.jpg" alt="produit 1">
                        <h3>Tshirt travis scott</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o"></i>
                            
                            
                        </div>
                        <p>15 €</p>
                    </div>

                    <div class="col-4">
                        <img src="../images/product-12.jpg" alt="produit 1">
                        <h3>Tshirt oversized Alien</h3>

                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            
                        </div>
                        <p>12.79 €</p>
                    </div>
                    
                </div>
                
            </div>
        
        </section>

        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        
    </body>
</html>

