<h1 class="page-header">Ventas</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ventas_anuladas&a=Nuevo">Ventas Anuladas</a>
    <a class="btn btn-primary" href="?c=ventas&a=Nuevo">Nueva Venta</a>
    <a class="btn btn-primary" href="?c=venta_credito&a=Nuevo">Nuevo Credito</a>
    <a class="btn btn-primary" href="?c=detalle_venta&a=Nuevo">Detalle Venta</a>
    <a class="btn btn-primary" href="?c=ventas_pos&a=Nuevo">POS</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:120px;">ID</th>
            <th style="width:120px;">N. Factura</th>
            <th style="width:120px;">Cai</th>
            <th style="width:120px;">ID Cliente</th>
            <th style="width:120px;">Usu</th>
            <th style="width:120px;">Efectivo</th>
            <th style="width:120px;">Tarjeta</th>
            <th style="width:120px;">Mesero</th>
            <th style="width:120px;">Estacion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td> <?php echo $r->idregistro; ?> </td>
                <td> <?php echo $r->NumeroFactura; ?> </td>
                <td> <?php echo $r->idcai; ?> </td>
                <td> <?php echo $r->idCliente; ?> </td>
                <td> <?php echo $r->Usu; ?> </td>
                <td> <?php echo $r->TEfectivo; ?> </td>
                <td> <?php echo $r->TTarjeta; ?> </td>
                <td> <?php echo $r->Mesero; ?> </td>
                <td> <?php echo $r->Estacion; ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>