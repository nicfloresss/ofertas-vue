<!DOCTYPE html>
<html>
<head>
<title>Detalle de Oferta</title>
</head>

<body>

<h1>Información de la oferta</h1>

<ul>

<li><strong>Titulo:</strong> {{ $oferta->titulo }}</li>

<li><strong>Vigencia:</strong> {{ $oferta->vigencia }}</li>

<li><strong>Tienda:</strong> {{ $oferta->tienda }}</li>

<li><strong>Precio original:</strong> {{ $oferta->precio_original }}</li>

<li><strong>Precio descuento:</strong> {{ $oferta->precio_descuento }}</li>

</ul>

<p>

<a href="{{ route('ofertas.edit', $oferta) }}">Editar</a>

<form action="{{ route('ofertas.destroy', $oferta) }}" method="POST">

@csrf
@method('DELETE')

<button type="submit">Eliminar</button>

</form>

</p>

<p>
<a href="{{ route('ofertas.index') }}">Volver a la lista</a>
</p>

</body>
</html>