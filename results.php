<?php
    require('pdf/fpdf.php');

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
    //$firma = $_POST["firma"];
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(50,10,'Carrera: ',0,0,'L');
    $pdf->Cell(70,10,$carrera,0,1,'C');
    $pdf->Ln();
    $pdf->Cell(80,10,'Nombre: ');
    $pdf->Cell(80,10,$nombre,1,1,'L');
    $pdf->Cell(80,10,'Apellido: ',0,0,'L');
    $pdf->Cell(80,10,$apellido,1,1,'L');
    $pdf->Cell(80,10,'DNI: ',0,0,'L');
    $pdf->Cell(80,10,$dni,1,1,'L');
    $pdf->Cell(80,10,'Edad: ');
    $pdf->Cell(80,10,$edad,1,1,'L');
    $pdf->Cell(80,10,'Nacionalidad: ',0,0,'L');
    $pdf->Cell(80,10,$nacionalidad,1,1,'L');
    $pdf->Cell(80,10,'Titulo Secundario: ',0,0,'L');
    $pdf->Cell(80,10,$tituloSecundario,1,1,'L');
    $pdf->Output();
?>


<html>
<body>

Bienvenido <?php echo $_POST["nombre"]; ?> al ISET<br>
Tu apellido es: <?php echo $_POST["apellido"]; ?> <br>
Te anotaste en la carrera: <?php echo $_POST["carrera"]; ?> <br>
</body>
</html>