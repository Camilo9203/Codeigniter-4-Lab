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
                Inscribir alumno a curso
              </button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Esta semana
            </button>
          </div>
        </div>
        <h2>Incripciones</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Estudiante</th>
                <th>Curso</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($dataIncriptions as $key) : ?>
                <tr>
                  <td><?php echo $key->email ?></td>
                  <td><?php echo $key->id_course ?></td>
                  <th><a name="" id="" class="btn btn-danger btn-sm" href="<?php echo base_url() ?>" role="button">Eliminar</a></th>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </main>


    </div>

    <div class="modal" id="coursesModal" tabindex="-1" aria-labelledby="coursesModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form action="<?php echo base_url('/create-inscription') ?>" method="post">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Inscribir Estudiante</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <div class="mb-3">
                  <select name="id_student" class="form-select" aria-label="Default select example">
                    <option selected>Seleccionar Estudiante</option>
                    <?php foreach ($dataStudents as $row) { ?>
                      <option value="<?= $row->student_id; ?>"><?= $row->name; ?></option>
                    <?php } ?>
                  </select>

                </div>
                <div class="mb-3">
                  <select name="id_course" class="form-select" aria-label="Default select example">
                    <option selected>Seleccionar Curso</option>
                    <?php foreach ($dataCourses as $row) { ?>
                      <option value="<?= $row->course_id; ?>"><?= $row->name; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Crear inscription</button>
            </div>
          </div>
        </form>
      </div>
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