@include('inc.navbar')
@extends('layouts.auth')
@section('content')

    <div class="margina">
        <div class="row">
            <div class="col-sm-12">
                <div class="full-right">
                    <h2>Borrowed Books</h2>
                </div>
            </div>
        </div>

        <table class="table table-bordered text-sm-center">
            <tr>
                <th>Member Name</th>
                <th>Book Name</th>
                <th>Issue Date</th>
                <th>Due Date</th>
                <th with="140px" class="text-center">
                    <a href="{{route('borrow.create')}}" class="create-button">Borrow
                        <i class="glyphicon glyphicon-plus"></i>
                    </a>
                </th>
            </tr>
            @if(count($borrowedBooks)>0 )
                @foreach ($borrowedBooks as $borrowedBook)
                    <tr>
                        <td>{{ $borrowedBook-> member -> name }}</td>
                        <td>{{ $borrowedBook -> book -> title }}</td>
                        <td>{{ $borrowedBook -> issueDate }}</td>
                        <td>{{ $borrowedBook -> dueDate }}</td>
                        <td>
                            @if($borrowedBook -> returned == 0)
                                <a class="edit-button" href="{{route('borrow.edit',$borrowedBook->issueId)}}">Return
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                @else
                                {{ 'Returned' }}
                            @endif
                        </td>
                @endforeach
                @else
                    <p>No Borrowed Books found</p>
            @endif
        </table>
    </div>
@endsection
