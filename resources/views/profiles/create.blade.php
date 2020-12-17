@extends('layouts.layout1')
@section('js')
    <script>
        $("#avatar").on('change', function() {
            var filename = $(this).val();
            $(this).next('.custom-file-label').html(filename);
        })

    </script>
@endsection('js')
{{--<script>--}}
{{--    function buttonfileClick() {--}}
{{--        document.getElementsByTagName("input")[0].click();--}}
{{--    }--}}

{{--</script>--}}


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
            <label for="exampleInputPassword1">Avatar</label><br>

            <div class="card col-sm-4">
                <img class="card-img-top" src="{{URL::to($profile->avatar)}}"/>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="custom-file" >
                    <input type="file" class="custom-file-input " id="avatar" name="avatar" >
                    <label for="avatar" class="custom-file-label">{{$profie->avatar}}</label>
                </div>
            </div>

        </div>
        <input type="submit" class="btn btn-primary" value="Create">
        <a href="{{url()->previous('/')}}" class="btn btn-primary">Back</a>
    </form>
@endsection










