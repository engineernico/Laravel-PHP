<html>
<head>
    <title>form2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{trans('message.nav_name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

            <li class="nav-item active">
                <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }} <span class="sr-only">(current)</span></a>
            </li>
            @endforeach


        </ul>

    </div>
</nav>


<h1 align="center">اضافة العرض</h1>
<br>
<br>
<br>
<br>



<div class="container">
    <form action="{{route('store_r')}}" method="GET">

        @if(Session::has('success'))


            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first"> {{trans('message.input_name1')}}</label>
                    <input type="text" class="form-control" placeholder="{{trans('message.input_name_ar')}}" id="first" name="name_ar">
                </div>
                @error('name_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="first"> {{trans('message.input_name2')}}</label>
                    <input type="text" class="form-control" placeholder="{{trans('message.input_name_en')}}" id="first" name="name_en">
                </div>
                @error('name_en')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="first"> {{trans('message.input_price1')}}</label>
                    <input type="text" class="form-control" placeholder="{{trans('message.input_price')}}" id="first" name="price">
                </div>
                @error('price')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</body>
</html>
