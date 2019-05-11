<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Prueba Tecnica Luis Miguel Moya</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/estilos.css" type="text/css">
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Prueba Tecnica Luis Miguel Moya
            </div>
            <form class="form1" method="POST" action="{{route('logeo')}}" >
				<table>
					<caption>LOGIN INGRESO</caption>
					<tr>
					    <input type="hidden" name="_token" value="{{ Session::token() }}">
						<td>Usuario :</td>
						<td><input type="text" name="user"></td>
					</tr>
					<tr>
						<td>Contraseña :</td>
						<td><input type="password" name="pass"></td>
					</tr>
				</table>
				<div>
					<input type="submit" value="Ingresar">
				</div>
			</form>
        </div>
        <script src="js/sweetalert.min.js"></script>
        @include('sweet::alert')
    </body>
</html>
