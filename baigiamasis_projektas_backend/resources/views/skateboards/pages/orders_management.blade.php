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
                            <th scope="col" class="border-0">Order ID</th>
                            <th scope="col" class="border-0">Buyer Name</th>
                            <th scope="col" class="border-0">Buyer Surname</th>
                            <th scope="col" class="border-0">Buyer Address</th>
                            <th scope="col" class="border-0">Product ID</th>
                            <th scope="col" class="border-0">Product Quantity</th>
                            <th scope="col" class="border-0">Order Sum</th>
                            <th scope="col" class="border-0">Order Status</th>
                            <th scope="col" class="border-0">Valdymas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($orders as $order)
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->buyerName }}</td>
                                <td>{{ $order->buyerSurname }}</td>
                                <td>{{ $order->buyerAddress }}</td>
                                <td>{{ $order->productId }}</td>
                                <td>{{ $order->productQty }}</td>
                                <td>{{ $order->OrderSum }}</td>
                                <td>{{ $order->orderStatus }}</td>
                                <td><button type="button" name="submit" class="btn btn-danger" data-toggle="modal" data-target="#ticket">Keisti uzsakymo busena</button></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <form method = "POST" action="/order_status_update/{{$order->id}}" enctype="multipart/form-data">
                        @csrf
                    <div class="modal fade bd-example-modal-lg" id = "ticket" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Pasirinkite norima statusa (matote pazymeta esamo uzsakymo statusa)</h5>
                                </div>
                                <div class="modal-body">
                                    <select name="orderStatus">
                                        <option>{{ $order->orderStatus }}</option>
                                        <option>Processing</option>
                                        <option>Canceled</option>
                                    </select>
                                </div>
                                <div class = "modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Patvirtinti</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Uždaryti langą</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
