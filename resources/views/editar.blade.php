<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Prueba Tecnica Luis Miguel Moya</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/estilos.css">
    </head>
<body>
    <div class="content">
        <div class="title m-b-md">
            Prueba Tecnica Luis Miguel Moya
        </div>
        <div class="contenedor_2" align="center">
                    <h2>
                        Modificar registro tabla "goods"   
                    </h2>
        </div>             
        <main>
            <div class="contenedor_2">
                <table>						
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Value</th>
                            <th>Accion</th>
                        </tr>
                            @foreach ($goods as $good)
                            <tr>
                                <td>{{$good->name}}</td>
                                <td>{{$good->description}}</td>
                                <td>{{$good->value}}</td>
                                <td><button><a href="{{route('mod/',$good->id)}}">Editar</a>
                                    </button>
                                </td>   	
                            </tr>
                            @endforeach
                </table>
            </div>			
         </main>
    </div>     
    <footer>
        <div align="center">
	        <a href="{{route('index')}}"><button>Volver</button></a>
	    </div>
    </footer>
        <script src="js/sweetalert.min.js"></script>
        @include('sweet::alert')
    </body>
</html>