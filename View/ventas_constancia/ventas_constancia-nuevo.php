<h1 class="page-header">
    Constancia
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ventas_constancia">Constancia</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-ventas_constancia" action="?c=ventas_constancia&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>N° Factura</label>
      <input type="text" name="numero_factura" value="<?php echo $prod->numero_factura; ?>" class="form-control" placeholder="N° Factura" data-validacion-tipo="requerido|min:20" required />
    </div>

    <div class="form-group">
        <label>N° Constancia</label>
        <input type="text" name="numero_constancia" value="<?php echo $prod->numero_constancia; ?>" class="form-control" placeholder="N° Constancia" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-ventas_constancia").submit(function(){
            return $(this).validate();
        });
    })
</script>