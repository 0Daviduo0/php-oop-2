<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce: Prodotti per animali</title>
</head>

<?php

    //Products
    require_once("Products/gioco.php");
    require_once("Products/cuccia.php");
    require_once("Products/vestito.php");
    require_once("Products/accessorio.php");
    require_once("Products/cibo.php");

    //Dogs category
    require_once("Categories/dogs.php");

    // Variabili
    require_once("Variables/variables.php");

    //Prodotti per i cani
    $DogsProducts = new Dogs(
        [$gioco1, $gioco2, $gioco3], 
        [$cuccia1, $cuccia2, $cuccia3, $trasportino1, $trasportino2, $trasportino3],
        [$maglione1, $maglione2, $maglione3, $maglione4,
        $cappotto1, $cappotto2, $cappotto3, $cappotto4,
        $maglietta1, $maglietta2, $maglietta3, $maglietta4,
        $tutu1, $tutu2, $tutu3, $tutu4],
        [$accessorio1, $accessorio2, $accessorio3],
        [$ciboCrock1, $ciboCrock2, $ciboCrock3, $ciboCan1, $ciboCan2, $ciboCan3]
    )

?>

<body>

    <h1>Prodotti per cani</h1>

    <?php

    echo $DogsProducts->getProducts();

    ?>

</body>
</html>