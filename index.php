<?php
include 'inc\connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head >
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css">
    <link rel="stylesheet" href="js\nav.js">

    <title>Home | Minhaz Catering</title>
</head>
<div id="tap"></div>
    <nav id="home" >
        <a href="#tap"><img src="images\mihanz_Logo.jpg" alt="logo" id="logo" title="Mihanz Catering"> </a> 

        <ul>
            
            <li><a href="#tap">Other Packages</a></li>
            <li><a href="#">Catering</a>
                <div class="submenu">
                    <ul>
                        <li>Birthday</li>
                        <li>Wedding</li>
                    </ul>
                </div>
            </li>

            <li><a href="php\menu.php">Menu</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="">Log In</a></li>


        </ul>
        
    </nav> 
<body>
    <div class="snap">

    
        <section>
            <div id="top">
                <div class="container">
                    
                
                    <div id="carousel">
                        <img src="images\Mihanz.jpg" alt="Mihanz Logo" height="650px">

                    </div>
                    <div id="info"> 
                        <h1>
                        MIHANZ CATERING
                        </h1>
                            <br><br>

                        <p>Delicious food.Excellent Service. Very Affordable price for any occasions.</p>



                    </div>

                </div>
            </div>
        </section>
        <section>

            <div id="about">

                <h1>About Us</h1>
            </div>

        </section>
       
        
        <section>   
            <div id="contact"> 
                    <h1>Sub</h1>
            </div>
        </section>
    </div>    
    
</body>

<footer id="footer">
        <div id="foot-con">
        <center> 
        <img src="images\mihanz_Logo.jpg" alt="logo" id="flogo" title="Mihanz Catering">
        <h1 id="fsname">Mihanz Cataring</h1>
        </center>
        <br>
        <address></address>
        <p>Copyright &copy; 2012 Minhazcatering. All rights reserved.</p>
        </div>
       
</footer>

</html>