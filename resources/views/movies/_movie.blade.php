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
    