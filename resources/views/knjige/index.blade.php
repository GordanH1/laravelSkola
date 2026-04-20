<!DOCTYPE html>
<html>
<head>
    <title>Knjige</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px;
            display: inline-block;
            width: 200px;
        }
    </style>
</head>
<body>

<h1>Popis knjiga</h1>

@foreach($knjige as $knjiga)
    <div class="card">
        <h3>{{ $knjiga['naslov'] }}</h3>
        <p>Autor: {{ $knjiga['autor'] }}</p>
        <p>Godina: {{ $knjiga['godina'] }}</p>
    </div>
@endforeach

</body>
</html>