@extends('skateboards/main')
@section('content')
<div class="col-lg-8 container">
    <div class="card card-small mb-4">
        <div class="card-header border-bottom">
            <h6 class="m-0">Update product</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <div class="row">
                    <div class="col">
                        <form method = "POST" action="/product_update_db/{{$product->id}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <div class="form-group">
                                <label class="text-black" for="email">Category ID</label>
                                <input type="text" id="category" name="category" class="form-control" value="{{ $product->catId }}">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Prekes pavadinimas</label>
                                <input type="text" id="title" name="name" class="form-control" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="message">Prekes Aprasymas</label>
                                <textarea name="description" cols="30" rows="7" class="form-control">{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="message">Prekes nuotrauka</label>
                                <input type="file" id="image" name="image" class="form-control" value="{{ $product->img }}">
                                <img src="{{asset('storage/'.$product->img)}}" alt="Image" class="img-fluid rounded">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="subject">Prekes Kaina</label>
                                <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="subject">Prekes Kiekis</label>
                                <input type="text" id="location" name="quantity" class="form-control" value="{{ $product->quantity }}">
                            </div>
                            <button type="submit" name="submit" class="btn btn-accent">Patvirtinti</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
@stop
