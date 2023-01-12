<!DOCTYPE html>
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
        <td>Genre</td>

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
            <td>
                @foreach($genres_albums as $genre_album)
                    @if($genre_album->album_id == $album->id)
                        @foreach($genres as $genre)
                        @if($genre_album->genre_id == $genre->id)
                            {{ $genre->name }}
                        @endif
                        @endforeach
                    @endif

                @endforeach

            </td>

        </tr>
    @endforeach




</table>
</body>
</html>
