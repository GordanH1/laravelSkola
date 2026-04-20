<!DOCTYPE html>
<html>
<head>
    <title>Proizvodi</title>
</head>
<body>

<h1>Popis proizvoda</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Naziv</th>
        <th>Cijena</th>
    </tr>

    @foreach($proizvodi as $proizvod)
        <tr>
            <td>{{ $proizvod['id'] }}</td>
            <td>{{ $proizvod['naziv'] }}</td>
            <td>{{ $proizvod['cijena'] }} €</td>
        </tr>
    @endforeach

</table>

</body>
</html>