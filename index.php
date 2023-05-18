<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado el formulario por POST

    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["contrasena"];

    // Hacer algo con los datos recibidos
    // Por ejemplo, imprimirlos en pantalla

    consulta_bd($nombre,$contrasena);
    if (isset($_SESSION['usuario'])) {
        // La sesión está iniciada
        header("Location: pagina_principal.php");
        exit;
    }
}

function consulta_bd($usu,$contra){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistemas_operativos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM usuarios";

    // Ejecutar la consulta
    $result = $conn->query($sql);

    // Verificar si se obtuvieron resultados
    if ($result->num_rows > 0) {
        // Recorrer los resultados obtenidos
        while ($row = $result->fetch_assoc()) {
            // Acceder a los valores de cada columna
            $nombre_usuario = $row["nombre_usuario"];
            $usuario = $row["usuario"];
            $password = $row["password"];
            
            if(strcmp($usu,$usuario)==0 && strcmp($contra,$password)==0){
                session_start();
                $_SESSION['usuario'] = $usuario;
                $_SESSION['nombre_usuario'] = $nombre_usuario;
            }
        }
    } else {
        echo "No se encontraron resultados.";
    }

    // Cerrar la conexión
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Mohithpoojary</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post" action="index.php">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Nombre de Usuario" name="nombre">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Contraseña" name="contrasena">
				</div>
				<button class="button login__submit">
					<span class="button__text">Iniciar Sesión</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<!--div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div-->
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
