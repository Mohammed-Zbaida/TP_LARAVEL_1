<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download File</title>
</head>
<body>

    <!-- Add this button to trigger the file download -->
    <form action="{{ route('download.file') }}" method="get">
        @csrf
        <button type="submit">Download File</button>
    </form>

</body>
</html>
