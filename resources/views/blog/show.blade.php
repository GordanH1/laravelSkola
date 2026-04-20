<!DOCTYPE html>
<html>
<head>
    <title>{{ $clanak['naslov'] }}</title>
</head>
<body>

<h1>{{ $clanak['naslov'] }}</h1>

<p><strong>Autor:</strong> {{ $clanak['autor'] }}</p>
<p><strong>Datum:</strong> {{ $clanak['datum'] }}</p>

<p>{{ $clanak['sadrzaj'] }}</p>

<a href="{{ route('blog.index') }}">Nazad na blog</a>

</body>
</html>