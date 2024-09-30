@extends('layouts.app')

@section('main')
    
    <div class="container">

        <div class="d-flex justify-content-end">
            <a href="products/create" class="btn btn-dark mt-2 mb-5">New product</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td> 
                    <td>
                        <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                        <form method="POST" class="d-inline" action="products/{{$product->id}}/delete">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
@endsection
