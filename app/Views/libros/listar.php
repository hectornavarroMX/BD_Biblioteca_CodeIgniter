<?=$cabecera?>

<a class="btn btn-primary" href="<?=base_url('crear')?>">Crear libro</a>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Portada</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($libros as $libro) { ?>
            <tr>
                <td><?=$libro['imagen'] ?></td>
                <td><?=$libro['nombre'] ?></td>
                <td>editar borrar </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>
<?=$pie?>