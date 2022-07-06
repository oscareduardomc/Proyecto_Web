<h1 class="page-header">
    <?php echo $prod->idregistro != null ? $prod->idregistro : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=detalle_venta">Detalle ID</a></li>
  <li class="active"><?php echo $prod->idregistro != null ? $prod->idregistro : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-detalle_venta" action="?c=detalle_venta&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idregistro" value="<?php echo $prod->idregistro; ?>" />

    <div class="form-group">
        <label>N° Factura</label>
        <input type="text" name="NumeroFactura" value="<?php echo $prod->NumeroFactura; ?>" class="form-control" placeholder="N° Factura" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>ID Producto</label>
        <input type="text" name="CodigoProducto" value="<?php echo $prod->CodigoProducto; ?>" class="form-control" placeholder="ID Producto" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Cantidad</label>
        <input type="text" name="Cantidad" value="<?php echo $prod->Cantidad; ?>" class="form-control" placeholder="Cantidad" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="Precio" value="<?php echo $prod->Precio; ?>" class="form-control" placeholder="Precio" data-validacion-tipo="requerido|min:100" />
    </div>
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-detalle_venta").submit(function(){
            return $(this).validate();
        });
    })
</script>