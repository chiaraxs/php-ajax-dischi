<?php

// importo i data dal mio data.php per chiamata api
include "../database/data.php";

// stringa necessaria: serve per specificare che le informazioni inviate sono di tipo json 
header("Content-Type: application/json");

// stampo e trasformo il mio array php in oggetti json 
echo json_encode($disks);


?>