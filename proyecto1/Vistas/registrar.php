<!DOCTYPE html>
<html>
<head>
    <title>Registrar Nota</title>
    <link rel="stylesheet" href="Estilos/style.css">
</head>
<body>
    <h1>Registrar Nueva Nota</h1>
    <form action="Index.php?action=registrar" method="POST">
        <label>Nombre del Estudiante:</label><br>
        <input type="text" name="estudiante" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion" required></textarea><br><br>

        <label>Nota (numérica):</label><br>
        <input type="number" name="nota" step="0.01" min="0" max="100" required><br><br>

        <input type="submit" value="Guardar">
    </form>
    <a href="Index.php?action=listar">Volver al listado</a>
</body>
</html>
