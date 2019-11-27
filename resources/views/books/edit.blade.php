@include('inc.navbar')
@extends('layouts.auth')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($book,['route'=>['books.update',$book->id],'method'=>'PATCH']) }}
      @include('books.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection
