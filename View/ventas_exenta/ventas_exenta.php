<h1 class="page-header">SAG</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ventas_anuladas&a=Nuevo">Ventas Anuladas</a>
    <a class="btn btn-primary" href="?c=ventas&a=Nuevo">Nueva Venta</a>
    <a class="btn btn-primary" href="?c=venta_credito&a=Nuevo">Nuevo Credito</a>
    <a class="btn btn-primary" href="?c=detalle_venta&a=Nuevo">Detalle Venta</a>
    <a class="btn btn-primary" href="?c=ventas_pos&a=Nuevo">POS</a>
    <a class="btn btn-primary" href="?c=ventas_constancia&a=Nuevo">Constancia</a>
    <a class="btn btn-primary" href="?c=ventas_sag&a=Nuevo">SAG</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">N° Factura</th>
            <th style="width:120px;">N° SAG</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td><?php echo $r->numero_factura; ?></td>
                <td><?php echo $r->numero_sag; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>