@extends('layouts.layout1')

@section('content')




    <div class="card-body">

        <!-- lấy thông tin thông báo đã thêm vào session để hiển thị -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
                <li>{{ $message }}  </li>
                @if ($message = Session::get('file'))
                    <li>{{ $message }}  </li>
                @endif

            </div>
        @endif

    <!-- lấy thông tin lỗi khi validate hiển thị trên màn hình -->
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



            <form class="product" action="{{ route('products.update', ['product' => $product->id]) }}"
                  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- khai báo này dùng để thiết lập phương thức PUT
                                                nếu không khai báo thì khi submit không thiết lập HttpPUT -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Product id</label>
                    <input type="text" name="product_id" class="form-control form-control-user"
                           id="product_id" placeholder="id" value="{{ $product->id }}" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name_pro" class="form-control form-control-user"
                           id="name_pro" placeholder="Name Product" value="{{ $product->name_pro }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Product Kind</label>
                    <input type="text" name="kind_pro" class="form-control form-control-user"
                           id="kind_pro" placeholder="Product Size" value="{{ $product->kind_pro }}">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="exampleInputEmail1">Product Quantity</label>
                        <input type="number" class="form-control form-control-user" name="qty_pro"
                               id="qty_pro" placeholder="Product Quantity" value="{{ $product->qty_pro }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="exampleInputEmail1">Product Price</label>
                        <input type="number" class="form-control form-control-user" name="price"
                               id="price" placeholder="Price" value="{{ $product->price }}">
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleInputPassword1">Avatar</label>
                    <div class="custom-file">
                        <input type="file" value="{{ $profile->avatar }}" name="profile_avatar"
                            class="custom-file-input" id="customFile">
                            <br><br>
                            <div class="card col-sm-4">
                                <img class="card-img-top"
                                    src="{{ URL::to('public/uploads/users/' . $profile->avatar) }}"
                                    alt="Card image cap">
                            </div>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div> --}}
                <button type="submit" class="btn btn-primary"> Update Product
                </button>
                {{-- <input type="submit" class="btn btn-primary" value="Update">
                --}}
            </form>


        </div>


        <a href="{{url()->previous('/products')}}" class="btn btn-primary btn-fill">Back</a>
        </form>
@endsection
