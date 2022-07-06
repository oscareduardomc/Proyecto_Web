<h1 class="page-header">
    <?php echo $prod->idregistro != null ? $prod->idregistro : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?cventas_pos">Detalle ID</a></li>
  <li class="active"><?php echo $prod->idregistro != null ? $prod->idregistro : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-ventas_pos" action="?c=ventas_pos&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idregistro" value="<?php echo $prod->idregistro; ?>" />

    <div class="form-group">
        <label>ID Venta</label>
        <input type="text" name="idventa" value="<?php echo $prod->idventa; ?>" class="form-control" placeholder="Id Venta" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>POS</label>
        <input type="text" name="idpos" value="<?php echo $prod->idpos; ?>" class="form-control" placeholder="POS" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Referencia</label>
        <input type="text" name="referencia" value="<?php echo $prod->referencia; ?>" class="form-control" placeholder="Referencia" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Valor</label>
        <input type="text" name="valor" value="<?php echo $prod->valor; ?>" class="form-control" placeholder="Valor" data-validacion-tipo="requerido|min:100" />
    </div>


    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-ventas_pos").submit(function(){
            return $(this).validate();
        });
    })
</script>