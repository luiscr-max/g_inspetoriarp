<!DOCTYPE html>
<html>
<head>
    <title> Vertical menu with CSS</title> 
    <link rel=  "stylesheet" href="font-awesome.min.css">
    <style type ="text/css">
        body{
            padding: 0;
            margin: 0;
        }
        .menu ul {
            padding: 40px;
            list-style: none;
            margin: 0;
            padding: 20;
        }
        .menu ul li:hover{
            background-color: #BDC3C7;
        }
        .menu ul li {
            padding: 12px;
            position: relative;
            width: 200px;
            vertical-align: midle;
            background-color: #34495E;
            border-top: 1px solid #BDC3C7;
        }
        .menu > ul > li {
            border-right: 5px solid #F1C40F;
        }
        .menu ul ul {
            transition: all 0.4s;
            opacity:0;
            position: absolute;
          /*  border-left: 5px solid #F1C40F;*/
            visibility: hidden;
            left: 85%;
            top: -90%;
        }
        .menu ul li:hover > ul {
            opacity: 1;
            visibility:  visible;
        }
        .menu ul a{
            color: #fff;
           text-decoration: none;
        }
    </style>
</head>
<body>
    <div class = "menu">
        <ul>
            <li><a  href="">Home</a></li>
            <li><a  href="">Users</a>
                <ul>
                    <li><a href ="">Add</a></li>
                    <li><a href ="">Edit</a></li>
                    <li><a href ="">Delete</a></li>
                </ul> 
            </li>    
            <li><a  href="">Web Design</a></li>
            <li><a  href="">Database</a></li>
            <li><a  href="">Contac us</a></li>
        </ul>
    </div>
</body>
</html>