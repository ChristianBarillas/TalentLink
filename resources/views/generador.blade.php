<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>kiki App</title>


  <head>
    <link href="{{ asset('css/estilosTailwinds.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/table.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Resto del código -->

  <body>
    <!-- ====== Navbar Section Start -->
    @include('_navbar')

    <!-- ====== Navbar Section End -->



    <!-- ====== Table Section Start -->

  <!-- ====== Table Section Start -->
<div class="container mx-auto">


<div class="mt-40">

<h4 class="text-center text-primary mt-5">Pagos comercio</h4>


<!-- Filtro por comercio dinamico -->
<label for="comercioFilter">Comercios</label>
<select id="comercioFilter" list="comercios">
  <!-- Las opciones se añadirán dinámicamente mediante JavaScript -->
</select>
<datalist id="comercios">
  <!-- Las opciones se añadirán dinámicamente mediante JavaScript -->
</datalist>

<label for="estadoFilter">Estado:</label>
<select id="estadoFilter" class="mt-2">
  <option selected>Seleccione un filtro</option>
  <option value="Entregado a cliente">Entregó a cliente</option>
</select>

</div>

<div class="flex justify-center items-center mt-5">
  <label for="fechaPicker" class="mr-2">Fecha:</label>
  <div class="relative">
    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
      <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
        <path
          d="M12.707,14.707 L11.293,13.293 C10.903,12.903 10.903,12.269 11.293,11.879 C11.488,11.684 11.744,11.586 12,11.586 C12.256,11.586 12.512,11.684 12.707,11.879 L14.707,13.879 C15.098,14.27 15.098,14.903 14.707,15.293 C14.317,15.684 13.683,15.684 13.293,15.293 L12,13.999 L10.707,15.293 C10.316,15.684 9.683,15.684 9.293,15.293 C8.902,14.903 8.902,14.27 9.293,13.879 L11.293,11.879 C11.488,11.684 11.744,11.586 12,11.586 C12.256,11.586 12.512,11.684 12.707,11.879 L14.707,13.879 C15.098,14.27 15.098,14.903 14.707,15.293 C14.512,15.488 14.256,15.586 14,15.586 C13.744,15.586 13.488,15.488 13.293,15.293 L12,13.999 L12,13.999 Z M10,2 C14.418,2 18,5.582 18,10 C18,14.418 14.418,18 10,18 C5.582,18 2,14.418 2,10 C2,5.582 5.582,2 10,2 L10,2 Z M10,1 C5.029,1 1,5.029 1,10 C1,14.971 5.029,19 10,19 C14.971,19 19,14.971 19,10 C19,5.029 14.971,1 10,1 L10,1 Z">
        </path>
      </svg>
    </span>
    <input type="text" id="fechaPicker" placeholder="Selecciona una fecha"
      class="border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline-blue">
  </div>
</div>

<div class="flex justify-center mt-5">
  <button id="cargarTablaCompleta"
    class="mb-5 mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Cargar Tabla Completa
  </button>
</div>

<div class="row my-5">
  <div class="col-12 flex justify-center items-center">
    <div class="bg-gray-100 rounded-lg p-4">
      <div class="overflow-x-auto">
        <table class="table-auto w-full">
          <thead>
            <tr>
              <th class="px-4 py-2">#</th>
              <th class="px-4 py-2">Fecha</th>
              <th class="px-4 py-2">ID Orden</th>
              <th class="px-4 py-2">Comercio</th>
              <th class="px-4 py-2">Sucursal</th>
              <th class="px-4 py-2">Forma de Pago</th>
              <th class="px-4 py-2">Pago Consumidor Final</th>
              <th class="px-4 py-2">Venta comercio</th>
              <th class="px-4 py-2">%Comision</th>
              <th class="px-4 py-2">Monto comision (SIN IVA INCLUIDO)</th>
              <th class="px-4 py-2">Monto comision (IVA INCLUIDO)</th>
              <th class="px-4 py-2">IVA</th>
              <th class="px-4 py-2">Pago comercio</th>
              <th class="px-4 py-2">Estado</th>
              <th class="px-4 py-2">Razon social</th>
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

<div class="flex justify-center mb-5">
  <button
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2"
    onclick="exportToExcel()">
    <i class="far fa-file-excel"></i> Descargar tabla en Excel
  </button>

  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    id="generarPDF_individual">Estados de Cuenta PDF</button>
  <!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    id="generarPDF_grupal">BETA Masivo PDF</button> -->
</div>

</div>




   




 <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Libreria para generar los los zip-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>



    <!-- Libreria para generar los PDF-->

    <script src="{{asset('js/jspdf.min.js')}}"></script>
    <script src="{{asset('js/funTailwinds.js')}}"></script>
    <script src="{{asset('js/pagocomercio.js')}}"></script>

   
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://kit.fontawesome.com/d4c6b2d63e.js" crossorigin="anonymous"></script>



    <!-- ====== Footer Section -->
    @include('_footer')

  </body>

</html>