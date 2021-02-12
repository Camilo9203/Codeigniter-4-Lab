<?php
$idCourse = $datos[0]['course_id'];
$name = $datos[0]['name'];
$description = $datos[0]['description'];
?>

<!doctype html>
<html lang="en">

<?php include 'templates/header.php' ?>

<body class="bg-light">

    <?php include 'templates/navbar.php' ?>

    <div class="container-fluid" id="app">
        <div class="row">

            <?php include 'templates/sidebarMenu.php' ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="app">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Panel de Control</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#coursesModal">
                                Crear Curso
                            </button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            Esta semana
                        </button>
                    </div>
                </div>
                <h2>Cursos</h2>
                <form action="<?php echo base_url('/actualizar') ?>" method="post">
                    <div class="modal-content">
                        <div class="form-group">
                            <input type="text" id="idCourse" name="idCourse" hidden="" value="<?php echo $idCourse ?>">
                            <div class="mb-3">
                                <input type="text" class="form-control md-3" id="name" name="name" placeholder="Nombre del Curso" required value="<?php echo $name ?>">
                            </div>
                            <div class=" mb-3">
                                <textarea class="form-control md-3" name="description" id="description" rows="3" placeholder="Descripción del curso" required><?php echo $description ?></textarea>
                            </div>
                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </div>
                </form>
            </main>


        </div>


    </div>

    <?php include 'templates/footer.php' ?>

    <!-- <script>
    const app = new Vue({
      el: '#app',
      data: {
        name: "",
        description: "",
        courses: []
      },
      created() {
        this.getCourses();
      },
      methods: {
        getCourses: function() {
          var url = "/courses/";
          axios.get(url).then((response) => {
            this.courses = response.data;
          });
        },
      }

    });
  </script> -->
</body>

</html>