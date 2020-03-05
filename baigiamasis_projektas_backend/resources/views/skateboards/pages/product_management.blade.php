@extends('skateboards/main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Products</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">Category Name</th>
                            <th scope="col" class="border-0">Product Name</th>
                            <th scope="col" class="border-0">Product Description</th>
                            <th scope="col" class="border-0">Product Image</th>
                            <th scope="col" class="border-0">Product Price</th>
                            <th scope="col" class="border-0">Product Quantity</th>
                            <th scope="col" class="border-0">Valdymas</th>
                            <th scope="col" class="border-0">Valdymas</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($products as $product)
                                    <td>{{ $product->catId }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->img }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td><a class = "btn btn-danger" href = "/product_update/{{$product->id}}">Redaguoti</a></td>
                                    <td><a class = "btn btn-danger" href = "/product_delete/{{$product->id}}">Trinti</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
