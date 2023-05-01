<?php
if(isset($_POST['btnRegistrar'])){

$conexion=mysqli_connect("localhost","root","","quirovida") or die ("Error en la conexion");


$idusuario = $_POST['idUsuarioSalud'];
$nombre = $_POST['name'];

$profesion = $_POST['profesion'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$password = $_POST['password'];




$sql="INSERT INTO `usuariomedico` (`idUsuarioSalud`, `nombre`, `profesion`, `telefono`, `correo`, `estado`, `clave`) VALUES ('$idusuario', '$nombre', '$profesion', '$telefono', '$correo', '1', '$password');";


$registro = mysqli_query($conexion,$sql);

echo "<script>alert('Registro exitoso');</script>";  
echo "<script>window.location='index_login.php';</script>";

}
?>
<!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTER</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
        <link rel="stylesheet" href="CSS/estilos_register.css">
    </head>

    <body>

        <form action="index_register.php" method="POST">

            <section class="container_full">

                    <!-- Columna uno -->
                    <section class="datos_uno">

                        <!-- Nombre completo empleado -->
                        <section class="datos_nombre">

                            <input type="text" name="name" class="enunciado_nombre" value="Nombre completo" disabled>

                            <input type="text" name="name" class="respuesta_nombre" placeholder="Ingresa el nombre" required>

                        </section>

                        <!-- apellido completo empleado -->
                        <section class="datos_nombre">

                            <input type="text" name="idUsuarioSalud" class="enunciado_nombre" value="identificacion" disabled>

                            <input type="text" name="idUsuarioSalud" class="respuesta_nombre" placeholder="Ingresa el id" required>

                        </section>

                        <!-- Numero de telefono -->
                        <section class="datos_telefono">

                            <input type="text" class="enunciado_telefono" value="Telefono celular" disabled>

                            <input type="text" name="telefono" class="respuesta_telefono" placeholder="Ingresa el numero" required>

                        </section>
                     

                    </section>

                    <!-- Columna dos -->
                    <section class="datos_dos">

                           <!-- correo electronico empleado -->
                        <section class="datos_correo">

                            <input type="text" name="email" class="enunciado_correo" value="Correo electronico" disabled>

                            <input type="email"  name="email" class="respuesta_correo" placeholder="Ingresa el correo" required>

                        </section>

                        <!-- profesion empleado -->
                        <section class="datos_contraseña">

                            <input type="text" class="enunciado_contraseña" value="profesion" disabled>

                            <input type="text" name="profesion" class="respuesta_contraseña" placeholder="Ingresa la profesion" required>

                         </section>

                        <!-- Contraseña empleado -->
                        <section class="datos_contraseña">

                            <input type="text" class="enunciado_contraseña" value="Contraseña" disabled>

                            <input type="password" name="password" class="respuesta_contraseña" placeholder="Ingresa la contraseña" required>

                        </section>

                    </section>
                    
                    <!-- Columna tres -->
                    <section class="datos_tres">

                        <!-- Numero de foto -->
                        <section class="datos_telefono">

                            <input type="text" class="enunciado_foto" value="Foto empleado" disabled>

                            <img class="foto_empleado" src="IMG/R.jpg" alt="">

                            <button class="subir"><a class="registrarse_link" href="#">Subir</a></button>

                            <button class="borrar"><a class="inicio_link" href="#">Borrar</a></button>

                        </section>


                    </section>

                    <section class="enviar">

                        <input type="submit" name="btnRegistrar" class="registrarse" value="GUARDAR">

                        <button class="inicio"><a class="inicio_link" href="index_login.php">REGRESAR</a></button>

                    </section>

            </section>

            
            <section class="container">
                
                <h1 class="nombre">REGISTRO DEL EMPLEADO</h1>

            </section>

        </form>

    </body>

</html>