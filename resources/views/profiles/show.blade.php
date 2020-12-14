@extends('layouts.layout1')

@section('content')
    <p>Họ tên: {{$profile->full_name}}</p>
    <p>Địa chỉ: {{$profile->address}}</p>
    <p>Ngày sinh: {{$profile->birthday}}</p>
@endsection
