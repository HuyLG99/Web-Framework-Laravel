@extends('layouts.layout1')

@section('js')

@endsection
@section('content')


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr >
                        <th>Product</th>
                        <th>ID</th>


                    </tr>
                    </thead>



                    <tbody>
                    @foreach($product as $product)
                        <tr>

                            <th>

                                <a href="/products/{{$product->id}}">{{$product->name_pro}}</a>

                            </th>
                            <th>
                                <a href="/products/{{$product->id}}/edit" class="btn btn-primary" role="button">Edit</a>
                            </th>
                            <td>


                                    <form action="{{route('products.destroy', $product->id)}}" method="post" >
                                @csrf
                                @method("DELETE")


                                    <button type="submit" data-id="{{$product->id}}" id="deleteBtn" class="btn btn-danger btn-fill">Delete </button>
                                    </form>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>




@endsection
