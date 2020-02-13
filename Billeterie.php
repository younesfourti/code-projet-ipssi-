<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #E8E8E8;
        }

        .box {
            width: 550px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            border-radius: 15px;
            border: 3px solid #191919;
        }

        .box p {
            color: black;
            text-transform: uppercase;
            font-weight: 500;

        }
        .box h1 {
            color: black;
            text-transform: uppercase;
            font-weight: 500;
           text-decoration-line: underline ;
        }

        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #EC0433;
            padding: 14px 10px;
            width: 260px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            width: 320px;
            border-color: #003b6e;
        }

        .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            margin-left: 5px;
            margin-right: 5px;
            border: 2px solid #EC0433;
            padding: 14px 40px;
            outline: none;
            color: #EC0433;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
            display: inline-block;
            width: 160px;
        }

        .box input[type="submit"]::placeholder {
            text-align: center;
        }

        .box input[type="submit"]:hover {
            background: #003b6e;
            color: #E8E8E8;
            border: 2px solid #E8E8E8;
        }
    </style>
</head>

<body>
<?php include("code_header.php");?>
    <form class='box' action="achat.php" method="post">
        <h1> billetrie </h1>
        <br> <br>

        <p>billet pour les match de PSG vs marseille
            <select name="" id="pay" for="pays">
                <?php

                for ($i = 1; $i <= 20; $i++) {
                    echo "<option value='$i'>$i PLACE</option>";
                }

                ?>
        </p>
        
        </select>
        <br><br>
        <p>billet pour les match de PSG vs TOULOUSE
            <select name="" id="pay" for="pays">
                <?php

                for ($i = 1; $i <= 20; $i++) {
                    echo "<option value='$i'>$i PLACE</option>";
                }

                ?>
        </p>

        </select>


        <br><br><br><br>
        <input type="submit" name="" value ="acheter">
    </form>



</body>

</html>
