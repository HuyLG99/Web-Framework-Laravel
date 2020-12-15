@extends('layouts.layout1')

@section('content')
{{--    <ul>--}}
{{--        @foreach($users as $user)--}}
{{--            <li>--}}
{{--                <a href="/profiles/{{$user->id}}">{{$user->name}}</a>--}}
{{--                <a href="/profiles/{{$user->id}}/edit" class="btn btn-primary" role="button">edit</a>--}}

{{--            </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Liệt kê danh mục</h6>
            </div>
            <div class="p-3">
                <div class="row mx-md-n5">
                    <div class="col px-md-5">
                        <div class="p-3 border bg-light">
                            <a href="users/create" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                <span class="text">Create user</span>
                            </a>
                        </div>
                    </div>
                    <div class="col px-md-5">
                        <div class="p-3 border bg-light">
                            <a href="profiles/create" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                <span class="text">Add profile</span>
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
                        <th>Email</th>
                        <th>Password</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>
                                <a onclick="checkAvaProfile({{ $user->id }})">
                                    {{ $user->name }}
                                </a>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <input id="in{{$user->id}}" type="password" readonly value="{{ $user->password }}">
                            </td>
                            <td>
                                <a href="profiles/{{ $user->id }}/edit" class="btn btn-success btn-icon btn-sm"
                                   role="button">
                                            <span class="icon">
                                                <i class="fas fa-user-edit"></i>
                                            </span>
                                    Edit
                                </a>
                            </td>

                            <td>
                                <form class="user" action="users/{{ $user->id }}" method="POST">
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
                            <td>
                                <button id="{{$user->id}}" onclick="ShowPass(this)" class="btn btn-light btn-icon btn-sm">
                                            <span class="icon">
                                                <i class="fas fa-eye" aria-hidden="true"></i>
                                            </span>
                                </button>
                            </td>
                        </tr>
                        <!-- Delete Modal Logout -->

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function ShowPass(haha){
        let a = haha.id;
        let b = document.getElementById('in'+ a);
        if(b.type == "password"){
            b.type = "text";
        }else{
            b.type = "password";
        }

    }

</script>
@endsection
