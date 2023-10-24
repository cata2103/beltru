<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
    <script src="https://kit.fontawesome.com/565b8f543a.js" crossorigin="anonymous"></script>
<title>MySQL</title>
</head>

<body>
<body style="background-image: url(imagenes/fondos/desktop-wallpaper-cubist-art-cubism.jpeg) ; backdrop-filter: blur(20px) ;  filter: brightness(0.9)">
<nav class="navbar navbar-expand-lg fs-5"           style="background-color: #6a6735;"                                >
        <div class="container-fluid">
            <div class="w-25 d-flex justify-content-lg-center">
                <a class="navbar-brand" href="index.html"> <img src="imagenes/descarga (1).png"  width="auto" height="100px" align="center" class="d-none d-sm-block"></a>
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
<br>


































































































































































<?php
	include('conexion.php');

	$buscar = $_POST['busqueda'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
?>
<article style="width:60%;margin:0 auto;border:solid;padding:10px" >














	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'];
			echo $resultados['bio'];
			echo $resultados['foto'];
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>










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



















</body>
</html>