<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Álbum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    
            <div class="d-flex justify-content-between align-items-center mb-4">
                <img src="/crudcompleto/public/images/mexico.png" alt="Logo Izquierdo" class="logo" style="width: 100px; height: auto;">
                <img src="/crudcompleto/public/images/tehuacan.png" alt="Logo Derecho" class="logo" style="width: 100px; height: auto;">
            </div>    
    <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">Editar Álbum</h1>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('albums/update/' . $album['id']); ?>" method="post">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $album['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" name="author" id="author" class="form-control" value="<?php echo $album['author']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="genre_id">Género</label>
                        <select name="genre_id" id="genre_id" class="form-control" required>
                            <?php foreach ($genres as $genre): ?>
                                <option value="<?php echo $genre['id']; ?>" <?php echo $genre['id'] == $album['genre_id'] ? 'selected' : ''; ?>><?php echo $genre['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="<?php echo site_url('albums'); ?>" class="btn btn-secondary">Volver al Índice</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



