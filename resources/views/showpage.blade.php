<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <h1>Product</h1>
        <div class="col-md-3">
            <h1>{{$product->name}}</h1>
            @foreach($photos as $photo)
                <img class="img-responsive img-circle" src="{{asset('storage/'.$photo->filename)}}" style="max-width:500px;">
                	<br/>
            @endforeach
        </div>
    </body>
</html>
