<!DOCTPE html>
<html>
<head>
    <title>View Artists</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>Name</td>
        <td>Group</td>


    </tr>
    @foreach ($artists as $artist)
        <tr>
            <td>{{ $artist->name }}</td>
            <td>{{ $artist->group }}</td>


        </tr>
    @endforeach

</table>
</body>
</html>
<script src="assets/js/main.js"></script>
