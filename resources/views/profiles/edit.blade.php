@extends('layouts.layout1')
@section('js')
    <script>
        $('#avatar').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection('js')
@section('content')
{{--    <form class="user" action="{{ route('profiles.update',['profile' => $profile->id]) }}" method="POST">--}}
{{--    @csrf--}}
{{--    @method('PUT')<!-- khai báo này dùng để thiết lập phương thức PUT--}}
{{--									nếu không khai báo thì khi submit không thiết lập HttpPUT -->--}}

{{--        <div class="form-group" >--}}
{{--            <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$profile->full_name}}">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Address" value="{{$profile->address}}">--}}
{{--        </div>--}}
{{--        <div class="form-group row">--}}
{{--            <div class="col-sm-6 mb-3 mb-sm-0">--}}
{{--                <input type="date" class="form-control form-control-user" name="birthday" id="birthday" placeholder="Birthday" value="{{$profile->birthday}}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <input type="submit" class="btn btn-primary" value="Update">--}}
{{--        <a href="{{url()->previous('users')}}" class="btn btn-primary">Back</a>--}}
{{--    </form>--}}




<div class="col-lg-12 mb-4">
    <div class="card mb-4">
        {{-- @foreach ($edit_category_user as $key => $edit_value_user) --}}
        <div class="card-body">
            <form class="user" action="{{ route('profiles.update', ['profile' => $profile->id]) }}"
                  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- khai báo này dùng để thiết lập phương thức PUT
                                                nếu không khai báo thì khi submit không thiết lập HttpPUT -->
                <div class="row">
                    <div class="col-lg-4 mb-4"></div>
                    <div class="col-lg-8 mb-4"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">User id</label>
                    <input type="text" name="user_id" class="form-control form-control-user"
                           id="full_name" placeholder="Full Name" value="{{ $profile->user_id }}" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" name="full_name" class="form-control form-control-user"
                           id="full_name" placeholder="Full Name" value="{{ $profile->full_name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control form-control-user"
                           id="address" placeholder="Address" value="{{ $profile->address }}">
                </div>
                {{--                    <div class="form-group">--}}
                {{--                        <label for="exampleInputEmail1">Phone</label>--}}
                {{--                        <input type="text" name="profile_phone" class="form-control form-control-user"--}}
                {{--                               id="profile_phone" placeholder="Phone" value="{{ $profile->phone }}">--}}
                {{--                    </div>--}}
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="exampleInputEmail1">Birthday</label>
                        <input type="date" class="form-control form-control-user" name="birthday"
                               id="birthday" placeholder="Birthday" value="{{ $profile->birthday }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Avatar</label><br>
{{--                     <div class="custom-file">--}}
{{--                        <input type="file" value="{{ $profile->avatar }}" name="profile_avatar"--}}
{{--                            class="custom-file-input" id="customFile">--}}
{{--                            <br><br>--}}
{{--                            <div class="card col-sm-4">--}}
{{--                                <img class="card-img-top"--}}
{{--                                    src="{{ URL::to('public/uploads/' . $profile->avatar) }}"--}}
{{--                                    alt="Card image cap">--}}
{{--                            </div>--}}
{{--                        <label class="custom-file-label" for="customFile">Choose file</label>--}}
{{--                    </div>--}}
                    <div class="card col-sm-4">
{{--                        <img class="card-img-top"--}}
{{--                             src="{{URL::to('public/uploads/' . $profile->avatar)}}" alt="Card image cap">--}}
                        <img class="card-img-top" src="{{URL::to($profile->avatar)}}"/>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="custom-file" >
                            <input type="file" class="custom-file-input " id="avatar" name="avatar" >
                            <label for="avatar" class="custom-file-label">{{$profile->avatar}}</label>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary"> Cập nhật user
                </button>

                {{-- <input type="submit" class="btn btn-primary" value="Update">
                --}}
            </form>
            <a href="{{url()->previous('/users')}}" class="btn btn-primary">Back</a>

        </div>
        {{--
    @endforeach --}}
    </div>
</div>
</div>
@endsection

