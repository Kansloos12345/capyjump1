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
            margin: 0px;
            padding: 0px;
            image-rendering: pixelated;
            overflow: hidden;
        }

        .background {
            position: absolute;
            z-index: -1;
            height: 95%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .phonebackground {
            display: none;
        }

        .logo_a {
            margin-top: 10vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #logo {
            height: 42vh;
        }

        #container {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #text {
            height: 5vh;
            margin-bottom: 6vh;
        }

        .divs {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            gap: 2vw;
        }

        #lvl1, #lvl2, #lvl3 {
            height: 20vh;
        }

        #lvl1:hover, #lvl2:hover, #lvl3:hover {
            transform: scale(1.1);
        }

    </style>

</head>
<body>

<img class="background" src="./img/capystartbg.gif">

<img class="phonebackground" src="./img/capystartbg_phone.gif">

<div class="logo_a">
    <a href="index.php">
        <img id="logo" src="./img/capyjumplogo.png">
    </a>
</div>

<div id="container">
    <img id="text" src="./img/level.png">
    <div class="divs">
        <a href="level1.php">
            <img id="lvl1" src="./img/plains.png">
        </a>

        <a href="level2.php">
            <img id="lvl2" src="./img/desert.png">
        </a>

        <a href="level3.php">
            <img id="lvl3" src="./img/volcano.png">
        </a>
    </div>
</div>

</body>
</html>