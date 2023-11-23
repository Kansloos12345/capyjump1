<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Check if the user is coming from the specific page you want to allow access from
    $allowedReferer = 'http://localhost/capyjump1/level3'; // Replace with the URL of the specific page

    if (!empty($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] === $allowedReferer) {
        // User is coming from the specific page, allow access
        // You may include additional validation or processing here if needed
    } else {
        // User is not coming from the specific page, redirect to levelselection.php
        header('Location: levelselection');
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capy Jump! DEMO</title>
    <link rel="icon" type="image/x-icon" href="./img/orange.png">
    <style>
        body {
            background-color: rgb(18, 14, 10);
            color: white;
            display: block;
            margin-left: 40%;
        }

        .lol {
            height: 100px;
            width: 200px;
            font-size: 25px;
            margin: 3%;
            background-color: rgb(18, 14, 10);
            border: none;
        }

        #lmao {
            font-size: 50px;
        }

        #credit {
            margin-left: 11%;
            margin-top: 10%;
        }

        #titlecred {
            margin-left: 5%;
            margin-top: 50%;
        }

        #tankz {
            margin-left: 20px;
        }

        #credits {
            margin-left: -73%;
        }

        h1 {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif; 
        }

        p {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

    </style>
</head>
<body>

    <p id="lmao">YOU WON<p>

    <input class="lol" type="button" value="" onclick="play()" />

    <script>

        window.addEventListener('DOMContentLoaded', function() {
                window.scrollBy({
                    top: 1690,
                    behavior: 'smooth'
                });
                let currentScroll = window.pageYOffset;
                let targetScroll = currentScroll + 1750;
                let scrollStep = Math.PI / (30 * 60); // 30 seconds at 60fps
                let count = 0;

                let scrollInterval = setInterval(function() {
                    if (window.pageYOffset !== targetScroll) {
                        count += 1;
                        let nextScroll = currentScroll + (targetScroll - currentScroll) * (0.5 - 0.5 * Math.cos(count * scrollStep));
                        window.scrollTo(0, nextScroll);
                    } else {
                        clearInterval(scrollInterval);
                    }

                    // Check if reached the bottom
                    if (window.pageYOffset + window.innerHeight >= document.documentElement.scrollHeight) {
                        clearInterval(scrollInterval);
                    }

                }, 20); // 60 fps
            }
        );

    </script>

    <h1 id="titlecred"><br></h1>

    <div id="credits" style="text-align: center;">
        <h1 style="font-size: 40px; margin-bottom: 30px;">Capy Jump! demo</h1>
        <h2 style="font-size: 30px; margin-bottom: 30px;">Credits</h2>
        <p style="font-size: 20px; margin-bottom: 20px;">
            <strong>Game Designers</strong><br>
            Joe Mama<br>
            Hugh Jass<br>
        </p>
        <p style="font-size: 20px; margin-bottom: 20px;">
            <strong>Art Team</strong><br>
            Hatsune Miku<br>
            Nick G.<br>
        </p>
        <p style="font-size: 20px; margin-bottom: 20px;">
            <strong>Programming Team</strong><br>
            Chat-GPT<br>
            Ayo<br>
        </p>
        <p style="font-size: 20px; margin-bottom: 20px;">
            <strong>Music and Sound</strong><br>
            Tree Grow<br>
            Knee Grow<br>
            Nintendo<br>
            Heisenberg<br>
            Frank Sinatra<br>
            <strong>Kevin Macleod <3</strong><br>
        </p>
        <p style="font-size: 20px; margin-bottom: 20px;">
            <strong>Quality Assurance</strong><br>
            Jan Pan de Bosjes Man<br>
            Pea Cock<br>
        </p>
        <p style="font-size: 20px; margin-bottom: 20px;">
            <strong>Special Thanks</strong><br>
            Kharau<br>
            RV spijkers<br>
            Nick de vries<br>
        </p>
        <p style="font-size: 20px; margin-bottom: 20px;">
            <img src="./img/orange.png" alt="Game Logo" style="width: 100px; height: 100px; margin-top: 20px;">
        </p>
        <p style="font-size: 18px; margin-top: 20px;">&copy; 2023 Skill-Issue Producktions. All rights reserved.</p>
    </div>

    <h1 id="tankz"><br><br><br><br><br><br><br><br><br><br>Tankz 4 playin<br><br><br><br><br><br><br><br><br><br></h1>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            // Your play() function code here
            function play() {
                var music = new Audio('img/win.mp3');
                music.play();
            }
        
            // Call the play() function to start it automatically
            play();
        });
    </script>
    
</body>
</html>