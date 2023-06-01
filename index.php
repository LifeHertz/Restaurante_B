<?php
    $conexion = oci_connect("system","Semestre03","localhost/xe");
    if (!$conexion) {
        $m = oci_error();
        echo $m['message'], "n";
        exit;
    } else {
        echo "Conexion con exito a Oracle!"; }
?>