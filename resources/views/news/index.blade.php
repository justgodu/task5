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
        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>სათაური</th>
                <th>კონტენტი</th>
                <th>მოქმედება</th>
            </tr>
            @foreach ($news as $new)
            <tr>
                <td>{{++$loop->index}}</td>
                <td>{{ $new->title}}</td>
                <td>{{ $new->content}}</td>
                <td>
                <form action="{{ route('admindestroy')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $new->id}}">
                    <button class="btn btn-danger">წაშლა</button>
                </form>
                    <button class="btn btn-warning">ჩასწორება</button>
            <a href="{{ route('adminshow',["id"=> $new->id])}}" class="btn btn-success">დათვალიერება</a>
               
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>