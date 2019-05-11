<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        

        <title>Prueba Tecnica Luis Miguel Moya</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css" type="text/css">
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Prueba Tecnica Luis Miguel Moya
            </div>  
        <section id="blog">
            <div class="contenedor">
                <article>
                    <a href="{{route('registrar')}}">
                        <button>
                            <img src="css/img/registrar.jpg">
                        </button>
                            <h2>Agregar Registro</h2>
                    </a>
                </article>
                <article>
                    <a href="{{route('modificar')}}">
                        <button>
                        <img src="css/img/modificar.jpg">
                        </button>
                        <h2>Editar Registro</h2>
                    </a>
                </article>
                <article>
                    <a href="{{route('eliminar')}}">
                        <button>
                            <img src="css/img/eliminar.jpg">                
                        </button>
                            <h2>Eliminar Registro</h2>
                    </a>
                </article>
            </div>
        </section>
        <footer>
            <div align="center">
	            <a href="{{route('login')}}"><button>Salir</button></a>
	        </div>
         </footer>
    </div>
    <script src="js/sweetalert.min.js"></script>
    @include('sweet::alert')
    </body>
</html>
