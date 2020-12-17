@extends('layouts.layout1')

@section('js')

@endsection
@section('content')

    @if(session()->has('messages'))
        @php
            alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.')->persistent(true);
        @endphp
    @else
        <div></div>
    @endif
{{--    @php--}}
{{--    dd(session()->has('messages'))--}}
{{--    @endphp--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Products list</h6>
                </div>
                <div class="p-3">
                    <div class="row mx-md-n5">
                        <div class="col px-md-5">
                            <div class="p-3 bg-light">
                                <a href="products/create" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <span class="text">Add product</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Kind</th>
                            <th>Quantity</th>
                            <th>Price</th>

                            <th></th>
                            <th></th>
                            <th></th>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Kind</th>
                            <th>Quantity</th>
                            <th>Price</th>

                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach ($product as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name_pro }}</td>
                                <td>{{ $product->kind_pro }}</td>
                                <td>{{ $product->qty_pro }}</td>
                                <td>{{ $product->price }}</td>

                                <td>
                                    <a href="products/{{ $product->id }}/edit" class="btn btn-success btn-icon btn-sm"
                                       role="button">
                                            <span class="icon">
                                                <i class="fas fa-user-edit"></i>
                                            </span>
                                        Edit
                                    </a>
                                </td>

                                <td>
                                    <form class="user" action="products/{{ $product->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this user?');"
                                                value="Delete">
                                                <span class="icon">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            Delete
                                        </button>
                                    </form>
                                </td>
{{--                                <td>--}}
{{--                                    <button id="{{$product->id}}" class="btn btn-light btn-icon btn-sm">--}}
{{--                                            <span class="icon">--}}
{{--                                                <i class="fas fa-eye" aria-hidden="true"></i>--}}
{{--                                            </span>--}}
{{--                                    </button>--}}
{{--                                </td>--}}
                            </tr>
                            <!-- Delete Modal Logout -->

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection



