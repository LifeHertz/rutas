<?php
//Parametros de la aplicacion
require_once '../../app/config/App.php';
?>

<?php require_once "../includes/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Nuevo cliente", "Lista de clientes", SERVERURL . "views/clientes/listar-clientes") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="" id="formulario-clientes" autocomplete="off">
            <div class="card card-outline card-primary">
              <div class="card-header">
                Complete los datos
              </div>
              <div class="card-body">
              <!-- Fila 1 -->
               <div class="row">
                <div class="col-md-4 form group">
                  <label for="apellidos">Apellidos</label>
                  <input type="text" class="form-control" id="apellidos" required>
                </div>
                <div class="col-md-4 form group">
                  <label for="nombres">Nombres</label>
                  <input type="text" class="form-control" id="nombres" required>
                </div>
                <div class="col-md-4 form group">
                  <label for="telefono">Telefono</label>
                  <input 
                    type="tel" 
                    class="form-control" 
                    id="telefono"
                    minlength="9"
                    maxlength="9"
                    required>
                </div>
               </div>
               <!-- Fin fila 1 -->
              </div> <!-- ./card-body -->
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
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

<?php require_once "../includes/footer.php"; ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelector("#formulario-clientes").addEventListener("submit", async (event) => {
      event.preventDefault();

      if (await ask("¿Desea guardar?", "Clientes")){
        //Algoritmo para guardar
        //GET = URLSearchParams() / {}
        //POST = FormData()
        showToast("Guardado correctamente", "SUCCESS", 1000, "./listar-clientes.php");
      }
    });
  });
</script>

</body>

</html>