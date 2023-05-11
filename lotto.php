<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.pngplay.com/wp-content/uploads/2/Clover-PNG-Free-File-Download.png">
    <title>Lottó</title>
    <style>
        body{
            background: #9fce9f;
            text-align: center;
            font-family: sans-serif;
        }
        header{
            background: url("https://t4.ftcdn.net/jpg/01/05/99/33/360_F_105993320_bN9bBIfT0jhC343FXOXaAJyLUetI2r6U.jpg");
            height: 100px;
            width: 100%;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        h1{
            text-align: center;
            padding-top: 30px ;
            font-size: 50px;
        }
        .shapeborder {
            border:3px solid black;
        }
        .circle {
            border-radius: 50%;
            margin-right: 10px;
            margin-left: 10px;
            margin-bottom: 20px;
        }
        .outer {
            width: 100px;
            height: 100px;
            position:relative;
        }
        .inner {
            background-color: #42b422;
            text-align: center;
            position: relative;
        }
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            font-size: 35px;
            padding-bottom: 10px;
            margin: 50px 100px 50px 100px;
        }
    </style>
</head>
<body>
    <header>
        <h1>E heti lottó nyerőszámok</h1>
    </header>
    <div class="flex-container">
        <?php
            if(isset($_GET['sorsolando']) && isset($_GET['golyok'])){
                $sorsolando=$_GET['sorsolando'];
                $golyok=$_GET['golyok'];
            }else{
                $sorsolando=30;
                $golyok=100000;
            }
            $tomb=array();
            for($i=1;$i<=$sorsolando;$i++){
                $random = rand(1, $golyok);
                while(in_array($random, $tomb)){
                    $random=rand(1, $golyok);
                }
                array_push($tomb, $random);
            }
            sort($tomb);
            foreach ($tomb as $szam) {
                echo "<div class='shapeborder circle outer inner'><b><p>$szam</p></b></div>";
            }
        ?>
    </div>
</body>
</html>
