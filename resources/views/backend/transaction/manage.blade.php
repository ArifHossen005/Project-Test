<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
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
                            <h2 class="text-center">Manage Product</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>SI.NO</th>
                                    <th>Product name</th>
                                    <th>Date</th>
                                    <th>Transaction ID</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>



                                <tr>
                                    <td>1</td>
                                    <td>cname</td>
                                    <td>sname</td>
                                    <td>Mobile</td>
                                    <td>20-12-2024</td>
                                    <td>716516fasd</td>
                                    <td>ss</td>
                                    <td>
                                        <a href="" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-success">Delete</a>
                                    </td>
                                </tr>


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






