<?php

require_once ('conexionBd.php');

class Consultas
{
    public function arrayProductos($text)
    {
        $sql = "SELECT * FROM productos WHERE nombre LIKE :nombre";

        $objConexionBd = new ConexionBd();
        $conexion = $objConexionBd->getConexion();

        $sqlPrepared = $conexion->prepare($sql);
        $nombreConComodines = "%" . $text . "%";
        $sqlPrepared->bindParam(":nombre", $nombreConComodines);
        $sqlPrepared->execute();

        if ($sqlPrepared->rowCount() == 1) {
            return [
                'resultado' => $sqlPrepared->fetch(),
                'filas' => 1
            ];
        } else {
            return [
                'resultados' => $sqlPrepared->fetchAll(),
                'filas' => 2
            ];
        }
    }

    public function move($text) {
        echo '
        <script>
            location.href="../Views/productos.php?text='.$text.'";
        </script>
        ';
    }
}