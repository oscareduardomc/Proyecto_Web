<h1 class="page-header">Ventas Anuladas</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ventas_anuladas&a=Nuevo">Nueva Venta Anulada</a>
    <a class="btn btn-primary" href="?c=ventas&a=Nuevo">Nueva Venta</a>
    <a class="btn btn-primary" href="?c=venta_credito&a=Nuevo">Nuevo Credito</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ID</th>
            <th style="width:120px;">Usuario</th>
            <th style="width:120px;">Descripción</th>
            <th style="width:120px;">Fecha y Hora</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td><?php echo $r->idventa; ?></td>
                <td><?php echo $r->usuario; ?></td>
                <td><?php echo $r->descripcion; ?></td>
                <td><?php echo $r->fechahora; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>