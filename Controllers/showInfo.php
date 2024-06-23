<?php

require_once ('../Models/consultas.php');

function showProductos($text)
{
    $objConsultas = new Consultas();

    $tblProductos = $objConsultas->arrayProductos($text);

    $filas = $tblProductos['filas'];

    if ($filas == 1) {
        $resultado = $tblProductos['resultado'];
        
        echo '
        <h2>'.$resultado["nombre"].'</h2>
        ';
    } else {
        $resultados = $tblProductos['resultados'];

        foreach ($resultados as $producto) {
            echo '
            <h2>'.$producto["nombre"].'</h2>
            ';
        }
    }
}