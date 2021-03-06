<?php

# Texto (string)
// es el tipo que contiene solo texto
$mensaje = 'Hola amigo, como estás?';

# Numerico (int, number)
// representa los numeros
$mensaje = 123;

# Flotantes, Dobles (float or double)
// representan los numeros que contienen decimales
$mensaje = 123.23;

# Boleanos (bool)
// Son una manera unica de decir si algo es VERDADERO o FALSO
$mensaje = true;
$mensaje = false;


# Arreglo (array)
// (datos agrupados, en otros lenguajes de programacion se le llaman "Colecciones de Datos"), donde los elementos que confirman este grupo pueden ser de cualquier tipo
$mensaje = [];
$mensaje = array();

# Objeto (object)
// una forma de representar algun objeto de la vida real o digital en una forma =
// Objeto PRODUCTO (el objeto tiene atributos (el nombre, tamaño, etc) y tiene acciones (puede ser comprado, vendido, almacenado, agrupado con otros))
$mensaje = new stdClass();


# Nulo (null)
$mensaje = null;
// representa la NADA


# Recurso
// son los elementos externos a tu area de trabajo = archivos externos, base de datos, ftp, ssh
//$mensaje = resource;


# Operadores lógicos > https://www.php.net/manual/es/language.operators.logical.php
# Operadores aritméticos > https://www.php.net/manual/es/language.operators.arithmetic.php


$mensaje = "Hola";

$dia_de_hoy = date("d-m-Y");

$ejercicios_por_dia["11-05-2020"] = [
    [
        'duracion' => 30,
        'nombre' => "BURPEES",
        'descripcion' => "Cuclillas atrás, cuclillas y salto",
    ],
    [
        'duracion' => 30,
        'nombre' => "SENTADILLA SUMO",
        'descripcion' => "Sentadilla elevo rodilla arriba",
    ]
];


if (isset($ejercicios_por_dia[$dia_de_hoy])) {
    foreach ($ejercicios_por_dia[$dia_de_hoy] as $ejercicio) {
        echo $ejercicio['duracion']."\n"
        . $ejercicio['nombre']."\n"
        . $ejercicio['descripcion']."\n--------------\n";
    }



} else {
    echo "no se han cargado aun los ejercicios para el dia de hoy";
}
