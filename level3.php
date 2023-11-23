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
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-image: url(img/maingamebg3.png);
            background-size:100%;
            image-rendering: pixelated;
        }

        .keys {
            position: absolute;
            height: 100px;
            bottom: 0;
            cursor: pointer;
        }

        #left {
            rotate: calc(180deg);
            left: 0;
        }

        #up {
            rotate: calc(270deg);
            right: 0;
        }

        #right {
            left: 0;
            margin-left: 110px;
        }

        #scrollOffsetDisplay {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div id="scrollOffsetDisplay">0 Points (10000 to win)</div>

    <img class="keys" id="right" src="img/arrow.png">
    <img class="keys" id="left" src="img/arrow.png">
    <img class="keys" id="up" src="img/arrow.png">

    <canvas></canvas>
    <img src="./img/platform3.png" class="Platform" id="Platform">
    <img src="./img/capyidle3.png" class="PLayer" id="Player">
    <script src="./js/maingame3.js" type="module"></script>
    <script src="./js/keys.js"></script>
    
</body>
</html>