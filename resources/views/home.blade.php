@include('inc.usernavbar')
@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <table class="table table-bordered text-sm-center">
                        <tr>
                            <th>Due Date</th>
                            <th>Title</th>
                            <th>Status</th>
                        </tr>
                        @if(count($borrowedBooks)>0)
                            @foreach ($borrowedBooks as $borrowedBook)
                                @if($user -> id == $borrowedBook -> userId)
                                <tr>
                                    <td>{{ $borrowedBook-> dueDate }}</td>
                                    <td>{{ $borrowedBook-> book -> title }}</td>
                                    <td>
                                        @if( !empty($borrowedBook))
                                            @if($borrowedBook -> returned)
                                                {{'Returned'}}
                                            @else
                                                {{'Not returned'}}
                                            @endif
                                        @else
                                            {{ 'Available' }}
                                        @endif
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        @else
                            <p>You have no borrowed books!</p>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
