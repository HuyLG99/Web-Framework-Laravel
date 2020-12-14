@extends('layouts.layout1')

@section('content')

@foreach($product as $product)

        <p>{{$product->name_pro}}</p>
        <p>{{$product->kind_pro}}</p>
        <p>{{$product->price}}</p>

@endforeach

@endsection
