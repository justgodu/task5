<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
     <div class="mb-4 card"  >
        <div class="card-title">{{$news->title}}</div>
        <div class="card-text">{{$news->content}}</div>
     </div>
    <form class="mb-4 card" action="{{ route("addnewcomment")}}" method="POST"  >
        @csrf
     <input type="hidden" name="id" value="{{$news->id}}">
        <textarea class="form-control" name="content"></textarea>
        <button class="btn btn-primary">Submit</button>
     </form>
     <div class="mt-4 card"  >
        <div class="card-title">{{$news->title}}</div>
        <div class="card-text">{{$news->content}}</div>
     </div>
    </div>
</body>
</html>