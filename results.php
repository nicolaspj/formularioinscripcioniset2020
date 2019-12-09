<?php
    require('pdf/fpdf.php');
    
    require('pdf/makefont/makefont.php');

     MakeFont('pdf/fonts/helvetica.ttf','ISO-8859-2');  
    

   class PDF extends FPDF
   {
       
       function header()
       {
           $this->Image('LogoIset.png',10,8,33);
       }
   }
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
    $pdf->SetFont('helvetica','B',12);
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
    $pdf->Cell(80,10,'Nro de Registro: ',0,0,'L');
    $pdf->Cell(80,10,$nroDeRegistro,1,1,'L');
    $pdf->Cell(80,10,'Expedido Por: ',0,0,'L');
    $pdf->Cell(80,10,$expedidoPor,1,1,'L');
    $pdf->Cell(80,10,'Dirección: ',0,0,'L');
    $pdf->Cell(80,10,$direccion,1,1,'L');
    $pdf->Cell(80,10,'Telefono Fijo: ',0,0,'L');
    $pdf->Cell(80,10,$telefonoFijo,1,1,'L');
    $pdf->Cell(80,10,'Celular: ',0,0,'L');
    $pdf->Cell(80,10,$celular,1,1,'L');
    $pdf->Cell(80,10,'Correo Electronico: ',0,0,'L');
    $pdf->Cell(80,20,$correoElectronico,1,1,'L');
    $pdf->Cell(80,10,'Firma',0,0,'L');
    $pdf->Cell(80,20,$firma,1,1,'L');

    $pdf->Output();
?>


