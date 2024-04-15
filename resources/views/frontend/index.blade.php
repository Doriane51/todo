<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>TaskFlow</title>
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
    .contenu{
        display:flex;
        
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
        font-size:30px;
        border:none;
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
   
    }
    .texte{
        display:flex;
        flex-direction:column;
        margin-top:200px;
    }
    a:hover{
        transition-delay:0.4s;
        color:#fb911f;
    }
</style>
<body class="flex items-center justify-center">
    <div class="contenu flex flex-row gap-2">
        <div class="img">
            <img src="https://plus.unsplash.com/premium_photo-1683309556192-d024cd55a9ee?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHRhc2t8ZW58MHx8MHx8fDA%3D" alt="productive mind" class="w-6 h-8 border border-2">
        </div>
        <div class="texte">
           <h3>TaskFlow</h3>
           <p>Transformez vos listes en réussites avec notre application <br>de gestion de tâches. Planifiez efficacement, restez <br> concentré sur l'essentiel et accomplissez plus chaque jour <br>sans stress ni confusion</p>
           <a href="{{route('login')}}"><button class="bouton">Commencez</button></a> <br>
           <p class="cpt">Déjà un compte ? <a href="{{route('login')}}" class="lien">Connectez-vous</a></p>
        </div>
         
    </div>
</body>
</html>