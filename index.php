<?php 

    require_once 'Controladores/plantillaC.php';

    require_once 'Controladores/usuariosC.php';
    require_once "Modelo/usuariosM.php";

    require_once 'Controladores/carrerasC.php';
    require_once "Modelo/carrerasM.php";

    $plantilla = new Plantilla();
    $plantilla -> LlamarPlantilla();


?>