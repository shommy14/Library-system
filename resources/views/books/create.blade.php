@include('inc.navbar')
@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>Book</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    {{ Form::open(['route'=>'books.store', 'method'=>'POST']) }}
                    @include('books.form_master')
                    {{ form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
