<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: blanchedalmond;">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="error-container">
                <h1 class="display-4 text-danger">Page Not Found</h1>
                <button onclick="location.href='{{ route('home') }}'" class="btn btn-success btn-lg">BACK</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
