<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>  

    <nav class="navbar navbar-expand-sm bg-dark">

    <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link text-light" href="/">Products</a>
        </li>
    </ul>
    </div>

    </nav>

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{$message}}</strong>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3"> 
                <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-4">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}"/>
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name="description">{{old('description', $product->description)}}</textarea>
                        @if($errors->has('description'))
                            <span class="text-danger">{{$errors->first('description')}}</span>
                         @endif
                    </div>
                    <div class="form-group mt-4 mb-4">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" value="{{old('image', $product->image)}}"/>
                        @if($errors->has('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>