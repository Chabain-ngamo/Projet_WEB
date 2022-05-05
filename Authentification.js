// The first script code is for login and registration form to move correctly 



   

        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register(){
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login(){
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';

        }

        // This code is for when you click out of the login or registration page the form-box disapears
        var modal = document.getElementById('login-form');
        window.onclick= function(event)
        {
            if (event.target == modal)
            {
                modal.style.display='none';
            }
        }
        let myform =document.querySelector('#register');
        //Ecouter la modification du password
        myform.password.addEventListener('change',function(){
            validPassword(this);
        });
         //Ecouter la soumission du formulaire
         myform.addEventListener('submit',function(e){
            e.preventDefault();
            if (validPassword(myform.password)){
                myform.submit();
            }
            
        });
        // let myform =document.getElementById('register');
        /*myform.addEventListener('submit',function(e) {
            let myInput = document.getElementById('password');
            let myRegex = '^[A-Z]$';
        if(myRegex.test(myInput.value)==false && myInput.value.length >= 8 ){
                let myError = document.getElementById('error');
                myError.innerHTML = "le nom doit comporter des lettres";
                myError.style.color = 'red';
                e.preventDefault();
            }
        })*/
        const validPassword = function(inputPassword){
            let msg;
            let valid = false;

             //au moins 8 caracteres
             if (inputPassword.value.length <8){
                 msg = 'Le mot de passe doit contenir au moins 8 caracteres';
             }
             //au moins une maj
             else if(!/[A-Z]/.test(inputPassword.value)){
                msg = 'Le mot de passe doit contenir au moins 1 majuscule';
             }
             
              //au moins une min
              else if(!/[a-z]/.test(inputPassword.value)){
                msg = 'Le mot de passe doit contenir au moins 1 minuscule';
             }
             //au moins  un chiffre
             else if(!/[0-9]/.test(inputPassword.value)){
                msg = 'Le mot de passe doit contenir au moins 1 chiffre';
             } 
             //mot de passe valide
             else{
                msg = 'Le mot de passe valide';
                valid =true;
             }
             let small= inputPassword.nextElementSibling; 
             //on test l'expression reguliere
             if(valid){
                 small.innerHTML = 'Mot de passe valide'
                 small.classList.remove('text-danger');
                 small.classList.add('text-success');
                 return true;
             }else{
                small.innerHTML = msg;
                small.classList.remove('text-success');
                small.classList.add('text-danger');
                return false;
             }
        };  
