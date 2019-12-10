<?php

    require('db.php');
    

    $carrera = $_POST["carrera"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $edad = $_POST["edad"];
    $nacionalidad = $_POST["nacionalidad"];
    $tituloSecundario = $_POST["tituloSecundario"];
    $nroDeRegistro = $_POST["nroDeRegistro"];
    $expedidoPor = $_POST["expedidoPor"];
    $direccion = $_POST["direccion"];
    $telefonoFijo = $_POST["telefonoFijo"];
    $celular = $_POST["celular"];
    $correoElectronico = $_POST["correoElectronico"];
    $diaTurno = '20201009';
    $horaTurno = '09:30';
    $result = pg_query($db_connection, "Insert into Registros (nombre,apellido,email,dni,diaturno,horaturno,carrera)values('dario','swidzinski','dsw@hotmail.com',2,'20191220','10:15','progrmacion')"; //('"+$nombre+"','"+$apellido+"','"+$email+"',"+$dni+",'"+$diaTurno+"','"+$horaTurno+"','"+$carrera+"'");
    echo $result;

?>


