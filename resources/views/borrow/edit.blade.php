@include('inc.navbar')
@extends('layouts.auth')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($borrow,['route'=>['borrow.update',$borrow->issueId],'method'=>'PATCH']) }}
      @include('borrow.form_master_return')
      {{ Form::close() }}
    </div>
  </div>
@endsection
