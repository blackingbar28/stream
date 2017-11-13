<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('league_id') ? ' has-error' : '' !!}">
    {!! Form::label('league_id', 'Category') !!}
    {!! Form::select('league_id', $leagues, null, ['class' => 'form-control']) !!}

    @if ($errors->has('league_id'))
        <span class="help-block">
            <strong>{!! $errors->first('league_id') !!}</strong>
        </span>
    @endif
</div>
<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('from') ? ' has-error' : '' !!} ">
    {!! Form::label('from', 'from') !!}
    {!! Form::text('from', null, ['class' => 'form-control']) !!}

    @if ($errors->has('from'))
        <span class="help-block">
            <strong>{!! $errors->first('from') !!}</strong>
        </span>
    @endif
</div>
<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('to') ? ' has-error' : '' !!} ">
    {!! Form::label('to', 'to') !!}
    {!! Form::text('to', null, ['class' => 'form-control']) !!}

    @if ($errors->has('to'))
        <span class="help-block">
            <strong>{!! $errors->first('to') !!}</strong>
        </span>
    @endif
</div>
<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('tittle') ? ' has-error' : '' !!} ">
    {!! Form::label('tittle', 'tittle') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control']) !!}

    @if ($errors->has('tittle'))
        <span class="help-block">
            <strong>{!! $errors->first('tittle') !!}</strong>
        </span>
    @endif
</div>
<!-- Title Vietnamese Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('slug') ? ' has-error' : '' !!} ">
    {!! Form::label('slug', 'Slug') !!}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}

    @if ($errors->has('slug'))
        <span class="help-block">
            <strong>{!! $errors->first('slug') !!}</strong>
        </span>
    @endif
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>