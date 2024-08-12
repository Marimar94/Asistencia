<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background: linear-gradient(#C0C0C0, #e0e0e0);
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
}

.header {
    width: 100%;
    background-color: #13357B;
    padding: 50px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    color: #fff;
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-bottom: 10px solid #1E2A78;
}

.header h1 {
    margin: 0;
    font-size: 30px;
    font-weight: bold;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.menu {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
    width: 100%;
    justify-content: center;
}

.menu-item {
    background-color: #1E2A78;
    color: #fff;
    padding: 15px 20px;
    text-align: center;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
    position: relative;
    flex: 1 1 auto;
    min-width: 150px;
}

.menu-item:hover {
    transform: scale(1.05);
    background-color: #0d1a42;
}

.menu-item a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    display: block;
}

.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: #1E2A78;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

.submenu a {
    display: block;
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    color: #fff;
}

.submenu a:last-child {
    border-bottom: none;
}

.menu-item:hover .submenu {
    display: block;
}

.menu-item.logout {
    background-color: #FF6347;
}

.menu-item.logout:hover {
    background-color: #FF4500;
}

.container {
    width: 100%;
    max-width: 1000px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    background-color: #FFFFFF;
    margin-top: 20px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido Administrador</h1>
        <div class="menu">
            <div class="menu-item">
                <a href="">Gestionar Usuarios</a>
                <div class="submenu">
                    <a href="./crear_usuario.php">Crear Usuario</a>
                    <a href="./editar_usuario.php">Editar Usuario</a>
                    <a href="./eliminar_usuario.php">Eliminar Usuario</a>
                </div>
            </div>
            <div class="menu-item">
                <a href="">Gestionar Roles</a>
                <div class="submenu">
                    <a href="./crear_rol.php">Crear Rol</a>
                    <a href="./editar_rol.php">Editar Rol</a>
                    <a href="./eliminar_rol.php">Eliminar Rol</a>
                </div>
            </div>
            <div class="menu-item">
                <a href="">Gestionar Materias</a>
                <div class="submenu">
                    <a href="./crear_materia.php">Crear Materia</a>
                    <a href="./editar_materia.php">Editar Materia</a>
                    <a href="./eliminar_materia.php">Eliminar Materia</a>
                </div>
            </div>
            <div class="menu-item">
                <a href="./ver_reportes.php">Ver Reportes</a>
            </div>
            <div class="menu-item logout">
                <a href="./cerrar_sesion.php">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</body>
</html>
