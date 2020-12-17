@extends('layouts.layout1')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Order Detail Table</h4>
                    </div>
                    <p>
                        Status:
                        @if($orders->status==1)
                            await
                            @elseif($orders->status==2)
                            pending
                        @else
                        done
                            @endif
                    </p>
                    <form action="{{route('orders.update',['order'=>$orders->id])}}" method="POST">
                        @csrf
                        @method('Put')

                        <select name="status">
                            <option selected disabled >
                                @if($orders->status==1)
                                    Await
                                @elseif($orders->status==2)
                                    Pending
                                @else
                                    Done
                                @endif
                            </option>
                            <option  value="1">Await</option>
                            <option  value="2">Pending</option>
                            <option  value="3">Done</option>
                        </select>
                        <button class="btn btn-danger btn-fill" type="submit">Change Status
                            User</button>
                    </form>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>
                                    Order id
                                </th>
                                <th>
                                    Product Name
                                </th>
                                <th>Quantity</th>
                                <th>Total Price</th>

                                <th>Create At</th>
                                <th>
                                    Update At
                                </th>
                                <th></th>
                                <th></th>
                                </thead>
                                <tbody>
                                @foreach ($order_detail as $order)
                                <tr>
                                    <td>
                                        {{ $order->id }}
                                    </td>
                                    <td>
                                        {{$order->name_pro}}
                                    </td>

                                    <td>
                                        {{ $order->qty_order }}
                                    </td>
                                    <td>
                                        {{ $order->total_price }}
                                    </td>

                                    <td>
                                        {{ $order->updated_at }}
                                    </td>
                                    <td>
                                        <a  href="/order_detail/{{$order->id}}" class="btn btn-info btn-fill">View</a>
                                    </td>

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
