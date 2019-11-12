<?php
    $db_connection = pg_connect("host=ec2-174-129-253-47.compute-1.amazonaws.com dbname=dd9lraajhtiljc user=xeuhldijwddzdw password=3309ad02e81eebea23fdb7fbd8ce55cd78a9f6db4d6ea705678ba9c070192dcc");
    $result = pg_query($db_connection, "SELECT 'lastname'");
?>
  
 <!--
 ?php
   //Reseteamos variables a 0.
   $selec_carrera = $email = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $selec_carrera = $_POST['selec_carrera'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];   
      $mensaje = $_POST['mensaje'];
      $para = "emailiset@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto:Inscripcion" . $subject;
      $msjCorreo .= "\r\n";
      
      

    if (mail($para, $subject, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>INSCRIPCION ISET</title>
    <!--https://www.malot.fr/bootstrap-datetimepicker/-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
     <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
</head>

<body>

     <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" >INSCRIPCION ISET 2020</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $result; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Descarga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <style>
    h1, h2{
      text-align: center;
    }
    label{
      font-weight: bold;
    }
  </style>
      <h1>INSTITUTO SUPERIOR DE ESTUDIOS TECNICOS</h1>
      <h2>ENTREGA DE DOCUMENTACION</h2>    
     <br>
     <form method="post" action="enviar.php">
     <div class="row">
          <div class="col">
            <div class="container-fluid">
              <label for="carrera">Seleccion de carrera: </label>
                      <select class="form-control" id="selec_carrera">
                        <option value="alimentos"> Manipulacion de alimentos</option>
                        <option value="instrumetacion">Instrumetacion quirurgica</option>
                        <option value="programacion">Tecnico en programación</option>
                      </select>
            </div>
          </div>
       </div>

    <form>
        <center><div class="row1" id="email">
            <div class="col">
                <div class="container-fluid">
                   Correo electronico: <input type="text" name="email" required="">
                </div>
            </div> 
        </div>
    </center>
    </form>
   
               <h2>ESCOJA DIA A RESERVAR</h2>

        <script type="text/javascript"
         src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
        </script> 
        <script type="text/javascript"
         src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
        </script>
        <script type="text/javascript"
         src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
        </script>
        <script type="text/javascript"
         src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
        </script> 
        <script >
            $.fn.datetimepicker.dates['en'] = {
        days: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"],
        daysShort: ["Dom", "Lun", "Mar", "Mier", "Jue", "Vie", "Sab", "Dom"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octobre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy"
    };
        </script>

          
          
        <div class="row"style="padding-top: 20px" align="center">
          <div class="col">
            <div class="container-fluid"> 
              <div id="datetimepicker4" class="input-append">
                <input data-format="yyyy-MM-dd" type="text"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
                </span>
              </div>
            </div>
          </div>
        </div>  
        <script type="text/javascript">
                
              $(function() {
                $('#datetimepicker').datetimepicker('setDaysOfWeekDisabled', [0,6]);
                $('#datetimepicker4').datetimepicker({
                  pickTime: false
               
                });
              });
              $('#datetimepicker').datetimepicker('setDaysOfWeekDisabled', [0,6]);
       </script>

     </form>
  <center>  <button id="Enviar" type="submit" name="enviar" action="enviar.php" method="POST" >Enviar</button>  </center>
  
     
  
     
</body>

</html>