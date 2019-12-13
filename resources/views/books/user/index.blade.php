@include('inc.usernavbar')
@extends('layouts.auth')
@section('content')

<div class="margina">
    <div class="row">
         <div class="col-sm-12">
            <div class="full-right">
                <h2>Books</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered text-sm-center">
        <tr>
            <th>Book serial number</th>
            <th>Title</th>
            <th>Published</th>
            <th>Category</th>
            <th>Status</th>
            <th>Show book data</th>
        </tr>
        @if(count($books)>0 )
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->published }}</td>
                <td>{{ $book->category->name }}</td>
                <td>
                    @if(!empty($book->book))
                        @if($book-> book -> returned == true)
                            {{'Available'}}
                        @else
                            {{'Not available'}}
                    @endif
                        @else
                        {{ 'Available' }}
                        @endif
                </td>
                <td>
                    <a class="view-button" href="{{route('member-show-book',$book->id)}}">View
                        <i class="glyphicon glyphicon-th-large"></i></a>
                </td>
            </tr>
        @endforeach
        @else
            <p>No Available Books found</p>
        @endif
    </table>
    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{ $books -> links() }}
        </div>
    </div>
</div>
@endsection
