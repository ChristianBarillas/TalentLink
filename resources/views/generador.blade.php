<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TalentLink Connect +</title>


  <head>
    <link href="{{ asset('css/estilosTailwinds.css') }}" rel="stylesheet">
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Resto del código -->

  <body>
    <!-- ====== Navbar Section Start -->
    @include('_navbar')

    <!-- ====== Navbar Section End -->



    <!-- ====== Table Section Start -->

    <div class="container-fluid">

      <h4 class="text-center text-primary mt-5 ">Pagos comercio</h4>


      <!-- Filtro por comercio dinamico-->
      <label>Comercios</label>
      <select id="comercioFilter" list="comercios">
        <!-- Las opciones se añadirán dinámicamente mediante JavaScript -->
      </select>
      <datalist id="comercios">
        <!-- Las opciones se añadirán dinámicamente mediante JavaScript -->
      </datalist>



      <label for=""> Estado:</label>
      <select id="estadoFilter">
        <option selected>Seleccione un filtro</option>
        <option value="Entregado a cliente">Entregó a cliente</option>

      </select>




      <div class="d-flex justify-content-center align-items-center mb-3">
        <label for="fechaPicker" class="mr-2">Fecha:</label>
        <div class="input-group">
          <span class="input-group-text">
            <i class="fas fa-calendar-alt"></i>
          </span>
          <input type="text" id="fechaPicker" placeholder="Selecciona una fecha" class="form-control">
          <div class="input-group-append">

          </div>
        </div>
      </div>





      <div class="d-flex justify-content-center">

        <button id="cargarTablaCompleta" class="mb-5 mt-4 btn btn-primary ">Cargar Tabla Completa</button>

      </div>

      <div class="row my-5">
        <div class="col-12 d-flex justify-content-center align-items-center">
          <div class="container-bg tabla-container-bg">
            <div class="table-container">
              <table>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fecha</th>

                    <th>ID Orden</th>
                    <th>Comercio</th>
                    <th>Sucursal</th>
                    <th>Forma de Pago</th>
                    <th>Pago Consumidor Final</th>
                    <th>Venta comercio</th>
                    <th>%Comision weris</th>
                    <th>Monto comision weris (SIN IVA INCLUIDO)</th>
                    <th>Monto comision weris (IVA INCLUIDO)</th>
                    <th>IVA</th>
                    <th>Pago comercio</th>
                    <th>Estado</th>
                    <th>Razon social</th>



                  </tr>
                </thead>
                <tbody id="datosBody">
                  <!-- Aquí van los datos de la tabla -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center mb-5">
        <button class="btn btn-primary mr-2" onclick="exportToExcel()">
          <i class="far fa-file-excel"></i> Descargar tabla en Excel
        </button>

        <button class="btn btn-primary  " id="generarPDF_individual">Estados de Cuenta PDF</button>
        <!-- <button class="btn btn-primary  " id="generarPDF_grupal">BETA Masivo PDF</button> -->

      </div>


    </div>



    <form method="POST" action="/generar-pdf">
    @csrf
    <!-- Aquí puedes agregar los elementos del formulario -->
    <!-- Por ejemplo, puedes agregar un campo para seleccionar las filas de la tabla y las fechas -->
    <input type="text" name="rows[][comercio]" placeholder="Comercio" required>
    <input type="text" name="rows[][sucursalNombre]" placeholder="Nombre de la sucursal" required>
    <input type="text" name="rows[][razonSocial]" placeholder="Razón social" required>
    <input type="text" name="rows[][id]" placeholder="ID" required>
    <input type="text" name="rows[][producto]" placeholder="Producto" required>
    <input type="text" name="rows[][cantidad]" placeholder="Cantidad" required>
    <input type="text" name="rows[][total]" placeholder="Total" required>
    
    <input type="date" name="selectedDates[]" required>
    
    <button type="submit" name="generatePDF">Generar PDF</button>
</form>





    <!-- Libreria para generar los los zip-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>



    <!-- Libreria para generar los PDF-->
    <script src="../resources/js/jspdf.js"></script>
    <script src="../resources/js/jspdf.min.js"></script>
    <script src="{{asset('js/funTailwinds.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://kit.fontawesome.com/d4c6b2d63e.js" crossorigin="anonymous"></script>



    <!-- ====== Footer Section -->
    @include('_footer')

  </body>

</html>