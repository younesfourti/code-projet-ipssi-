<?php
session_start();
if (isset($_SESSION['id']) == false) {
    header('Location: connexion.php');
}



?>


<html>


<head>
    <title>connexion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\page1.css" />
</head>

<body>

    <h1>bienvenu</h1>
    <?php include("code_header.php"); ?>
    <table " border=" 0px">
        <tbody>
            <br>
            <br>

            <td> </td>
            </tr>
        </tbody>
    </table>
    <br>
    <?php
    
    ?>

    <form class='box' action='editionprofil.php' method='post'>
        <h1> votre compte </h1>
        <p><?php
       

            echo ("<p>prenom :  " . $_SESSION["leprenom"] . "</p>");

            ?> </p>
        <p><?php

            echo ("<p>nom :  " . $_SESSION["lenom"] . "</p>");

            ?> </p>
        <p><?php

            echo ("<p>mail : " . $_SESSION["lemail"] . "</p>");

            ?> </p>

        <input type="submit" name="" value="modifier les information">
    </form>
   
    </tbody>
    </table>

</body>

</html>










<!DOCTYPE html>
<html>

<head>

</head>

<body>


</body>

</html>
<?php
