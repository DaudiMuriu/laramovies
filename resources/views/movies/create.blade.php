@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Movie</div>

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

                    {!! Form::open(array('route' => 'movie.store', 'method' => 'POST')) !!}
                        @include('movies/_movie')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
