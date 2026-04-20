<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
</head>
<body>

<h1>Popis članaka</h1>

@foreach($clanci as $clanak)
    <div>
        <h2>{{ $clanak['naslov'] }}</h2>
        <p>Autor: {{ $clanak['autor'] }}</p>

        <a href="{{ route('blog.show', $clanak['id']) }}">
            Pročitaj više
        </a>
    </div>
@endforeach

</body>
</html>