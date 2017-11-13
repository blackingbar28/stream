@extends('backend.layouts.master')
@section('content')
    <section class="content-header">
        <h1>
            Add League
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => ['league.store'], 'method' => 'post', 'files' => true])  !!}
                    @include('backend.league.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('backend/js/preview-image.js') !!}
    {!! Html::script('backend/js/tinymce.js') !!}
@endsection