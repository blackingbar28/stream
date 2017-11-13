@extends('backend.layouts.master')
@section('content')
    <div class='table-header'>
        <h1 class="pull-left">List leagues</h1>
        <div class="pull-right">
            <a class="btn btn-primary" href="{!! route('match.create') !!}">
                Add new
            </a>
        </div>
    </div>

    <div class="clearfix"></div>
    @include('flash::message')
    <div class="clearfix"></div>

    <div class="admin-content">
        <div class="box box-primary">
            <div class="box-body data-management">
                @include('backend.match.table')
            </div>
        </div>
    </div>
@endsection