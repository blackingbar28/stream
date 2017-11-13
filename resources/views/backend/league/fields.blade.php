<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('name') ? ' has-error' : '' !!} ">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{!! $errors->first('name') !!}</strong>
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
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('flag') ? ' has-error' : '' !!} ">
    {!! Form::label('flag', 'Flag') !!}
    {!! Form::file('flag', ['name' => 'flag']) !!}
    <br><img id="preview" src="#" alt="Preview image" width="100" height="100" style="display: none;" />
    <p id="image_view">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>