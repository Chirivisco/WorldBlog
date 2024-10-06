<?php
// Manejo de errores (lado servidor)
$error = "";
if (isset($_GET['error'])) {
    if ($_GET['error'] === 'empty_fields') {
        $error = "Todos los campos son obligatorios.";
    } elseif ($_GET['error'] === 'database_error') {
        $error = "Error al registrar el usuario. Inténtelo de nuevo.";
    } elseif ($_GET['error'] === 'invalid_request') {
        $error = "Solicitud no válida.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldBlog</title>
    <link rel="stylesheet" href="../stylesheets/styles_reg_user.css">
</head>

<body>
    <div id="reg-user">
        <h1>Registro de usuario</h1>

        <!-- Muestra el error del servidor -->
        <?php if ($error): ?>
            <div id="php-error-box">
                <p id="php-error-msg"><?php echo $error; ?></p>
            </div>
        <?php endif; ?>

        <form id="registrationForm" method="post" action="../actions/registro.php">
            <div class="form-group">
                <label for="usuario">Nombre de usuario</label>
                <input id="usuario" type="text" name="username">
                <p class="error-msg"></p>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input id="contrasena" type="password" name="password">
                <p class="error-msg"></p>
            </div>
            <p>¿Ya tiene cuenta?<a href="../index.php" id="registro-usuarios">Inicie sesión</a></p>
            <button id="new-user" type="submit">Registrar</button>
        </form>
    </div>
    <script src="../utils/app.js"></script>
</body>

</html>