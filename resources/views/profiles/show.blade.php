{{--@extends('layouts.layout1')--}}

{{--@section('content')--}}
{{--    <p>Họ tên: {{$profile->full_name}}</p>--}}
{{--    <p>Địa chỉ: {{$profile->address}}</p>--}}
{{--    <p>Ngày sinh: {{$profile->birthday}}</p>--}}
{{--@endsection--}}

@extends('layouts.layout1')

@section('content')

    @if ($profile ?? '' !=null)
        @if ($message = Session::get('success'))
            <div class="alert alert-success"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
                <li>{{ $message }}  </li>
                @if ($message = Session::get('file'))
                    <li>{{ $message }}  </li>
                @endif
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
                <li>{{ $message }}  </li>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile - {{ $profile->full_name }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item"><a href="./users">User</a></li>

            </ol>
        </div>
        {{-- col-xl-8 col-lg-7 mb-4 --}}

        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">

                        <h6 class="m-0 font-weight-bold text-light">Profile</h6>
                        <div class="m-1">
                            <a href="{{ $user->id }}/edit" class="btn btn-light btn-icon btn"
                               role="button">
                            <span class="icon">
                                <i class="fas fa-user-edit"></i>
                            </span>
                                Edit
                            </a>
                            <a href="{{url()->previous('/users')}}" class="btn btn-dark btn-fill">Back</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="/ShoeManager/" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Avatar</label>
                                        <div class="card">
                                            <img class="card-img-top" src="{{URL::to($profile->avatar)}}"/>
                                            {{-- <div style="background-image: url({{$profile->avatar}}), width: 150px"></div> --}}
                                            {{-- <img class="card-img-top"
                                                src="{{ $profile->avatar }}"
                                                alt="Card image cap"> --}}
                                            <div class="card-body">
                                                <div class="row text-center">
                                                    <div class="col">
                                                        <a href="#" class="btn btn-lg mb-1" role="button">
                                                        <span class="icon">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </span>
                                                        </a>
                                                        <h5 class="text-center font-weight-bold">500</h5>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" class="btn btn-lg mb-1" role="button">
                                                        <span class="icon">
                                                            <i class="fab fa-twitter"></i>
                                                        </span>
                                                        </a>
                                                        <h5 class="text-center font-weight-bold">900</h5>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" class="btn btn-lg mb-1" role="button">
                                                        <span class="icon">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </span>
                                                        </a>
                                                        <h5 class="text-center font-weight-bold">700</h5>
                                                    </div>
                                                </div>


                                                {{-- <h5 class="card-title">
                                                    {{ $profile->full_name }}</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make
                                                    up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                                --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8 mb-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">User Id</label>
                                        <input type="text" name="category_user_id" class="form-control"
                                               id="exampleInputPassword1" placeholder="{{ $profile->user_id }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Full name</label>
                                        <input type="text" name="category_user_name" class="form-control"
                                               id="exampleInputPassword1" placeholder="{{ $profile->full_name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" name="category_user_name" class="form-control"
                                               id="exampleInputPassword1" placeholder="{{ $profile->address }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Birthday</label>
                                        <input type="text" name="category_user_name" class="form-control"
                                               id="exampleInputPassword1" placeholder="{{ $profile->birthday }}" disabled>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
@endsection
