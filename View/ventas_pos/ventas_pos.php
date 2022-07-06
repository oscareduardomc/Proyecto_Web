<h1 class="page-header">POS</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ventas_anuladas&a=Nuevo">Ventas Anuladas</a>
    <a class="btn btn-primary" href="?c=ventas&a=Nuevo">Nueva Venta</a>
    <a class="btn btn-primary" href="?c=venta_credito&a=Nuevo">Nuevo Credito</a>
    <a class="btn btn-primary" href="?c=detalle_venta&a=Nuevo">Detalle Venta</a>
    <a class="btn btn-primary" href="?c=ventas_pos&a=Nuevo">POS</a>
    <a class="btn btn-primary" href="?c=ventas_sag&a=Nuevo">SAG</a>
    <a class="btn btn-primary" href="?c=ventas_exenta&a=Nuevo">Orden</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ID</th>
            <th style="width:120px;">ID Venta</th>
            <th style="width:120px;">POS</th>
            <th style="width:120px;">Referencia</th>
            <th style="width:120px;">Valor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td><?php echo $r->idregistro; ?></td>
                <td><?php echo $r->idventa; ?></td>
                <td><?php echo $r->idpos; ?></td>
                <td><?php echo $r->referencia; ?></td>
                <td><?php echo $r->valor; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>