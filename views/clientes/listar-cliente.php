<?php
require_once '../../app/config/App.php';
?>

<?php require_once "../includes/header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Clientes", "Inicio", SERVERURL ."views/clientes/listar-cliente") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- contenido personalizado -->
        <div class="table-responsive">
          <a href="./registrar.php" class="btn btn-primary">Registrar</a>
          <table class="table table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Teléfono</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Talla Saravia</td>
                <td>Alexis Alexander</td>
                <td>907277520</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Talla Saravia</td>
                <td>Alexis Alexander</td>
                <td>907277520</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Talla Saravia</td>
                <td>Alexis Alexander</td>
                <td>907277520</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Talla Saravia</td>
                <td>Alexis Alexander</td>
                <td>907277520</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once "../includes/footer.php" ?>
</body>

</html>