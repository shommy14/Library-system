@include('inc.navbar')
@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="full-right">
                <h2>Borrow</h2>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        {{ Form::open(['route'=>'borrow.store', 'method'=>'POST']) }}
                        @include('borrow.form_master')
                        {{ form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
