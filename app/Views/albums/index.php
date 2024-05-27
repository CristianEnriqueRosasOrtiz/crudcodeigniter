<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Álbumes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <img src="/crudcompleto/public/images/mexico.png" alt="Logo Izquierdo" class="logo" style="width: 100px; height: auto;">
        <h1 class="text-center mb-0">Proyecto Álbumes</h1>
            <img src="/crudcompleto/public/images/tehuacan.png" alt="Logo Derecho" class="logo" style="width: 100px; height: auto;">
        </div>

        <div class="row justify-content-center">
            <a href="<?php echo site_url('albums/create'); ?>" class="btn btn-primary mb-3">Agregar Nuevo Álbum</a>
        </div>
        <table id="albumsTable" class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Género</th>
                    <th>Botones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($albums as $album): ?>
                    <tr>
                        <td><?php echo $album['name']; ?></td>
                        <td><?php echo $album['author']; ?></td>
                        <td><?php echo $album['genre_name']; ?></td>
                        <td>
                            <a href="<?php echo site_url('albums/edit/' . $album['id']); ?>" class="btn btn-warning">Modificar</a>
                            <a href="<?php echo site_url('albums/delete/' . $album['id']); ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de que desea eliminar este álbum?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#albumsTable').DataTable();
        });
    </script>
</body>
</html>

