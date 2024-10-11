<?php
require_once '../../app/config/App.php';
?>

<?php require_once "../includes/header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Registrar", "Inicio", SERVERURL . "views/clientes/listar-cliente") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- contenido personalizado -->
        <div class="col-md-12">
          <form action="" id="formulario-clientes">
            <div class="card card-outline card-primary">
              <div class="card-header">
                complete los datos
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <label for="label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos">
                  </div>
                  <div class="col-md-4 form-group">
                    <label for="label">Nombres</label>
                    <input type="text" class="form-control" id="nombre">
                  </div>
                  <div class="col-md-4 form-group">
                    <label for="label">Telefono</label>
                    <input type="tel" class="form-control textcenter" id="telefono" minlength="9" maxlength="9" required>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once "../includes/footer.php" ?>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelector("#formulario-clientes").addEventListener("submit", async (event) => {
      event.preventDefault();
      if (await ask("¿Quiere guardar?", "Clientes")) {
        //algoritmo
        //get = URLSearchParams()
        //post = FormData
        showToast("Guardado correctamente", "SUCCESS", 1000, "./listar-cliente.php")
      }
    })
  })
</script>
</body>

</html>