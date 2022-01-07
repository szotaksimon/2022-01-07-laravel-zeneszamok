<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeneszámok</title>
</head>
<body>
<h1>Zeneszámok</h1>
    <table>
        <tr>
            <th>Song title</th>
            <th>Singer</th>
            <th>Length (sec)</th>
        </tr>
        @foreach($songs as $song)
            <tr>
                <td>{{ $song->title }}</td>
                <td>{{ $song->singer }}</td>
                <td>{{ $song->length }} s</td>
            </tr>
        @endforeach
    </table>
</body>
</html>