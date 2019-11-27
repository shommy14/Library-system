@include('inc.navbar')
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

    <!-- The form -->
    <input type="text" id="myInput" onkeyup="myFunction()" name="search" placeholder="Search for book Serial number..">

    <table id="myTable" class="table table-bordered text-sm-center">
        <tr>
            <th>Book serial number</th>
            <th>Title</th>
            <th>Published</th>
            <th>Category</th>
            <th>Status</th>
            <th with="140px" class="text-center">
                <a href="{{route('books.create')}}" class="create-button">Create
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </th>
        </tr>
        @if(count($books)>0 )
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->published }}</td>
                <td>{{ $book->category }}</td>
                <td>
                    @if( !empty($book->book))
                        @if($book-> book -> returned)
                            {{'Available'}}
                        @else
                            {{ 'Not available' }}
                    @endif
                        @else
                        {{ 'Available' }}
                        @endif
                </td>
                <td>
                    <div class="margin-books">
                    <a class="view-button" href="{{route('books.show',$book->id)}}">View
                        <i class="glyphicon glyphicon-th-large"></i></a>
                    <a class="edit-button" href="{{route('books.edit',$book->id)}}">Edit
                        <i class="glyphicon glyphicon-pencil"></i></a>
                    {!! Form::open(['method' => 'DELETE','route' => ['books.destroy', $book->id],'style'=>'display:inline']) !!}
                    <button type="submit" style="display: inline;" class="delete-button">Delete<i class="glyphicon glyphicon-trash"></i></button>
                    {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
        @else
            <p>No Available Books found</p>
        @endif
    </table>
</div>
@endsection


