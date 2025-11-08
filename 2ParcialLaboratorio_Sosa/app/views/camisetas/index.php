<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Camisetas - Proyecto de Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Proyecto de Futbol</a>
        <div class="navbar-nav ms-auto">
             <a class="nav-link" href="<?php echo URLROOT; ?>/home">Inicio</a>
            <a class="nav-link active" href="<?php echo URLROOT; ?>/camiseta">Camisetas</a>
            <a class="nav-link" href="<?php echo URLROOT; ?>/camiseta/create">Nueva Camiseta</a>
            
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1>Listado de Camisetas</h1>
    <a href="<?php echo URLROOT; ?>/camiseta/create" class="btn btn-success mb-3">+ Nueva Camiseta</a>

    <?php if (!empty($data['camisetas'])): ?>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Equipo</th>
                <th>Jugador</th>
                <th>Numero</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['camisetas'] as $camiseta): ?>
            <tr>
                <td><?php echo $camiseta['id']; ?></td>
                <td><?php echo htmlspecialchars($camiseta['equipo']); ?></td>
                <td><?php echo htmlspecialchars($camiseta['jugador']); ?></td>
                <td><?php echo htmlspecialchars($camiseta['numero']); ?></td>
                <td>
                    <a href="<?php echo URLROOT; ?>/camiseta/edit/<?php echo $camiseta['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <form action="<?php echo URLROOT; ?>/camiseta/delete/<?php echo $camiseta['id']; ?>" method="POST" style="display:inline-block;">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta camiseta?');">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p class="text-muted">No hay camisetas registradas aun.</p>
    <?php endif; ?>
</div>
</body>
</html>
