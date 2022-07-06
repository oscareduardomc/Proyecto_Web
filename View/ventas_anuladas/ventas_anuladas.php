<h1 class="page-header">Ventas Anuladas</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ventas_anuladas&a=Nuevo">Nueva Venta Anulada</a>
    <a class="btn btn-primary" href="?c=ventas&a=Nuevo">Nueva Venta</a>
    <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
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
                <td>
                    <a href="?c=ventas_anuladas&a=Crud&ID=<?php echo $r->idventa; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=ventas_anuladas&a=Eliminar&ID=<?php echo $r->idventa; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>