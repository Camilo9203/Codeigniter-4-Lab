<template>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="app">
    <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
    >
      <h1 class="h2">Panel de Control</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">
            Compartir
          </button>
          <button type="button" class="btn btn-sm btn-outline-secondary">
            Exportar
          </button>
        </div>
        <button
          type="button"
          class="btn btn-sm btn-outline-secondary dropdown-toggle"
        >
          <span data-feather="calendar"></span>
          Esta semana
        </button>
      </div>
    </div>
    <h2>Estudiantes</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th># Cedula</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
            <th>Curso</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="student in students" :key="student.id">
            <td v-text="student.id"></td>
            <td v-text="since(student.name)"></td>
            <td v-text="dirHuman(student.email)"></td>
            <td v-text="dirHuman(student.phone)"></td>
            <td v-text="dirHuman(student.id_course)"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</template>