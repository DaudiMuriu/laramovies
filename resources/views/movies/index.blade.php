@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Movies</div>

                <div class="card-body">
                    
                    <table class="table table-bordered">
                        <thead>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Actor</th>
                            <th>Actions</th>
                        </thead>

                        <tbody>
                            @foreach($movies as $movie)
                            <tr>
                                <td>{{$movie->title}}</td>
                                <td>{{$movie->genre}}</td>
                                <td>{{$movie->actor}}</td>
                                <td>
                                    <span>
                                        <button class="btn btn-sm btn-success">Edit</button>
                                    </span>
                                    <span>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </span>
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
@endsection
