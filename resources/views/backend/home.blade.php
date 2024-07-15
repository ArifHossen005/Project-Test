<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fixed-height {
            height: 200px; /* Adjust the height as needed */
        }
        .text-dark-bg {
            background-color: #333;
            color: white;
            display: block;
            padding: 5px;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container-fluid">

    <p>
    <h1 class="text-center bg-dark text-white p-4">Welcome Admin Page</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    </p>

    <div class="row">
        <div class="col-md-3">
            <div class="bg-gray-50 p-4 fixed-height" style="background-color:#D9EEE1; text-align: center">
                <h4 class="mb-3">CATEGORIES LIST </h4>
                <a href="{{route('category.add')}}" class="text-dark-bg">ADD CATEGORY</a>
                <a href="{{route('category.manage')}}" class="text-dark-bg">MANAGE CATEGORY</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="bg-gray-50 p-4 fixed-height" style="background-color:#D9EEE1; text-align: center">
                <h4 class="mb-3">SUB-CATEGORIES LIST </h4>
                <a href="{{route('subCategory.add')}}" class="text-dark-bg">ADD SUB-CATEGORY</a>
                <a href="{{route('subCategory.manage')}}" class="text-dark-bg">MANAGE SUB-CATEGORY</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="bg-gray-50 p-4 fixed-height" style="background-color:#D9EEE1; text-align: center">
                <h4 class="mb-3">PRODUCTS LIST</h4>
                <a href="{{route('product.add')}}" class="text-dark-bg">ADD PRODUCT</a>
                <a href="{{route('product.manage')}}" class="text-dark-bg">MANAGE PRODUCT</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="bg-gray-50 p-4 fixed-height" style="background-color:#D9EEE1; text-align: center">
                <h4 class="mb-3">TRANSACTIONS</h4>
                <a href="{{route('transaction.manage')}}" class="text-dark-bg">SEE ALL TRANSACTION</a>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
