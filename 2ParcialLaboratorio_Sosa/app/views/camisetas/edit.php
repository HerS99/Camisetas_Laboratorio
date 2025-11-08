<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Camiseta - Proyecto de Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Proyecto de Futbol</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="<?php echo URLROOT; ?>/camisetas">Camisetas</a>
            <a class="nav-link active" href="#">Editar</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1>Editar Camiseta</h1>

    <form method="POST" action="<?php echo URLROOT; ?>/camiseta/update/<?php echo $data['camiseta']['id']; ?>">
        <div class="mb-3">
            <label for="equipo" class="form-label">Equipo</label>
            <input type="text" class="form-control" id="equipo" name="equipo" 
                   value="<?php echo htmlspecialchars($data['camiseta']['equipo']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="jugador" class="form-label">Jugador</label>
            <input type="text" class="form-control" id="jugador" name="jugador" 
                   value="<?php echo htmlspecialchars($data['camiseta']['jugador']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="number" class="form-control" id="numero" name="numero" 
                   value="<?php echo htmlspecialchars($data['camiseta']['numero']); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo URLROOT; ?>/camiseta" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
