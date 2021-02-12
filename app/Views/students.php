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
          <h1 class="h2">Estudiantes</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#coursesModal">
                Crear estudiante
              </button>
            </div>
          </div>
        </div>
        <h2>Listado de estudiantes</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th># ID</th>
                <th>Nombre</th>
                <th>Correo eléctronico</th>
                <th>Telefono</th>
                <th>Editar</th>
                <th>Elimninar</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($datos as $key) : ?>
                <tr>
                  <!-- <tr v-for="course in courses" :key="course_id">
                  <td v-text="course.course_id"></td>
                  <td v-text="course.name"></td>
                  <td v-text="course.description"></td> -->
                  <td><?php echo $key->student_id ?></td>
                  <td><?php echo $key->name ?></td>
                  <td><?php echo $key->email ?></td>
                  <td><?php echo $key->phone ?></td>
                  <th><a name="" id="" class="btn btn-primary btn-sm" href="<?php echo base_url() . '/get-student/' . $key->student_id ?>" role="button">Editar</a></th>
                  <th><a name="" id="" class="btn btn-danger btn-sm" href="<?php echo base_url() . '/delte-students/' . $key->student_id ?>" role="button">Eliminar</a></th>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </main>


    </div>

    <div class="modal" id="coursesModal" tabindex="-1" aria-labelledby="coursesModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form action="<?php echo base_url('/create-student') ?>" method="post">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Crear Estudiante</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Form -->
              <div class="form-group">
                <!-- name -->
                <div class="mb-3">
                  <input type="text" class="form-control md-3" id="name" name="name" placeholder="Nombre estudiante" required>
                </div>
                <!-- email -->
                <div class="mb-3">
                  <input type="email" class="form-control md-3" id="email" name="email" placeholder="Correo Electrónico" required>
                </div>
                <!-- phone -->
                <div class="mb-3">
                  <input type="number" class="form-control md-3" id="phone" name="phone" placeholder="Teléfono" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Guardar cambios</button>
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