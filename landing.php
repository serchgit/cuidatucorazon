<!DOCTYPE html>
<html lang="es">
  <head>
    <title>:LandingPage:</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="maqueta landing"/>
    <meta name="keywords" content="landigpage"/>
    <meta name="generator" content="2014.3.0.295"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,200&family=Roboto+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  </head>
  <style>
   
  </style>
  <body>
    <section class="bg-land pb-5">

      <div class="cont-cora m-auto">
        <img src="images/destellos.jpg" class="destellos" alt="">
        <figure>
          <img src="images/coracita.png" class="img-fluid cora" alt="">
          <h3>CUIDA TU<br>CORAZÓN</h3>
        </figure>

      </div>
      <div class="cont-info d-flex justify-content-center flex-wrap">
        <p class="w-100 text-center">CONGRESO DE JÓVENES Y JUVENILES 2023</p>
        <p class="w-100 text-center mb-0">27, 29, 30 DE NOV. Y 2 DE DIC.</p>
        <p class="w-100 text-center">HORARIO: 7:00 PM.</p>

        <p class="w-100 text-center mt-4">JESUCRISTO ES LA RESPUESTA I.B.R.</p>
      </div>
      
      
    </section>

<!-- Button Pregunta -->
<button type="button" class="btn btn-sm btn-dark btn-pregunta sticky-top" data-bs-toggle="modal" data-bs-target="#modPregunta">
  Hacer mi pregunta
</button>

<!-- Modal -->
<div class="modal fade" id="modPregunta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Dinos tu pregunta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <textarea class="form-control" name="pregunta" id="pregunta" cols="30" rows="2"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">Enviar</button>
      </div>
    </div>
  </div>
</div>
 
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      $(document).ready(function() {
          setTimeout(()=>{
            console.log("hola");

          },2500);
       
        
      });
    </script>
  </body>
</html>
