<?php include 'vistas/plantilla/encabezado.php'; ?>
<div class="wrapper">
    <?php 
        require 'vistas/plantilla/nav.php'; 
        require 'vistas/plantilla/menulateral.php';
        require 'vistas/plantilla/contenidotitulo.php';
    ?>
    <section class="content">
        <div class="container-fluid">
          <h5 class="mb-2 mt-4">Lista de cargos</h5>
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Información general de cargos</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCIÓN</th>
                        <th>OPCIONES</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($this->datos as $row){ ?>
                        <tr>
                          <td><a href="/cargos/buscarid?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
                          <td><?php echo $row['nombre']; ?></td>
                          <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['descripcion']; ?></div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-warning modificar" value="/cargos/buscarid?id=<?php echo $row['id']; ?>">
                                <i class="fas fa-edit"></i>
                              </button>
                              <button type="button" class="btn btn-danger eliminar">
                                <i class="fas fa-eraser"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Generar nuevo pedido</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Buscar pedido</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- Fin columna izquierda -->
            <!-- Comienzo columna derecha -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Nuevo cargo</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <form id="quickForm" action="/cargos/guardar/" method="post">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="inputNombre">Nombre del cargo</label>
                          <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Escriba el nombre del cargo" required>
                        </div>
                        <div class="form-group">
                          <label for="textareaDescricion">Descripción</label>
                          <textarea name="descripcion" class="form-control" id="textareaDescricion" placeholder="Escriba la descripcion del cargo" row="3"></textarea>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary toastrDefaultSuccess">Guardar</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                  <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        United States of America
                        <span class="float-right text-danger">
                          <i class="fas fa-arrow-down text-sm"></i>
                          12%</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/" class="nav-link">
                        India
                        <span class="float-right text-success">
                          <i class="fas fa-arrow-up text-sm"></i> 4%
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/" class="nav-link">
                        China
                        <span class="float-right text-warning">
                          <i class="fas fa-arrow-left text-sm"></i> 0%
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- /.footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- Fin columna derecha -->
          </div>
          <!-- Fin primera fila -->
        </div>
    </section>
<?php include 'vistas/plantilla/pie.php'; ?>
<script src="/public/plugins/jquery/jquery.min.js"></script>
<script src="/public/js/cargos.js"></script>
<?php include 'vistas/plantilla/script.php'; ?>