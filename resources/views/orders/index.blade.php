@extends('layouts.layout1')
@section('content')
    {{-- <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }}
                <a href="/profiles/{{ $user->id }}">{{ $user->name }}</a>
                <a href="/profiles/{{ $user->id }}/edit" class="btn btn-primary" role="button">edit</a>
            </li>
        @endforeach
    </ul> --}}
{{--    @include('order.order')--}}
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Order Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                {{-- <th></th> --}}
                                <th>
                                    id
                                </th>
                                <th>Status</th>
                                <th>Create At</th>
                                <th>
                                    Update At
                                </th>
                                <th></th>
                                <th></th>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
{{--                                    <tr id="element-{{$order->id}}">--}}
{{--                                        --}}{{-- <td>--}}
{{--                                            {{ $product->pictureURL }}--}}
{{--                                     </td> --}}
                                        <td>
                                            {{ $order->id }}
                                        </td>
{{--                                        <td>--}}
{{--                                            {{ $order->pre_money }}--}}
{{--                                        </td>--}}
                                        <td>
                                            {{ $order->status }}
                                        </td>
                                        <td>
                                            {{ $order->created_at }}
                                        </td>
                                        <td>
                                            {{ $order->updated_at }}
                                        </td>
                                        <td>
                                            <a  href="/order/{{$order->id}}" class="btn btn-info btn-fill">View</a>
                                        </td>
                                        <td>
                                            <button  data-id="{{$order->id}}" id="deleteBtn" class="btn btn-danger btn-fill">Detele</button>
                                        </td>
{{--                                         <td>--}}
{{--                                            <input type="password" name="" id="input-{{ $user->id }}"--}}
{{--                                                value="{{ $user->password }}">--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a class="btn btn-success btn-fill" href="/profile/{{ $user->id }}">View--}}
{{--                                                Profile</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <form action="/user/{{ $user->id }}" method="POST">--}}
{{--                                                @csrf--}}
{{--                                                @method('delete')--}}
{{--                                                <button class="btn btn-danger btn-fill" type="submit">Delete--}}
{{--                                                    User</button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <button class="btn btn-info btn-fill" id="{{ $user->id }}"--}}
{{--                                                onclick="viewClick(this)">view</button>--}}
{{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
