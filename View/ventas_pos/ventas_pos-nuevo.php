<h1 class="page-header">
    POS
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ventas_pos">POS</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-ventas_pos" action="?c=ventas_pos&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>ID Venta</label>
      <input type="text" name="idventa" value="<?php echo $prod->idventa; ?>" class="form-control" placeholder="ID Venta" data-validacion-tipo="requerido|min:20" required/>
    </div>

    <div class="form-group">
        <label>POS</label>
        <input type="text" name="idpos" value="<?php echo $prod->idpos; ?>" class="form-control" placeholder="POS" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Referencia</label>
        <input type="text" name="referencia" value="<?php echo $prod->referencia; ?>" class="form-control" placeholder="Referencia" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Valor</label>
        <input type="text" name="valor" value="<?php echo $prod->valor; ?>" class="form-control" placeholder="Valor" data-validacion-tipo="requerido|min:100" required/>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-ventas_pos").submit(function(){
            return $(this).validate();
        });
    })
</script>