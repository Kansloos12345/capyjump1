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

        .patchnotes {
            position: absolute;
        }

        .background {
            position: absolute;
            z-index: -1;
            height: 95%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .backgroundmobile {
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
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #text {
            margin-left: 30%;
            height: 10vh;
        }

        .divs {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            gap: 5vw;
        }

        #capy, #start, #kharua {
            height: 20vh;
        }

        #capy {
            animation: rotation 1.5s infinite linear;
        }

        #start:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        #kharua {
            animation: rotation 1.5s infinite;
        }

        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(359deg);
            }
        }

    </style>

</head>
<body>

<a class="patchnotes" href="patchnotes.php">
    <h3>What is new in Capy Jump! 2.0?</h3>
</a>

<img class="background" src="./img/capystartbg.gif">

<img class="backgroundmobile" src="./img/capystartbg_phone.gif">

<div class="logo_a">
    <a href="index.php">
        <img id="logo" src="./img/capyjumplogo.png">
    </a>
</div>

<img id="text" src="./img/text.gif">

<div id="container">
    <div class="divs">
        <a href="https://www.rvspijker.nl/rps/" target="_blank">
            <img id="capy" src="./img/capyidle.png">
        </a>

        <div class="divs">
            <img id="start" alt="start" src="./img/sutaato.png" onclick="audio.play(), delayRedirect()">
        </div>

        <a href="https://www.kharua.xyz" target="_blank">
            <img id="kharua" src="./img/kharua.png">
        </a>
    </div>
</div>

<script>
    function delayRedirect() {
        // Wait for 3 seconds
            setTimeout(function() {
            // Redirect to main game page
            window.location.href = "levelselection.php";
        }, 2000);
    }

    const audio = new Audio();
    audio.src = "./img/capy.mp3";
</script>

</body>
</html>