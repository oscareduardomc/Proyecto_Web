<h1 class="page-header">
    Orden
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ventas_exenta">Orden</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-ventas_exenta" action="?c=ventas_exenta&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>N° Factura</label>
      <input type="text" name="numero_factura" value="<?php echo $prod->numero_factura; ?>" class="form-control" placeholder="N° Factura" data-validacion-tipo="requerido|min:20" required/>
    </div>

    <div class="form-group">
        <label>N° Orden</label>
        <input type="text" name="numero_orden" value="<?php echo $prod->numero_orden; ?>" class="form-control" placeholder="N° Orden" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-ventas_orden").submit(function(){
            return $(this).validate();
        });
    })
</script>