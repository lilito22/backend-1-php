<?php

require_once "../class/persona.php";

$julieth = new Persona();

$julieth->saludar();
$julieth->pintar();

echo "<br><br>";

require_once "../class/animal.php";
$mascota = new perro();

$mascota->ladrar();
echo"<br>";
$mascota->comer();
