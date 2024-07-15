<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category Page</title>
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
    <br>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Category</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{Session::has('success')?Session::get('success'):''}}</span>
                            <form action="{{ route('category.store') }}" method="post" >
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Publication Status</label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" checked value="1"/>Published</label>
                                        <label><input type="radio" name="status" value="0"/>Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Create"/>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>




