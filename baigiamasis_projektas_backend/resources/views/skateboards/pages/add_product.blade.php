@extends('skateboards/main')
@section('content')
    <div class="col-lg-8 container">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Add product</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="row">
                        <div class="col">
                            <form method = "POST" action="/store_product" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="feInputAddress">Product category</label>
                                    <select name="category" class = "custom-select">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="feInputAddress">Product name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter product name">
                                </div>
                                <div class="form-group">
                                    <label for="feInputAddress">Product description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Enter product description">
                                </div>
                                <div class="form-group">
                                    <label for="feInputAddress">Product image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="feInputAddress">Product price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Enter product price">
                                </div>
                                <div class="form-group">
                                    <label for="feInputAddress">Product quantity</label>
                                    <input type="text" class="form-control" name="quantity" placeholder="Enter product quantity">
                                </div>
                                <button type="submit" name="submit" class="btn btn-accent">Submit</button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@stop
