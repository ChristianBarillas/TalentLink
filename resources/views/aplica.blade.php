<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TalentLink Connect +</title>
    <link href="{{ asset('css/estilosTailwinds.css') }}" rel="stylesheet">
    <!-- Resto del código -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    @include('_navbar')
    <div class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-5/12">
                    <div class="hero-content">

                        <h1 class="text-center text-success">Aplicar Empresa</h1>

                        <form action="{{route('saveEstudiante')}}" method="POST">
                            @csrf
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control">

                            <label for="">Apellido</label>
                            <input type="text" name="apellido" class="form-control">

                            <label for="">Correo</label>
                            <input type="text" name="correo" class="form-control">

                            <label for="">Telefono</label>
                            <input type="text" name="telefono" class="form-control">

                            <label for="">Selecciona Carrera</label>
                            <select name="carrera" class="form-control">
                                @foreach ($carrera as $element)
                                <option value="{{$element-> id}}">{{$element->nombre}}</option>
                                @endforeach
                            </select>

                            <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->
    <script src="{{asset('js/funTailwinds.js')}}"></script>
</body>

</html>