@extends('layouts.layout1')

@section('content')
    <ul>
        @foreach($users as $user)
            <li>
                <a href="/profiles/{{$user->id}}">{{$user->name}}</a>
                <a href="/profiles/{{$user->id}}/edit" class="btn btn-primary" role="button">edit</a>
            </li>
        @endforeach
    </ul>
@endsection
