<h1 class="page-header">Credito venta</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ventas_anuladas&a=Nuevo">Ventas Anuladas</a>
    <a class="btn btn-primary" href="?c=ventas&a=Nuevo">Nueva Venta</a>
    <a class="btn btn-primary" href="?c=venta_credito&a=Nuevo">Nuevo Credito</a>
    <a class="btn btn-primary" href="?c=detalle_venta&a=Nuevo">Detalle Venta</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ID Credito</th>
            <th style="width:120px;">ID Venta</th>
            <th style="width:120px;">Activo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td><?php echo $r->IdCredito; ?></td>
                <td><?php echo $r->IdVenta; ?></td>
                <td><?php echo $r->Activo; ?></td>
                <td>
                    <a href="?c=venta_credito&a=Crud&IdCredito=<?php echo $r->IdCredito; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=venta_credito&a=Eliminar&IdCredito=<?php echo $r->IdCredito; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>