<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One-Page Ecommerce Site</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav>
    <div class="navbar bg-dark text-white" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 1000; padding: 10px;">
        <a href="{{ route('home') }}" style="text-decoration: none; color: white;">E-Commerce Site</a>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; gap: 20px;" class="mt">
            <li style="display: inline;">
                <a href="{{ route('login') }}" style="text-decoration: none; color: #fff; background-color: #007bff; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s;">
                    Login
                </a>
            </li>
            <li style="display: inline;">
                <a href="{{ route('register') }}" style="text-decoration: none; color: #fff; background-color: #007bff; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s;">
                    Register
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container my-5">
    <h1 class="text-center mb-5">Products</h1>
    <div class="row">

{{--        @foreach($products as $product)--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card mb-4">--}}
{{--                    <img src="{{asset($product->image)}}" class="card-img-top" height="200" width="150" alt="Product 1">--}}
{{--                    <div class="card-body">--}}
{{--                        <p class="card-text">Category - {{$product->category->name ?? ''}}</p>--}}
{{--                        <p class="card-text">{{$product->subCategory->sname ?? ''}}</p>--}}
{{--                        <h5 class="card-title">Product Name - {{$product->pname}}</h5>--}}
{{--                        <p class="card-text">{{$product->price}}</p>--}}
{{--                        <p class="card-text">Date: {{ \Carbon\Carbon::now()->format('Y-m-d') }}</p>--}}
{{--                        <a href="{{ route('transactionModal', $product->id) }}" class="btn btn-primary">Buy Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}

        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset($product->image)}}" class="card-img-top" height="200" width="150" alt="Product 1">
                    <div class="card-body">
                        <p class="card-text">Category - {{$product->category->name ?? ''}}</p>
                        <p class="card-text">{{$product->subCategory->sname ?? ''}}</p>
                        <h5 class="card-title">Product Name - {{$product->pname}}</h5>
                        <p class="card-text">{{$product->price}}</p>
                        <p class="card-text">Date: {{ \Carbon\Carbon::now()->format('Y-m-d') }}</p>
                        <a href="{{ route('transactionModal', $product->id) }}" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach



    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
