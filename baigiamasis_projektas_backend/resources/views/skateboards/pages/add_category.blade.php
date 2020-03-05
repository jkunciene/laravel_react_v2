@extends('skateboards/main')
@section('content')
    <div class="col-lg-8 container">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Add category</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="row">
                        <div class="col">
                            <form method = "POST" action="/store_category">
                                @csrf
                                <div class="form-group">
                                    <label for="feInputAddress">Category</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter category name">
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
