

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Category Page</title>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Manage Category</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Serial No.</th>
                                    <th>CategoryName</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->status==1?'Published' :'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('category.delete',['id'=>$category->id])}}" onclick="return confirm('Are you sure?')"  class="btn btn-success">Delete</a>
                                    </td>
                                </tr>
                                @endforeach


                                </tbody>
                            </table>
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






