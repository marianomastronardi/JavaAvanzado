<?php
    $callback = $_GET['callback'];

    echo ("$callback({ item: { nombre: 'carlos', apellido: 'perez' } });");
?>