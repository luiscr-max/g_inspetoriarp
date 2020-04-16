<DOCTYPE html>
<html>
<read>
    <meta charset="UTF-8">
     <title> MENU VERTICAL DOIS  </title>
     <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #f9f9f9;
        }
        #check{
            display: none;
        }
        #icone{
            cursor:pointer;
            padding: 15px;
            position: absolute;
            z-index: 1;
        }
        .barra{
            background-color: #333;
            height: 100%;
            width: 150px;
            position:absolute;
            transition: all .3s linear;
            left:-300px;
        }
        nav{
            width: 100%;
            position: absolute;
            top: 60px;
        }
        nav a{
            text-decoration: none;
        }
        .link{
            background-color: #494950;
            padding: 20px;
            font-family: 'Arial';
            font-size: 10pt;
            transition: all .2s linear;
            color: #f4f4f9;
            border-bottom: 2px solid #222;
            opacity: 0;
            margin-top: 200px;
        }
        .link:hover{
            background-color: #050542;
        }
        #check:checked ~ .barra{
            transform: translateX(300px);
        }
        #check:checked ~ .barra nav a .link{
            opacity: 1;
            margin-top: 0;
            transition-delay: .4s;
        }
     </style>
</head>
<bory>
    <input type = "checkbox" id="check">
    <label id="icone" for ="check"><img src ="icone.png"></label>
    <div class ="barra">
        <nav>
            <a href =""> <div class = "link">home</div></a>
            <a href ="menuvertical.php"> <div class = "link">Tutoriais</div></a>
            <a href =""> <div class = "link">Dwonloads</div></a>
            <a href =""> <div  class = "link">Eventos</div></a>
            <a href =""> <div  class = "link">Contato</div></a>   
        </nav>
    </div>




</bory>

</html>