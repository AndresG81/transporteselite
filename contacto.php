<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELITE | CONTACT</title>
    <link rel="stylesheet" href="estilos/meetus.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagenes/logoicon.ico" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />    
</head>
<body>

<div class="container">
        <div class="box-info">
            <div class="home-icon">
                <a href="index.php">
                    <i class="ri-home-2-fill"></i>
                    Inicio
                </a>
            </div>
            <h1>DEJANOS TU MENSAJE</h1>
            <div class="data">
                <p><i class="ri-phone-fill"></i> +57 321 758 7889</p>
                <p><i class="ri-mail-fill"></i> transporteselitesas1@gmail.com</p>
                <p><i class="ri-map-pin-5-fill"></i> Cra. 66 a #11-26 B/Limonar</p>
            </div>
            <div class="links">
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-fill"></i></a>
                <a href="#"><i class="ri-whatsapp-fill"></i></a>
            </div>
        </div>
        <form action="sendermail.php" method="POST">
            <div class="input-box">
                <input type="text" name="nombre" placeholder="Nombre y apellido" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" required placeholder="Correo electrónico">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" name="asunto" placeholder="Asunto">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div class="input-box">
                <textarea name="mensaje" placeholder="Escribe tu mensaje..."></textarea>
            </div>
            <button type="submit">Enviar mensaje</button>
        </form>
</div>

</body>
</html>