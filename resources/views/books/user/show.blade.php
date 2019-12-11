@include('inc.usernavbar')
@extends('layouts.auth')
@section('content')

    <div class="margina">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Book</h2>
        </div>
        <div class="margin-bottom">
            <div class="pull-right">
                <br/>
                 <a class="delete-button" href="{{ route('member-books') }}"> Back <i class="glyphicon glyphicon-arrow-left"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Book Serial number : </strong>
            {{ $book->id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title : </strong>
            {{ $book->title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Published </strong>
            {{ $book->published}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category</strong>
            {{ $book->category->name}}
        </div>
    </div>
</div>
    </div>
@endsection
