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
                        {!! Form::token() !!}
                        <div class="form-group col-md-6">
                            {!! Form::label('title', 'Title',['class'=>'control-label']) !!}
                            {!! Form::text('title',NULL,['class'=>'form-control']) !!}

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <b class="text-danger">{{ $errors->first('title') }}</b>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('genre', 'Genre',['class'=>'control-label']) !!}
                            {!! Form::text('genre',NULL,['class'=>'form-control']) !!}

                            @if ($errors->has('genre'))
                                <span class="help-block">
                                    <b class="text-danger">{{ $errors->first('genre') }}</b>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            {!! Form::label('actor', 'Actor',['class'=>'control-label']) !!}
                            {!! Form::text('actor',NULL,['class'=>'form-control']) !!}

                            @if ($errors->has('actor'))
                                <span class="help-block">
                                    <b class="text-danger">{{ $errors->first('actor') }}</b>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group col-md-12">
                            {!! Form::submit('Submit',['class'=>'btn btn-success']) !!}
                        </div>
                            
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
