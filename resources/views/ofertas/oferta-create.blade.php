<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear oferta</title>
</head>

<body>

<h1>Formulario de Oferta</h1>

<p>
<a href="{{ route('ofertas.index') }}">Volver a la lista de ofertas</a>
</p>

<form action="{{ route('ofertas.store') }}" method="POST">

@csrf

<label>Titulo:</label>
<input type="text" name="titulo" value="{{ old('titulo') }}">
<br><br>

<label>Vigencia:</label>
<input type="date" name="vigencia" value="{{ old('vigencia') }}">
<br><br>

<label>Tienda:</label>
<input type="text" name="tienda" value="{{ old('tienda') }}">
<br><br>

<label>Precio original:</label>
<input type="number" step="0.01" name="precio_original">
<br><br>

<label>Precio descuento:</label>
<input type="number" step="0.01" name="precio_descuento">
<br><br>

<input type="submit" value="Guardar oferta">

</form>

</body>
</html>