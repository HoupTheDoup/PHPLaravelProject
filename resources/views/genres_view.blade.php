<!DOCTPE html>
<html>
<head>
    <title>View Genres</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>Name</td>



    </tr>
    @foreach ($genres as $genre)
        <tr>
            <td>{{ $genre->name }}</td>

        </tr>
    @endforeach

</table>
</body>
</html>
