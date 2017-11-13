@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Edit
        </h1>
    </section>
    <div class="content">

        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($match, ['route' => ['match.update', $match->id],'method' => 'put', 'files' => 'true', 'id' => 'form-article']) !!}
                    @include('backend.match.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection