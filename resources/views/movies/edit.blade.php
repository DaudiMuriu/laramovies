@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Movie <code> {{ $movie->title }}</code></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    {!! Form::model($movie,array('route' => ['movie.update','id'=>$movie->id], 'method' => 'PUT')) !!}
                          @include('movies/_movie')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
