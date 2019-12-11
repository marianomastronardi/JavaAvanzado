<?php
    $curso = array(
        array(
            "nombre" => "Dato 1",
            "descripcion" => "Esto es informacion",
            "imagen" => "images/asd.jpg",
            "datos" => array(
                "uno",
                "dos",
                "tres"
            )
        ),
        array(
            "nombre" => "Dato 2",
            "descripcion" => "Esto es informacion",
            "imagen" => "images/asd.jpg",
            "datos" => array(
                "uno",
                "dos",
                "tres"
            )
        )  
    );
    
    echo json_encode($curso);
?>