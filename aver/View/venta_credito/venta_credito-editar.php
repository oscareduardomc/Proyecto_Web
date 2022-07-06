<h1 class="page-header">
    <?php echo $prod->IdCredito != null ? $prod->IdCredito : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=venta_credito">Creditos</a></li>
  <li class="active"><?php echo $prod->IdCredito != null ? $prod->IdCredito : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-venta_credito" action="?c=venta_credito&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="IdCredito" value="<?php echo $prod->IdCredito; ?>" />

    <div class="form-group">
        <label>ID Venta</label>
        <input type="text" name="IdVenta" value="<?php echo $prod->IdVenta; ?>" class="form-control" placeholder="ID Venta" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Activo</label>
        <input type="text" name="Activo" value="<?php echo $prod->Activo; ?>" class="form-control" placeholder="Activo" data-validacion-tipo="requerido|min:100" />
    </div>


    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-venta_credito").submit(function(){
            return $(this).validate();
        });
    })
</script>