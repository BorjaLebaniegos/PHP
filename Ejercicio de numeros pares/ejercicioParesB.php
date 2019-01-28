

<?php

if (!isset($_GET['Numero'])) {
	echo "ERROR: no se puede.....";
}

$Numero = $_GET['Numero'];

if ($Numero % 2 == 0) {  
    echo "<h1>El Número " .$Numero. " es PAR</h1>\n";
} else {
    echo "<h1>El Número " .$Numero. " Es IMPAR</h1>\n";
}

 
?>
