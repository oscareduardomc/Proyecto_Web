<h1 class="page-header">
    Nueva Venta Anulada
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ventas_anuladas">Ventas Anuladas</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-ventas_anuladas" action="?c=ventas_anuladas&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>ID ventas</label>
      <input type="text" name="idventa" value="<?php echo $prod->idventa; ?>" class="form-control" placeholder="ID venta" data-validacion-tipo="requerido|min:20" required/>
    </div>

    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="usuario" value="<?php echo $prod->usuario; ?>" class="form-control" placeholder="Usuario" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $prod->descripcion; ?>" class="form-control" placeholder="Descripcion" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="fechahora" value="<?php echo $prod->fechahora; ?>" class="form-control" placeholder="Fecha" data-validacion-tipo="requerido|min:10" required/>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-ventas_anuladas").submit(function(){
            return $(this).validate();
        });
    })
</script>