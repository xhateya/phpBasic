<?php
require 'function.php';
$creatures=query("SELECT * FROM Creatures");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="funtastic.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href ="#" class="logo">Fantastic Beast</a>
        <ul>
            <li><a href= "#" class = "active">Home</a></li>
            <li><a href= "creatures.php">Creatures</a></li>
            
        </ul>
    </header>
    <section class="parallax">
    <a href ="#" class="logo">Fantastic Beast</a>
        <img src= "img/back.gif" id="back">
        <h3 id="text">And Where to Find Them</h3>
        <img src= "img/bushes.png" id="bushes">
    </section>

    <!-- <section class="about" id="about">
        <div class="contentBx">
            <h2 class="titleText">Feel the beauty of the worrld</h2>
            <p class="text">OKAOKFOWKSOFDKJORSJOVEORSM</p>
            <a href="#" class="btn">Popular Destination</a>
        </div>
        <div class="imgBx">
            <img src="img/bunga.jpeg" class="fitBgm">
        </div>
    </section> -->


    <section class="banner2">
        <img src="img/back.gif" class="fitBg">

    </section>

    <section class="creatures">
        <div class="content">
            <h2 class="titleText">Take a look</h2>
            <p class="text">at all these magical creatures</p>
        </div>
        <div class="creaturesList">
            <div class="box">
                <div class="imgBx">
                    <img src="img/deer.jpeg" class="fitBg">
                </div>
                <div class="content">
                    <h2>Wyvern<br><span>Karenza</span></h2>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/ogay.jpeg" class="fitBg">
                </div>
                <div class="content">
                    <h2>Oogway<br><span>Mytique</span></h2>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/orgy.jpeg" class="fitBg">
                </div>
                <div class="content">
                    <h2>Manticore<br><span>Vombeland</span></h2>
                </div>
            </div>
        </div>
        <a href="creatures.php" class="btn">See Creatures</a>
    </section>

    <section class="banner3">
        <img src="img/back.gif" class="fitBg">
    </section>

    <section class="footer">
        <h4 class="copyrightText">Fantastic <a href="#">Beast </a>Creatures</h4>
    </section>


    <script>
        // let bird= document.getElementById('bird');
        let back= document.getElementById('back');
        let bushes= document.getElementById('bushes');
        let text= document.getElementById('text');
        let btn= document.getElementById('btn');
        let header= document.querySelector('header');


        window.addEventListener('scroll',function(){
            let value = window.scrollY;
            // bird.style.left= value * 1.25 + 'px';
            back.style.top= value * 0.5 + 'px';
            bushes.style.top= value * 0 + 'px'; 
            text.style.marginRight= value * 4 + 'px';
            text.style.marginTop= value * 1.5 + 'px';
            btn.style.marginTop= value * 1.5 + 'px';
            header.style.top= value * 0.5 + 'px';
        })

    </script>
    
</body>
</html>