<?php include_once APP_PATH . '/Views/header.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categorías
        <small>Listado de categorías para los productos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title pull-right">
                <button class="btn btn-success" onclick="mostrarForm(true)"><i class="fa fa-plus-circle"></i> Agregar categoría </button>
              </h3>
              <div class="box-tools pull-right"></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="panel-body table-responsive" id="listadoRegistros">
                <table id="tblListado" class="table table-stripped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Opciones</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot>
                    <th>Opciones</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                  </tfoot>
                </table>
              </div>

              <div class="panel-body" id="formularioRegistros">
                <p>Aquí va el formulario</p>
              </div>

            </div>
            <!-- /.box-body -->

          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once APP_PATH . '/Views/prefooter.php' ?>

<!-- CUSTOM PAGE SCRIPTS FOOTER -->
<script src="scripts/categoria.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
