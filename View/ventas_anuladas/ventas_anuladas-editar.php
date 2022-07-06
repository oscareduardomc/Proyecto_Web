<h1 class="page-header">
    <?php echo $prod->ID != null ? $prod->Usuario : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ventas_anuladas">Ventas Anuladas</a></li>
  <li class="active"><?php echo $prod->ID != null ? $prod->Usuario : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-ventas_anuladas" action="?c=ventas_anuladas&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="ID" value="<?php echo $prod->ID; ?>" />

    <div class="form-group">
        <label>ID</label>
        <input type="text" name="ID" value="<?php echo $prod->ID; ?>" class="form-control" placeholder="Ingrese ID" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="Usuario" value="<?php echo $prod->Usuario; ?>" class="form-control" placeholder="Usuario" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="Descripcion" value="<?php echo $prod->Descripcion; ?>" class="form-control" placeholder="Descripcion" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Fecha y Hora</label>
        <input type="text" name="Fecha" value="<?php echo $prod->Fecha; ?>" class="form-control" placeholder="Fecha" data-validacion-tipo="requerido|min:240" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
