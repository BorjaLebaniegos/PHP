<?php

    $color=array('verde','rojo', 'blanco');
    $color_separado_comas = implode(", ", $color);

    sort($color);
    foreach ($color as $value) {
    echo "<li>$value</li>\n";
    echo "</ul>\n";
    }
    


  





?>
