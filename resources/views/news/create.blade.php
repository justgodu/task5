<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="{{ route('adminstore')}}" method="POST">
            @csrf
            <input class="form-control" type="text" name="title" placeholder="News title">
            <label for="content"></label>
            <textarea class="form-control" name="content"></textarea>
            <button class="btn w-100 btn-primary">Submit</button>

        </form>
    </div>
</body>
</html>