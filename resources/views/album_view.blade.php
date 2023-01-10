<!DOCTPE html>
<html>
<head>
    <title>View Artists</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>Name</td>
        <td>Year</td>
        <td>Image</td>
        <td>Songs</td>

    </tr>
    @foreach ($albums as $album)
        <tr>
            <td>{{ $album->name }}</td>
            <td>{{ $album->year }}</td>
            <td><img src="{{ $album->image }}" alt="about images" style="width: 120px"></td>
            <td>
            @foreach($songs as $song)
                @if( $song->album_id == $album->id )

                    {{ ($song->name)}},<br>
                    @endif
                    @endforeach
            </td>

        </tr>
    @endforeach




</table>
</body>
</html>
