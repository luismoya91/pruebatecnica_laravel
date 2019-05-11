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
        <main>   
            <div class="content">
                <div class="title m-b-md">
                    Prueba Tecnica Luis Miguel Moya
                </div>
                <div class="contenedor_1" align="center">
                    <h2>
                        Agregar registro nuevo a la tabla "goods" 
                    </h2>
			    <form class="form1" method="POST" action="{{route('guardar')}}" > 
                    <table border="1">
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="name">
                            </td>
                        </tr>
                        <tr>	
                            <th>Description </th>
                            <td><input type="text" name="descripcion"></td>
                        </tr>
                        <tr>	
                            <th>Value</th>
                            <td><input type="text" name="valor">
                            <input type="hidden" name="_token" value="{{ Session::token() }}"></td>
                        </tr>
                    </table>
                    <div>
                        <input type="submit" value="Registar">
                    </div>
		          </form>
                </div>
            </div>
        </main>
        <footer>
            <div align="center">
			 <a href="{{route('index')}}"><button>Volver</button></a>
		</div>
        </footer>
        <script src="js/sweetalert.min.js"></script>
        @include('sweet::alert')
    </body>
</html>
