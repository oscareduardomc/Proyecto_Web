<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ventas">Ventas</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-ventas" action="?c=ventas&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>ID</label>
      <input type="text" name="ID" value="<?php echo $vnt->ID; ?>" class="form-control" placeholder="ID" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>N° Factura</label>
        <input type="text" name="Factura" value="<?php echo $vnt->Factura; ?>" class="form-control" placeholder="N° Factura" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Cai</label>
        <input type="text" name="Cai" value="<?php echo $vnt->Cai; ?>" class="form-control" placeholder="Cai" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>ClienteID</label>
        <input type="text" name="ClienteID" value="<?php echo $vnt->ClienteID; ?>" class="form-control" placeholder="Cliente ID" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Usu</label>
        <input type="text" name="Usu" value="<?php echo $vnt->Usu; ?>" class="form-control" placeholder="Usu" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Efectivo</label>
        <input type="text" name="Efectivo" value="<?php echo $vnt->Efectivo; ?>" class="form-control" placeholder="Efectivo" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Tarjeta</label>
        <input type="text" name="Tarjeta" value="<?php echo $vnt->Tarjeta; ?>" class="form-control" placeholder="Tarjeta" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Mesero</label>
        <input type="text" name="Mesero" value="<?php echo $vnt->Mesero; ?>" class="form-control" placeholder="Mesero" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Estacion</label>
        <input type="text" name="Estacion" value="<?php echo $vnt->Estacion; ?>" class="form-control" placeholder="Estacion" data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-ventas").submit(function(){
            return $(this).validate();
        });
    })
</script>