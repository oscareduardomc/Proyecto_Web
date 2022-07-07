<h1 class="page-header">
    SAG
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ventas_sag">SAG</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-ventas_sag" action="?c=ventas_sag&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>N° Factura</label>
      <input type="text" name="numero_factura" value="<?php echo $prod->numero_factura; ?>" class="form-control" placeholder="N° Factura" data-validacion-tipo="requerido|min:20" required/>
    </div>

    <div class="form-group">
        <label>N° SAG</label>
        <input type="text" name="numero_sag" value="<?php echo $prod->numero_sag; ?>" class="form-control" placeholder="N° SAG" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-ventas_sag").submit(function(){
            return $(this).validate();
        });
    })
</script>