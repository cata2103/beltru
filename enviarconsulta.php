<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cubismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
    <script src="https://kit.fontawesome.com/565b8f543a.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(imagenes/fondos/desktop-wallpaper-cubist-art-cubism.jpeg) ; backdrop-filter: blur(20px) ;  filter: brightness(0.9)">
    
    <nav class="navbar navbar-expand-lg fs-5"           style="background-color: #6a6735;"                                >
        <div class="container-fluid">
            <div class="w-25 d-flex justify-content-lg-center">
                <a class="navbar-brand" href="index.html"> <img src="imagenes/descarga (1).png"  width="auto" height="100px" align ="center" class="d-none d-sm-block"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav w-75 justify-content-around"                    >


                  

                    <li class="nav-item">
                        <a class="nav-link" href="historia.html">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artistas.html">Artistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="obras.html">Obras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lifestyle.html">Datos curiosos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="galerias.html">Galerias</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>

                  






                </ul>
            </div>
        </div>
    </nav>
<br>




<main class="navbar-h flex justify-center items-center h-screen">
	
    <?php













      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $email=$_POST['email'];
      $comentario=$_POST['mensaje'];

      $destino="mail@mail.com";
      $asunto="Contacto desde el sitio";
      $mensaje="Nombre: ".$nombre." Email: ".$email." Mensaje: ".$comentario;

      $header="From: ".$nombre."<".$email.">";

      $enviado = mail($destino,$asunto,$mensaje,$header);

      if($enviado == true){
        echo "<div class='flex flex-col items-center gap-spacerS text-crema text-center'>
        <h1 class='text-fontL font-bold'>Gracias por contactarse!</h1>
        <p class='text-fontS'>En los proximos días recibirás una respuesta via mail</p>
        <a href='index.html' class='bg-crema text-azul font-bold hover:text-crema hover:bg-azul px-[1rem] py-[0.2rem] border-4 border-crema hover:border-crema transition-all duration-300 rounded w-[180px] text-center'>Regresar</a>
        </div>";
      }else{
        echo "<div class='flex flex-col items-center gap-spacerS text-crema text-center'>
        <h1 class='text-fontL font-bold'>¡Ocurrió un error!</h1>
        <a href='index.html' class='bg-crema text-azul font-bold hover:text-crema hover:bg-azul px-[1rem] py-[0.2rem] border-4 border-crema hover:border-crema transition-all duration-300 rounded w-[180px] text-center'>Regresar</a>
        </div>";
      }

      include("conexion.php");
      $consulta = mysqli_query($conexion, "INSERT INTO contacto VALUES ( 0, '$nombre', '$apellido', '$email','$comentario')") or die(mysqli_error($conexion));
    ?>
    </main>
    








    
    <footer class="d-flex justify-content-between py-5">
        <p>Copyright © catalina </p>
        <div class="d-flex w-25 justify-content-evenly me-5">
            <a href="#">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-github"></i>










            </a>
        </div>

      


        <div class="footer_search-logo">
            <a href="#">
                <img src="img/search-13-32.png" alt="">
            </a>
        </div>
        <form class="footer_search-bar" action="resultados_buscar.php" method="POST">
            <input type="text" id="search" placeholder="buscar..." name="busqueda" style="margin-right: 40px;">
            <input type="submit" value="Enviar">
         </div>







    </footer>





 




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>