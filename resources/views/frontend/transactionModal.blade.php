{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Transaction Page</title>--}}
{{--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container mt-5">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    Transaction Details--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <p class="card-text">Transaction Number: 123456789</p>--}}
{{--                    <p class="card-text">Product Name: {{$product->pname}}</p>--}}
{{--                    <p class="card-text">Price: {{$product->price}}</p>--}}
{{--                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back to Products</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Transaction Details
                </div>
                <div class="card-body">
                    <p class="card-text">Transaction Number: {{ $transactionNumber }}</p>
                    <p class="card-text">Product Name: {{ $product->pname }}</p>
                    <p class="card-text">Price: {{ $product->price }}</p>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

