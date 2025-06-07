<!DOCTYPE html>
<html>
<head>
    <title>Listado de Notas</title>
    <link rel="stylesheet" href="Estilos/style.css">
</head>
<body>
    <h1>Listado de Notas</h1>
    <a href="Index.php?action=registrar">Registrar nueva nota</a>
    <table>
        <tr>
            <th>Estudiante</th>
            <th>Descripción</th>
            <th>Nota</th>
        </tr>
        <?php while ($fila = $notas->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($fila['estudiante']) ?></td>
            <td><?= htmlspecialchars($fila['descripcion']) ?></td>
            <td><?= number_format($fila['nota'], 2) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <p><strong>Promedio General:</strong> <?= number_format($promedio, 2) ?></p>
</body>
</html>
