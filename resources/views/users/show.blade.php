@extends('layouts.layout1')

@section('content')
    <p>{{$users->name}}</p>
    <p>{{$users->email}}</p>
    <p>{{$users->id}}</p>
@endsection
