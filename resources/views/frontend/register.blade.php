<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Page d'enregistrement</title>
</head>
<style>
    *{
    /*margin: 0px;
    padding: 0px;*/
    box-sizing: border-box;
    font-family:Arial, sans-serif;
    scroll-behavior: smooth;
   }
    img{
        height:750px;
        width:700px;
        border-radius:15px;
    }
    .texte{
        margin-left:100px;
        margin-top:150px;
    }
 
    p{
        line-height:2;
    }
    h3{
        font-size:30px;
    }
    .bouton{
        margin-top:30px;
        text-decoration:none;
        color:black;
        background-color:#fb911f;
        padding:5px 130px;
        border-radius:5px;
        font-size:20px;
        border:none;
        width:100%;
    }
    .bouton:hover{
        cursor:pointer;
        background:#d87710;

    }
    .texte .cpt{
        margin-left:80px;
    }
    .texte .cpt .lien{
        text-decoration:none;
    }

    body{
        display:flex;
        min-height:100vh;
   
    }
    .texte{
        display:flex;
        flex-direction:column;
        margin-top:200px;
    }
    
    .conteneur{
        width:100%;
        
        
    }
    .connexion{
        margin-top:20%;
        font-size:40px;
       
    }
    .logForm{
        display: flex;
        flex-direction:column;
        
        
    }
    .contenu{
        display: flex;
        flex-direction:row;
        gap:100px;
        padding:8px;
        
    }

    input{
        border-width:2px;
        border-radius:5px;
        padding:6px;
        width: 440px;
        height:50px;
       
    }
    .cpt{
        display: flex;
        flex-direction:row;
        gap:30px;
        align-items:center;
        justify-items:center;
        margin-left:50px;
    }
    a:hover{
        transition-delay:0.4s;
        color:#fb911f;
    }
</style>
<body class="flex items-center justify-center">
    <div class="contenu ">
        <div class="img">
            <img src="https://plus.unsplash.com/premium_photo-1683309556192-d024cd55a9ee?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHRhc2t8ZW58MHx8MHx8fDA%3D" alt="productive mind" class="w-6 h-8 border border-2">
        </div>
        

     <div class="logForm">
     <p class="connexion">S'enregistrer</p>
        @if(session()->has('statut'))
        <p style="color: red; text-align: center;font-weight: bolder;">{{session('statut')}}</p>
        @endif
        <div class="conteneur">
        <form action="{{route('loginPost')}}" id="loginForm" method="post">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p style="text-align: center; color:red">{{$error}}</p>
                @endforeach
            @endif
            @csrf
            <div class="con">

                    <div class="row p-0">
                        <div class="">
                            <input type="name" name="name" id="phone" placeholder="Doriane" style="border:1px black solid">
                        </div>

                    </div><br>
            
                    <div class="row p-0">
                        <div class="">
                            <input type="email" name="email" id="phone" placeholder="email@gmail.com" style="border:1px black solid">
                        </div>

                    </div><br>
                    <div class="row p-0">
                        <div class="">
                            <input type="password" name="password" id="phone" placeholder="pass*****" style="border:1px black solid">
                        </div>

                    </div>
            </div>
           
            <div class="lower">
                <button class="btn bouton" type="submit" id="loader">S'enregistrer</button>
            </div>
            
                <br> 
            <div class="cpt">
            <p class="mb-0">Déjà enregistrer ?</p><a href="{{route('login')}}" class="text-info">Se connecter </a>
        </div>
        <br>
           
                
        </form> 
        
        
        </div>
     </div>
         
     </div>
</body>
</html>