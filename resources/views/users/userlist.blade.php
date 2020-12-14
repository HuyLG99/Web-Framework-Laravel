@extends('layouts.layout1')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>User Profile</th>
                        <th>Edit</th>


                    </tr>
                    </thead>



                    <tbody>
                    @foreach($users as $user)
                    <tr>

                       <th>

                                <a href="/profiles/{{$user->id}}">{{$user->name}}</a>

                       </th>
                       <th>
                           <a href="/profiles/{{$user->id}}/edit" class="btn btn-primary" role="button">edit</a>
                       </th>

                   </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


{{--    <ul>--}}
{{--        @foreach($users as $user)--}}
{{--            <li>{{$user->name}}</li>--}}
{{--            <li>{{$user->email}}</li>--}}
{{--            <li>{{$user->id}}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
@endsection
