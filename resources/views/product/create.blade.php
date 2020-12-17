@extends('layouts.layout1')

@section('content')


{{--    <div class="row">--}}
{{--        <div class="col-lg-12">--}}
{{--            <!-- Form Basic -->--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">--}}

{{--                    <h6 class="m-0 font-weight-bold text-light">Add Product</h6>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}

{{--                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    @method('POST')<!-- khai báo này dùng để thiết lập phương thức PUT--}}
{{--                                            nếu không khai báo thì khi submit không thiết lập HttpPUT -->--}}
{{--                        <div class="row">--}}

{{--                            <div class="col-lg-8 mb-4">--}}
{{--                                --}}{{-- <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">User Id</label>--}}
{{--                                    <input type="text" name="profile_user_id" class="form-control" disabled--}}
{{--                                        id="exampleInputPassword1" placeholder="Nhập user id">--}}
{{--                                </div> --}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Product name</label>--}}
{{--                                    <input type="text" name="product_name" class="form-control"--}}
{{--                                           id="exampleInputPassword1" placeholder="Enter product name">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Product kind</label>--}}
{{--                                    <input type="text" name="kind_pro" class="form-control"--}}
{{--                                           id="exampleInputPassword1" placeholder="Enter product kind">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Product quantity</label>--}}
{{--                                    <input type="number" name="qty_pro" class="form-control"--}}
{{--                                           id="exampleInputPassword1" placeholder="Enter product quantity">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Product price</label>--}}
{{--                                    <input type="number" name="price" class="form-control"--}}
{{--                                           id="exampleInputPassword1" placeholder="Enter product price">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="col-lg-4 mb-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Product image</label>--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <input type="file" name="product_avatar" class="custom-file-input" id="customFile">--}}
{{--                                        <label class="custom-file-label" for="customFile">Choose file</label>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <button type="submit" class="btn btn-light btn-icon">--}}
{{--                                    <span class="icon">--}}
{{--                                        <i class="fas fa-plus-circle"></i>--}}
{{--                                    </span>Add Product--}}
{{--                                </button>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">

                    <h6 class="m-0 font-weight-bold text-light">Create Product</h6>
                </div>
                <div class="card-body">

                    <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    @method('POST')<!-- khai báo này dùng để thiết lập phương thức PUT
                                            nếu không khai báo thì khi submit không thiết lập HttpPUT -->
                        <div class="row">
                            <div class="col-lg-8 mb-4">


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product name</label>
                                    <input type="text" name="name_pro" class="form-control"
                                           placeholder="Enter product name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product kind</label>
                                    <input type="text" name="kind_pro" class="form-control"
                                          placeholder="Enter product kind">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product quantity</label>
                                    <input type="number" name="qty_pro" class="form-control"
                                           id="exampleInputPassword1" placeholder="Enter product quantity">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product price</label>
                                    <input type="number" name="price" class="form-control"
                                           id="exampleInputPassword1" placeholder="Enter product price">
                                </div>

                            </div>

                                <br>
                                <button type="submit" class="btn btn-light btn-icon">
                                    <span class="icon">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>Add user
                                </button>
                                <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
@endsection
