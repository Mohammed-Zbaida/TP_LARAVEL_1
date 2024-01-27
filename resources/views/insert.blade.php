//insert.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('insert.file') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="file">
        <button type="submit">Upload</button>
    </form>
    <br><br><br>
    <form action="{{route('download.file')}}" method="GET">
        @csrf
        <button type="submit">download</button>
    </form>
</body>
</html>