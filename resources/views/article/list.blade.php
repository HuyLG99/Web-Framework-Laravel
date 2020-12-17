@extends('layouts.layout1')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>User</th>
                        <th>Body</th>
                        <th>Create At</th>
                        <th>Tags</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->title}}</td>
                            <td><a href="/profiles/{{$article->user_id}}">{{$article->user->name}}</a></td>
                            <td>{{$article->body}}</td>
                            <td>{{$article->created_at}}</td>
                            <td>
                                @foreach($article->tags as $tag)
                                    <a href="#">{{$tag->tag}} </a> ,
                                @endforeach
                            </td>
                            <th>Edit</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
