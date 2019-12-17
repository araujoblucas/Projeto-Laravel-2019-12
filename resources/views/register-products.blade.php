<!DOCTYPE html>
<html>
<head>
	<title>Registro de Produtos</title>
</head>
<body>
	<ul>
		@foreach ($errors->all() as $message) 
		    <li>{{$message}}</li>
		@endforeach
	</ul>
	<form method="POST" action="{{route('products.insert')}}">
		@csrf
		<input type="text" name="name">
		<input type="text" name="description">
		<input type="text" name="value">
		<input type="submit" value="Botão">
	</form>
</body>
</html>