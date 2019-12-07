<?php
    $id = $_GET['id'];

    switch($id) {
        case '1':
            $data = array('nombre' => 'Smart TV LCD LG 49 " Full HD 49LK5700', 'precio' => 43999, 'imagen' => 'http://d34zlyc2cp9zm7.cloudfront.net/products/8cd9fbab0737d1c335b0f232d72dd8b379b2b8bfa59973d1e3cdc5e72ad06d10.webp_500', 'descripcion' => 'FULL HD, WIFI, NETFLIX', 'opiniones' => '4.7', 'comentarios' => array('Excelente TV', 'Cumple con todos los requerimientos que buscaba del producto'));
            break;
        case '2':
            $data = array('nombre' => 'Smart TV Samsung 43 " Full HD UN43J5290AGCZB', 'precio' => 27999, 'imagen' => 'http://d34zlyc2cp9zm7.cloudfront.net/products/a1e0786fa84113c085d65257606b18195e3bad55b3d6abadde696654ed5a5b30.webp_500', 'descripcion' => 'FULL HD, WIFI, NETFLIX', 'opiniones' => '4.7', 'comentarios' => array('Excelente TV', 'Cumple con todos los requerimientos que buscaba del producto'));
            break;
        case '3':
            $data = array('nombre' => 'Smart TV Samsung 32 " HD UN32J4290AGCZB', 'precio' => 17999, 'imagen' => 'http://d34zlyc2cp9zm7.cloudfront.net/products/67862fabe5ff35a9b3f15b5dfc156124297108b44f64edd8b944c6fa374f2641.webp_500', 'descripcion' => 'HD, WIFI, NETFLIX', 'opiniones' => '4.7', 'comentarios' => array('Excelente TV', 'Cumple con todos los requerimientos que buscaba del producto'));
            break;
        case '4':
            $data = array('nombre' => 'Heladera No Frost Whirlpool WRE57K1 Acero Inoxidable 480 Lts.', 'precio' => 93999, 'imagen' => 'http://d34zlyc2cp9zm7.cloudfront.net/products/cbd1185640c826d51582d0f7c11ab90d7471ee7a97ee837d654362bb104c74d1.webp_500', 'descripcion' => '18 CUOTAS', 'opiniones' => '4.7', 'comentarios' => array('Muy cómoda y espaciosa. Cero ruidosa. Los vegetales se conservan frescos mucho tiempo. El turbo freezer realmente funciona', 'Cumple con todos los requerimientos que buscaba del producto'));
            break;
        case '5':
            $data = array('nombre' => 'Heladera con Freezer Philco PHCT260B Blanca', 'precio' => 27999, 'imagen' => 'http://d34zlyc2cp9zm7.cloudfront.net/products/2b3f4de4d648b2c7786fa9ffe028701a9d80190510cee2afd369c9a5eca7328c.webp_500', 'descripcion' => '12 CUOTAS', 'opiniones' => '4.7', 'comentarios' => array('Muy cómoda y espaciosa. Cero ruidosa. Los vegetales se conservan frescos mucho tiempo. El turbo freezer realmente funciona', 'Cumple con todos los requerimientos que buscaba del producto'));
            break;
        case '6':
            $data = array('nombre' => 'Heladera No Frost Samsung RB30K3010SS Inoxidable', 'precio' => 100999, 'imagen' => 'http://d34zlyc2cp9zm7.cloudfront.net/products/202375918790af0b9a73b1d44c682ff365a3d61f66742a181bb15e0eff9e6113.webp_500', 'descripcion' => 'INVERTER, 12 CUOTAS', 'opiniones' => '4.7', 'comentarios' => array('Muy cómoda y espaciosa. Cero ruidosa. Los vegetales se conservan frescos mucho tiempo. El turbo freezer realmente funciona', 'Cumple con todos los requerimientos que buscaba del producto'));
            break;
    }

    echo(json_encode($data));
?>