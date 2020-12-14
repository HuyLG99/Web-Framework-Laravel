@extends('layouts.layout1')

@section('content')
    <form class="product" action="{{ route('products.update',['product' => $product->id]) }}" method="POST">
    @csrf
    @method('PUT')<!-- khai báo này dùng để thiết lập phương thức PUT
									nếu không khai báo thì khi submit không thiết lập HttpPUT -->
        <div class="form-group">
            <input type="text" name="product_id" class="form-control form-control-user" id="product_id" placeholder="Product ID" value="{{$product->product_id}}">
        </div>
        <div class="form-group" >
            <input type="text" name="name_pro" class="form-control form-control-user" id="name_pro" placeholder="Full Name" value="{{$product->name_pro}}">
        </div>
        <div class="form-group">
            <input type="text" name="kind_pro" class="form-control form-control-user" id="kind_pro" placeholder="Kind" value="{{$product->kind_pro}}">
        </div>
        <div class="form-group">
            <input type="text" name="qty_pro" class="form-control form-control-user" id="qty_pro" placeholder="Qty" value="{{$product->qty_pro}}">
        </div>

        <div class="form-group">
            <input type="text" name="price" class="form-control form-control-user" id="price" placeholder="Price" value="{{$product->price}}">
        </div>



        <input type="submit" class="btn btn-primary" value="Update">
    </form>
@endsection
