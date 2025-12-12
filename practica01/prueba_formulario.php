<?php
include 'formulario.php';

$estructura_formulario = [
    "Nombre" => "text",
    "Email" => "email",
    "Edad" => "number",
    "Acepta politica de seguridad" => "checkbox"
];

formulario($estructura_formulario);
?>