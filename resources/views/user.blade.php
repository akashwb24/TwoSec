<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <center>
        <div class="container">
            <h2>User Verification Form</h2>
            <form action="processform" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="enr">Enrollment:</label>
                    <input type="password" class="form-control" id="enr" placeholder="Enter enrollment"
                        name="enr">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        @if (Session('success'))
            <div class="alert alert-success">
                <strong>{{ Session('success') }}</strong>
            </div>
        @endif

        @if (Session('error'))
            <div class="alert alert-danger">
                <strong>{{ Session('error') }}</strong>
            </div>
        @endif
    </center>
</body>
</html>