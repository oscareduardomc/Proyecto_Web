<h1 class="page-header">Detalle Venta</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ventas_anuladas&a=Nuevo">Ventas Anuladas</a>
    <a class="btn btn-primary" href="?c=ventas&a=Nuevo">Nueva Venta</a>
    <a class="btn btn-primary" href="?c=venta_credito&a=Nuevo">Nuevo Credito</a>
    <a class="btn btn-primary" href="?c=detalle_venta&a=Nuevo">Detalle Venta</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ID</th>
            <th style="width:120px;">N° Factura</th>
            <th style="width:120px;">ID Producto</th>
            <th style="width:120px;">Cantidad</th>
            <th style="width:120px;">Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td><?php echo $r->idregistro; ?></td>
                <td><?php echo $r->NumeroFactura; ?></td>
                <td><?php echo $r->CodigoProducto; ?></td>
                <td><?php echo $r->Cantidad; ?></td>
                <td><?php echo $r->Precio; ?></td>
                <td>
                    <a href="?c=detalle_venta&a=Crud&idregistro=<?php echo $r->idregistro; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=detalle_venta&a=Eliminar&idregistro=<?php echo $r->idregistro; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>