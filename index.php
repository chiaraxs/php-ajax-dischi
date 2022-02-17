<?php

include __DIR__ . "/database/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Disks</title>

    <!-- LINK BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- HEADER -->
    <header class="container-fluid">
        <div class="logo-img">
            <img src="./img/spotify-logo.png">
        </div>
    </header>
    <!-- / HEADER -->



    <!-- MAIN -->
    <main class="container-fluid">
        <div class="container container-cards d-flex flex-wrap pt-5">

            <!-- php -->
            <?php
            foreach ($disks as $disk) {
                echo
                "<div class='card text-center mb-3'>
                        <div class='img'>
                            <img class='img-fluid' src='{$disk['poster']}' >
                        </div>
                        <div class='text text-light'>
                            <h5 class='text-uppercase fw-bold fs-6 mt-3'>{$disk['title']}</h5>
                            <p class='text-secondary'>{$disk['author']} <br>
                            {$disk['year']}</p>
                        </div>
                </div>";
            }
            ?>
            <!-- / php -->
        </div>
    </main>
    <!-- / MAIN -->


</body>

</html>



<!-- 
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
-->