<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <!-- Intégration du header --> 
    <?php require_once(__DIR__ . '../header.php'); ?>
<main>
    <article id="detail-oeuvre">
    
    <?php 
    // Appel du tableau
        require_once(__DIR__ . '../oeuvres.php');
    
    // Récupère l'identifiant de l'oeuvre
    $id = $_GET['id'];
    
    // Recherche les infos sur l'oeuvre
        foreach($oeuvres as $values){
        if( $values['oeuvreNum'] == $id ){
            echo "<div id='img-oeuvre'>
                    <img src=" . $values['scrImg'] . " alt=" . $values['title'] . ">
                    </div>
                <div id='contenu-oeuvre'>
                <h1>" . $values['title'] . "</h1>
                <p class='description'>" . $values['author'] . "</p>
                <p class='description-complete'>" . $values['description'] . "</p>
                </div>";
            break;
            }
        }
    ?>

    </article>
</main>
    <!-- Intégration du footer --> 
    <?php require_once(__DIR__ . '../footer.php'); ?>
</body>
</html>