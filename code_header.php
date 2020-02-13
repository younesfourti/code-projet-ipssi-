<!doctype html>
<html>

<head>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <title>Menu Déroulant</title>
    <meta charset="utf-8">
    <style>
        nav {
            width: 100%;
            height: 80px;
            background-color: #183152;
            margin: 0;
            padding: 0;
            position: fixed;
            top: 0;
            border-bottom: 3px solid rgb(231, 13, 13);
            z-index: 1;

            /* positionne le menu à droite */
        }

        .menu {
            list-style-type: none;
        }

        .menu>li {
            display: inline-block;
            /* met les "li" en ligne */
            margin: 5px;
        }

        .menu>li>a {
            display: inline-block;
            text-decoration: none;
            color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            font-size: 1.5em;
        }

        .menu>li:hover {
            border-bottom: 4px solid red;
            /* Ajoute une bordure de bas de couleur bleue au survol de la souris  */
        }

        .services {
            position: relative;
            /* Pour positionner le sous menu par rapport à son parent ".services" */
        }

        .sous-menu {
            list-style-type: none;
            position: absolute;
            left: 0;
            width: 100%;
            max-height: 0;
            /* Pour cacher le sous menu */
            overflow: hidden;
            /* Pour cacher le contenu du sous menu */
            transition: max-height 0.5s ease;
            /* transition appliquée sur la propriété max-height */
            padding: 0;
            margin: 5px 0;
        }

        .services:hover>.sous-menu {
            max-height: 165px;
            /* Pour afficher le menu après le "hover" */

        }

        .sous-menu>li {
            text-align: center;
            background-color: #183152;
            line-height: 1.5em;
            font-size: 1em;
            padding: 5px 0;
            border: 1px rgb(121, 51, 51) solid;
        }

        .sous-menu>li>a {
            text-decoration: none;
            display: inline-block;
            width: 100%;
            color: #fff;
        }

        .sous-menu>li:hover {
            background: #39c;
        }
    </style>

</head>

<body>

    <header>
        <nav>
            <ul class="menu">



                </li>
                <li><a href="index.php" title="index">Accueil</a></li>
                <li><a href="contact.php" title="contact">Nous contacter </a></li>
                <li><a href="sponsors.php" title="sponsors">Sponsors</a></li>

                <li><a href="nouvelle.php" title="nouvelle">News</a></li>

                <li class="services"><a href="#" title=""><?php
                                                            if (isset($_SESSION['id'])) {
                                                            ?>
                            Bonjour <?= $_SESSION['lenom'], " ",   $_SESSION['leprenom']; ?>
                        <?php }
                        ?>
                        <?php
                        if (isset($_SESSION['id'])) {
                        ?>

                        <?php
                        } else {
                        ?>
                            compte
                        <?php
                        }
                        ?>
                    </a>
                    <ul class="sous-menu">
                        <li><a href="connexion.php" title="">Connexion</a></li>
                        <li><a href="inscription.php" title="">Inscription</a></li>
                        <li><a href="page1.php" title="">Afficher compte</a></li>
                        <li><a href="deconnexion.php" title=""><?php
                                                                if (isset($_SESSION['id'])) {
                                                                ?>Déconnexion
                            <?php
                                                                }
                            ?></a></li>



                    </ul>
                </li>
                <img src="photos/ipssi-white.png" style='float : right;
    width : 60px; height: 60px;'>

            </ul>
        </nav>
    </header>
</body>

</html>