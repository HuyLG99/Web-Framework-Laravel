@extends('layouts.layout1')

@section('content')
    <form class="profile" action="/profiles" method="POST">
    @csrf
        <div class="form-group" >
            <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" >
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Address" >
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="date" class="form-control form-control-user" name="birthday" id="birthday" placeholder="Birthday" >
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="avatar" class="form-control form-control-user" id="avatar" placeholder="Avartar" >
        </div>
        <input type="submit" class="btn btn-primary" value="Create">
        <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
    </form>
@endsection
