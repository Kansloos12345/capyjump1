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
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-image: url(img/maingamebg2.gif);
            background-size: cover;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-top: 20vh;
            width: 100%;
        }

        h2 {
            display: inline;
            background-color: white;
            border-radius: 20px;
            padding: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h1>Skill issue</h1>

    <a href="level2">
        <h2>Try again.</h1>
    </a>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            // Your play() function code here
            function play() {
                var music = new Audio('img/rip.mp3');
                music.play();
            }

            // Call the play() function to start it automatically
            play();
        });
    </script>
    
</body>
</html>