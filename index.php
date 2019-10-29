<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
    <nav class="menu">
        <a class="nav" href="#project">Mes projets</a>
        <a class="nav" href="#technos">Mes technos</a>
        <a class="nav" href="#who">Qui suis-je ?</a>
        <a class="nav" href="#hire">Recrutez-moi</a>
    </nav>
</header>
<body>
    <div class="wrapper">
        
       <?php    require 'contenu/project.php';
                require 'contenu/technos.php'; ?>
        <div class="subwrapper">
            <?php   require 'contenu/who.php';
                    require 'contenu/hire.php'; ?>
        </div>
    </div>
</body>
<footer class="footer"></footer>
</html>