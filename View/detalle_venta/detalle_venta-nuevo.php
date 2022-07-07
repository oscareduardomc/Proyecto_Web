<h1 class="page-header">
    Detalle Venta
</h1>

<ol class="breadcrumb">
  <li><a href="?c=detalle_venta">Detalle Venta</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-detalle_venta" action="?c=detalle_venta&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>N° Factura</label>
      <input type="text" name="NumeroFactura" value="<?php echo $prod->NumeroFactura; ?>" class="form-control" placeholder="N° Factura" data-validacion-tipo="requerido|min:20" required/>
    </div>

    <div class="form-group">
        <label>ID Producto</label>
        <input type="text" name="CodigoProducto" value="<?php echo $prod->CodigoProducto; ?>" class="form-control" placeholder="ID Producto" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Cantidad</label>
        <input type="text" name="Cantidad" value="<?php echo $prod->Cantidad; ?>" class="form-control" placeholder="Cantidad" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="Precio" value="<?php echo $prod->Precio; ?>" class="form-control" placeholder="Precio" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-detalle_venta").submit(function(){
            return $(this).validate();
        });
    })
</script>