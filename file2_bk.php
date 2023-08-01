<?php
$images = [
    'images/a1.png',
    'images/a2.png',
    'images/a3.png',
    'images/a4.png',
    'images/a5.png',
    'images/a6.png',
    'images/a7.png',
    'images/a8.png',
    'images/a9.png',
    /* 'images/a10.jpeg' */
];
?>

<html>
<head>
    <style>
        body {
            margin: 0;
            background-color: skyblue;
        }

        #rotating-section {
            position: relative;
            height: 800px;
            /* overflow: hidden; */
        }

        .rect1,
        .rect2,
        .rect3,
        .rect4 {
            position: absolute;
            width: 100px;
            height: 100px;
            bottom: -250px;
            background: #fff;
            -webkit-animation: mymove2 6s linear infinite;
        }

        .rect1 {
            left: 50%;
        }

        .rect2 {
            left: 10%;
            -webkit-animation-delay: 0.6s;
        }

        .rect3 {
            left: 25%;
            -webkit-animation-delay: 4s;
        }

        .rect4 {
            left: 85%;
            -webkit-animation-delay: 6s;
        }

        .rect5,
        .rect6,
        .rect7,
        .rect8 {
            position: absolute;
            width: 50px;
            height: 50px;
            background: #fff;
            bottom: -250px;
            -webkit-animation: mymove2 6s linear infinite;
        }

        .rect5 {
            left: 0%;
        }

        .rect6 {
            left: 15%;
            -webkit-animation-delay: 4.2s;
        }

        .rect7 {
            left: 45%;
            -webkit-animation-delay: 9.8s;
        }

        .rect8 {
            left: 77%;
            -webkit-animation-delay: 1.4s;
        }

        .rect9,
        .rect10 {
            position: absolute;
            width: 100px;
            height: 100px;
            background: #fff;
            bottom: -250px;
            border-radius: 50%;
            -webkit-animation: mymove3 6s linear infinite;
        }

        .rect9 {
            left: 3%;
        }

        .rect10 {
            left: 95%;
            -webkit-animation-delay: 0s;
        }

        .rect13,
        .rect14 {
            position: absolute;
            width: 0px;
            height: 0px;
            border: solid 40px transparent;
            border-bottom: solid 40px #fff;
            bottom: -150px;
            -webkit-animation: mymove4 6s linear infinite;
        }

        .rect13 {
            left: 45%;
            border-bottom: solid 65px #fff;
            -webkit-animation-delay: 0.6s;
        }

        .rect14 {
            left: 72%;
            border-bottom: solid 120px #fff;
            -webkit-animation: mymove5 6s liner infinte;
            -webkit-animation-delay: 1s;
        }

        .rect11,
        .rect12 {
            position: absolute;
            width: 0px;
            height: 0px;
            border: solid 40px transparent;
            border-bottom: solid 40px #fff;
            bottom: -150px;
            -webkit-animation: mymove5 6s linear infinite;
        }

        .rect11 {
            left: 30%;
        }

        .rect12 {
            left: 65%;
            border-bottom: solid 60px #fff;
            -webkit-animation-delay: 1.3s;
        }

        .rect15 {
            position: absolute;
            width: 300px;
            height: 300px;
            background: #fff;
            bottom: -400px;
            -webkit-animation: mymove3 6s linear infinite;
        }

        .rect15 {
            left: 55%;
        }

        .rect17 {
            position: absolute;
            width: 150px;
            height: 150px;
            background: #fff;
            bottom: -400px;
        }

        @-webkit-keyframes mymove2 {
            0% {
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: rotate(540deg);
                opacity: 0.5;
                bottom: 540px;
            }
        }

        @-webkit-keyframes mymove3 {
            0% {
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: rotate(720deg);
                opacity: 0.5;
                bottom: 540px;
            }
        }

        @-webkit-keyframes mymove4 {
            0% {
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: rotate(720deg);
                opacity: 0.5;
                bottom: 540px;
            }
        }

        @-webkit-keyframes mymove5 {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0.5;
                bottom: 540px;
            }
        }
    </style>
</head>
<body>
<section id="rotating-section">
    <div id="rotating-animation">
        <div>
            <?php foreach ($images as $index => $image): ?>
                <div class="rect<?php echo $index + 1; ?>" style="-webkit-animation-delay: <?php echo $index * 0.6; ?>s;">
                    <img src="<?php echo $image; ?>"/>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

</body>
</html>
