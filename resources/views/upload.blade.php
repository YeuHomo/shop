<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>图片上传</title>
</head>
<body>
    <form action="{{ route('image.upload')}}" method="POST" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" class="btn btn-success">
    </form>

</body>
<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>