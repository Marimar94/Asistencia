<?php
session_start();
include './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $correo = $_POST['correo'];
    $password = md5($_POST['password']);

    
    $sql = "SELECT id, nombre, rol_id FROM usuarios WHERE correo='$correo' AND password='$password'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['nombre'];
        $_SESSION['user_role'] = $row['rol_id'];
        echo "Inicio de sesión exitoso. Bienvenido, " . $row['nombre'];
        
    } else {
       
        echo "Correo o contraseña incorrectos.";
    }

    
    $conexion->close();
}
?>

<?php
$mensaje = isset($_GET['mensaje']) ? htmlspecialchars($_GET['mensaje']) : '';
?>
