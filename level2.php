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
            background-image: url(img/maingamebg2.gif);
            background-size:cover;
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
            color: rgb(0, 0, 0);
            padding: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div id="scrollOffsetDisplay">0 Points (3000 to win)</div>

    <img class="keys" id="right" src="img/arrow.png">
    <img class="keys" id="left" src="img/arrow.png">
    <img class="keys" id="up" src="img/arrow.png">

    <canvas></canvas>
    <img src="./img/platform2.png" class="Platform" id="Platform">
    <img src="./img/capyidle2.png" class="PLayer" id="Player">
    <img src="./img/capyidle_jump2.png" class="PLayer" id="Player">
    <img src="./img/capyidle_walk2.gif" class="PLayer" id="Player">
    <script src="./js/maingame2.js" type="module"></script>
    <script src="./js/keys.js"></script>

</body>
</html>