<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Prueba Tecnica Luis Miguel Moya</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
<body>
    <main>
    <div class="content">
        <div class="title m-b-md">
            Prueba Tecnica Luis Miguel Moya
        </div>
        <div class="contenedor_2" align="center">
            <h2>
                Modificar registro tabla "goods"
                Registro N° {{$goods->id}}  
            </h2>
                <form class="form1" action="{{route('mod_reg',$goods->id)}}" method="post">
            <table>	
                        <input type="hidden" name="_token" value="{{ Session::token() }}">				
                        <tr>
                            <th>N° Registro</th>
                            <th>Nuevo Name</th>
                            <th>Nueva Description</th>
                            <th>Nuevo Value</th>
                        </tr>
                        <tr>
                            <td><input type="number" name="numero_reg" value="{{$goods->id}}" readonly></td>
                            <td><input type="text" name="nombre" value="{{$goods->name}}"></td>
                            <td><input type="text" name="description" value="{{$goods->description}}"></td>
                            <td><input type="text" name="valor" value="{{$goods->value}}"></td> 	
                        </tr>
                </table>
                <div >
                    <input type="submit" value="Actualizar">
                </div>
                </form>
            </div>			
         </main>
    </div>     
    <footer>
        <div align="center">
	        <a href="/index"><button>Volver</button></a>
	    </div>
    </footer>
        <script src="js/sweetalert.min.js"></script>
        @include('sweet::alert')
    </body>
</html>