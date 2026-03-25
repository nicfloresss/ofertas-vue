<!DOCTYPE html>
<html>
<head>
<title>Editar oferta</title>
</head>

<body>

<h1>Editar Oferta</h1>

<p>
<a href="{{ route('ofertas.index') }}">Volver a la lista de ofertas</a>
</p>

<form action="{{ route('ofertas.update', $oferta) }}" method="POST">

@csrf
@method('PATCH')

<label>Titulo:</label>
<input type="text" name="titulo" value="{{ old('titulo') ?? $oferta->titulo }}">
<br><br>

<label>Vigencia:</label>
<input type="date" name="vigencia" value="{{ old('vigencia') ?? $oferta->vigencia }}">
<br><br>

<label>Tienda:</label>
<input type="text" name="tienda" value="{{ old('tienda') ?? $oferta->tienda }}">
<br><br>

<label>Precio original:</label>
<input type="number" step="0.01" name="precio_original" value="{{ old('precio_original') ?? $oferta->precio_original }}">
<br><br>

<label>Precio descuento:</label>
<input type="number" step="0.01" name="precio_descuento" value="{{ old('precio_descuento') ?? $oferta->precio_descuento }}">
<br><br>

<input type="submit" value="Actualizar oferta">

</form>

</body>
</html>