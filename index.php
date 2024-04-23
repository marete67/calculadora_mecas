<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Configurador de Vehículos</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.tablet {
    width: 90%; /* Utilizamos un ancho relativo */
    max-width: 600px; /* Establecemos un ancho máximo */
    height: 70%; /* Utilizamos una altura relativa */
    max-height: 500px; /* Establecemos una altura máxima */
    border: 16px solid #000;
    border-radius: 36px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    overflow: hidden; /* Ocultamos cualquier contenido que desborde */
    display: flex;
    flex-direction: column;
}

.menu {
    flex: 1; /* Permitimos que el menú ocupe todo el espacio disponible */
    display: flex;
    flex-direction: column;
    justify-content: space-around; /* Distribuimos uniformemente los elementos */
}

.menu a {
    padding: 20px;
    border-radius: 10px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
    margin-bottom: 10px;
    transition: background-color 0.3s;
}

.menu a:hover {
    background-color: #555;
}

.screen-header {
    text-align: center;
    margin-bottom: 20px;
}
    </style>
</head>
<body>

<div class="tablet">
    <div class="screen-header">
        <h1>Seleccione el tipo de vehiculo</h1>
    </div>
    <div class="menu">
        <a href="gamabaja.php">Gama Baja</a>
        <a href="gamamedia.php">Gama Media</a>
        <a href="gamalta.php">Gama Alta</a>
        <a href="blinyhel.php">Blindados y Helicopteros</a>
    </div>
</div>

</body>
</html>
