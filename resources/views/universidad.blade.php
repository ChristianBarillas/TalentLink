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

                        <h1 class="text-center">Lista de Universidades</h1>

                        <form action="" method="POST">
                            @method('get')
                            <label for="">Busqueda:</label>
                            <input type="text" class="form-control" name="buscar" placeholder="busqueda por nombre" value="{{$buscar}}">

                            <input type="submit" class="btn btn-info mt-2" value="Buscar">
                        </form>

                        <table class="table table-hover mt-3">
                            <thead>
                                <th>#</th>
                                <th>Nombre</th>
                            </thead>
                            <tbody>
                                @if(count($universidad)<=0) <tr>
                                    <td collspan="3">
                                        <div class="alert alert-danger" role="alert">no hay</div>
                                    </td>
                                    </tr>
                                    @else
                                    <?php $contador = 1; ?>
                                    @foreach ($universidad as $value)
                                    <tr>
                                        <td>{{$contador ++}}</td>
                                        <td>{{$value->nombre}}</td>
                                    </tr>

                                    @endforeach
                                    @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->
    <script src="{{asset('js/funTailwinds.js')}}"></script>
</body>

</html>