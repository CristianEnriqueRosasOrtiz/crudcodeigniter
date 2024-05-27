<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Álbum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    
        <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <img src="/crudcompleto/public/images/mexico.png" alt="Logo Izquierdo" class="logo" style="width: 100px; height: auto;">
            <img src="/crudcompleto/public/images/tehuacan.png" alt="Logo Derecho" class="logo" style="width: 100px; height: auto;">
        </div >
        <h1 class="form-title">Agregar Álbum</h1>
        <form action="<?php echo site_url('albums/store'); ?>" method="post">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Autor</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="genre_id">Género</label>
                <select name="genre_id" id="genre_id" class="form-control" required>
                    <?php foreach ($genres as $genre): ?>
                        <option value="<?php echo $genre['id']; ?>"><?php echo $genre['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?php echo site_url('albums'); ?>" class="btn btn-secondary">Regresar al índice</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>


