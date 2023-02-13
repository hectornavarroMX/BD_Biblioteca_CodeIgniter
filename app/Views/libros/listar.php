<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    Lista de libros
    <!-- <?php print_r($libros) ?> -->
    <div class="container">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Portada</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($libros as $libro){?>
                    <tr>
                        <td><?php echo $libro['imagen']?></td>
                        <td><?php echo $libro['nombre']?></td>
                        <td>editar borrar </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
        </table>

    </div>
</body>
</html>