<?php

require_once ('../Models/consultas.php');

$text = $_POST["nombre"];

$objConsultas = new Consultas();

$move = $objConsultas->move($text);