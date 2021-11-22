<?php
    require_once "./entity/ImagenGaleria.php";
    require_once "./database/QueryBuilder.php";
    require_once "./database/Connection.php";
    require_once "./core/App.php";
    require_once "./repository/ImagenGaleriaRepository.php";

    $connection = Connection::make();
    $queryBuilder = new QueryBuilder($connection);

    try{
        $imagenes = $queryBuilder->findAll('imagenes', 'imagenGaleria');
        foreach ($imagenes as $imagen){
            echo 'id: ' . $imagen->getId() . '<br>';
            echo 'Imagen: ' . $imagen->getUrlGallery() . '<br>';
            echo 'Descripcion: ' . $imagen->getDescription() . '<br>';
        }
    }catch(QueryException $qe){
        die($qe->getMessage());
    }
?>