<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venta de ropa</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="css/whatsapp.css">

    <link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="http://i.icomoon.io/public/temp/7d96e2500b/UntitledProject7/style.css">
    <link rel="stylesheet" href="fonts.css">
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="menu.js"></script>
</head>

<body>
    <a href="index.html" class="floatlogo" target="_parent"></a>
    <a href="https://api.whatsapp.com/send?phone=51954355704&text=Hola!%20Solicito%20informaci%C3%B3n%20" class="floatwa" target="_blank"></a>
    <header>
        
        <div class="menu_bar">
           <a class="bt-menu" href="#"><span class="icon-list2"></span></a>
		</div>

		<nav>
			<ul>
				<li><a href="index.html"><span class="icon-house"></span>Inicio</a></li>
				<li><a href="#"><span class="icon-suitcase"></span>Damas</a></li>
				<li><a href="#"><span class="icon-rocket"></span>Caballeros</a></li>
				<li><a href="#"><span class="icon-rocket"></span>Niños</a></li>
                <li><a href="#"><span class="icon-rocket"></span>Niñas</a></li>
                <li><a href="#contacto"><span class="icon-mail"></span>Contacto</a></li>
			</ul>
		</nav>
	
        <section class="textos-header">
            
            <h2>PARA TU PROXIMA COMPRA!</h2>
            <div class="margen-form">
                <form name="f1form" id="f1form" method="post" onSubmit="return validate(this,1)" action="confirmar1.php" >
                            
                    <div class="form">
                        <p class="titulo-form">Recibe tu cupón</p>
                        <p class="titulo2-form">y tendras un descuento super especial</p>
                        <div class="grupo">
                            <input type="text" name="nombres1" id="nombres1" required><span class="barra"></span>
                            <label>Nombre</label>
                        </div>
                        <div class="grupo">
                            <input type="email" name="email1" id="email1" required><span class="barra"></span>
                            <label>Email</label>
                        </div>
                        <div class="grupo">
                            <input type="number" name="telefono1" id="telefono1" required><span class="barra"></span>
                            <label>Telefono</label>
                        </div>
                        
                        <button name="btn1_enviar" type="submit" id="btn1_enviar">Lo Quiero</button>
                        <p class="titulo1-form"></p>
                    </div>
                </form>
            </div>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Recomendados para ti</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <p></p><p></p>
                    <h3><span>1</span>Las mejores Prendas de vestir</h3>
                    
                    <p>Encuentra la mejor selección de ropa para Damas, caballeros ,niños y niñas.</p>
                    <h3><span>2</span>Las mejores promociones</h3>
                    <p>Selección diaria de prendas de las mejores marcas, con ofertas y descuentos .</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">CATÁLOGOS DE ROPA</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/img1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Ver catálogo de </br>
                                Ropa para Damas</p>
                        </div>
                    </div>
                    <div class="imagen-port" aling="center">
                        <img src="img/img2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Ver catálogo de </br>
                                Ropa para Caballeros</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Ver catálogo de </br>
                                Ropa para Niños</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Ver catálogo de </br>
                                Ropa para Niñas</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">OPINIONES DE NUESTROS CLIENTES</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/face1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>bladimir Castillo</h4>
                        <p>Una maravilla encontrar una tienda de moda y calidad. Trato muy amable.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/face2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Lorena Cruzado</h4>
                        <p>El personal es algo excepcional y el trato exquisito hacia el cliente merece la pena visitar la tienda</p>
                    </div>
                </div>
            </div>
        </section>
      
        <section id="contacto" class="contenedor sobre-nosotros">
            <h2 class="titulo">Contactanos</h2>
            <div class="contenedor-sobre-nosotros">
                
                <form name="fform" id="fform" method="post" onSubmit="return validate(this,1)" action="confirmar.php" >
                    
                        <div class="grupo">
                            <input type="text" name="nombres" id="nombres" required><span class="barra"></span>
                            <label>Nombres:</label>
                        </div>
                        <div class="grupo">
                            <input type="email" name="email" id="email" required><span class="barra"></span>
                            <label>Email:</label>
                        </div>
                        <div class="grupo">
                            <input type="number" name="telefono" id="telefono" required><span class="barra"></span>
                            <label>Telefono:</label>
                        </div>
                        <div class="grupo">
                            <textarea name="mensaje" id="mensaje" rows="3" required></textarea><span class="barra"></span>
                            <label>Consulta:</label>
                        </div>
                        
                        <button type="submit" name="btn_enviar" id="btn_enviar">Enviar</button>
                        <div class="titulo1-form">

                        <?php

							$nombres = $_POST['nombres'];
							$email = $_POST['email'];
							$telefono = $_POST['telefono'];
							
							$header = 'From: ' . $email . " \r\n";
							$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
							$header .= "Mime-Version: 1.0 \r\n";
							$header .= "Content-Type: text/plain";
							$mensaje = " \r\n";
							$mensaje .= "-------Comentario Web -------". " \r\n";
							$mensaje .= " \r\n";
							$mensaje .= "De : " . $nombres . " [ ". $email . " ]". " \r\n";
							$mensaje .= "Telefono: " . $telefono . " \r\n";
							$mensaje .= " \r\n";
							$mensaje .= "Enviado el : " . date('d/m/Y', time()) . " \r\n";
							$mensaje .= " \r\n";
							$mensaje .= "Mensaje : " . $_POST['mensaje'] . " \r\n";
							
							
							
							$para = 'jucova.jc22@gmail.com';
							$asunto = 'Comentarios Proyecto spark';
							
							mail($para, $asunto, utf8_decode($mensaje), $header);
							
							echo 'Gracias, se ha enviado con exito.';
						?>

                        </div>
                </form>

                <div class="contenido-textos">
                    <p></p><p></p>
                    <h3><span>1</span>Los mejores productos</h3>
                    <p>Cuéntanos qué necesitas, nos pondremos en contacto contigo en breve.</p>
                    <h3><span>2</span>Horarios de Atención:</h3>
                    <p>Lunes a Viernes de 8am – 8pm
                        Sábado de 8am – 12pm
                        Tumbes, Perú</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>+51 954355704</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>modayestilo@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Dirección</h4>
                <p>Tumbes, Perú</p>
            </div>
            <div class="content-foo">
                <h4>Redes Sociales</h4>
                <a href="https://www.facebook.com/" target="_blank"><img src="img/ico_facebook.png"  alt=""></a>  <a href="https://www.instagram.com/" target="_blank"><img src="img/ico_instagram.png" alt=""></a>
                <p></p>
            </div>
        </div>
        <p class="titulo-final">MODA & ESTILO &copy;  Copyright 2020. Todos los derechos reservados.</p>
    </footer>
</body>

</html>