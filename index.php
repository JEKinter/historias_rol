<!-- <a href="https://www.freepik.es/search">Icono de Freepik</a> -->
<?php 
    session_start();
    $conectado=false;
    if(isset($_SESSION["usuario"])){
        $conectado=true;
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Historias Rol</title>
    </head>

    <body>
        <header class="main-header">
            <img src="img/logo_principal.png" alt="Aventuras de Rol">
            <h1>Historias Rol</h1>
            <?php if(!$conectado){echo '<a class="iniciar-sesion" href="IniciarSesion.html">Iniciar sesión</a>';}
            else{echo '<a class="iniciar-sesion">' . $_SESSION["usuario"] . '</a>';}
            ?>
        </header>

        <nav class="main-menu">
            <?php if($conectado){echo
            '<section class="menu-group">
                <h2>Usuario</h2>
                <ol>
                    <li><a href="">Perfil</a></li>
                    <li><a href="">Personajes</a></li>
                </ol>
            </section>';}
            ?>
            <section class="menu-group">
                <h2>Razas</h2>
                <ol>
                    <li><a href="">Elfo</a></li>
                    <li><a href="">Enano</a></li>
                    <li><a href="">Gnomo</a></li>
                    <li><a href="">Humano</a></li>
                </ol> 
            </section>
            <section class="menu-group">
                <h2>Clases</h2>
                <ol>
                    <li><a href="">Clerigo</a></li>
                    <li><a href="">Guerrero</a></li>
                    <li><a href="">Mago</a></li>
                    <li><a href="">Pícaro</a></li>
                </ol> 
            </section>
        </nav>
    </body>
</html>