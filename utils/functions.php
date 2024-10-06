<?php
// Función para establecer la conexión con la base de datos
function getConnection(): bool|mysqli
{
    // Conexión a la BD
    $connection = mysqli_connect('localhost', 'root', '', 'worldblog');
    
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    // Retorna la conexión
    return $connection;
}

// Función para registrar un nuevo usuario
function signup($user): bool {
    // Obtiene la conexión a la base de datos
    $connection = getConnection();

    // Consulta SQL para insertar un nuevo usuario
    $query = "INSERT INTO USERS(USERNAME, PASSWORD) VALUES(?, ?)";

    // Obtiene el nombre de usuario y la contraseña del array
    $username = $user['username'];
    $password = password_hash($user['password'], PASSWORD_DEFAULT); // Hash de la contraseña

    try {
        // Prepara la consulta SQL
        $stmt = $connection->prepare($query);
        if (!$stmt) {
            throw new Exception("Error en la consulta SQL". $connection->error);
        } else {
            // Vincula los parámetros
            $stmt->bind_param("ss", $username, $password);
            
            // Ejecuta la consulta
            if ($stmt->execute()) {
                return true; // Retorna 'true' si el registro es exitoso
            } else {
                throw new Exception("Error al ejecutar la consulta.". $stmt->error);
            }
        }
    } catch (Exception $e) {
        // Redirige en caso de error y detiene la ejecución
        header("Location: ../pantallas/reg_usuarios.php?error=database_error");
        exit();
    } finally {
        // Cierra la declaración y la conexión
        if (isset($stmt)) {
            $stmt->close(); 
        }
        mysqli_close($connection);
    }
}
