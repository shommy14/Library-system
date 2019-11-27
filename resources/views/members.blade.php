@include('inc.navbar')
@extends('layouts.auth')
@section('content')
    <div class="margina">
        <div class="row">
            <div class="col-sm-12">
                <div class="full-right">
                    <h2>Members</h2>
                </div>
            </div>
        </div>

    <input type="text" id="myInput" onkeyup="myFunction()" name="search" placeholder="Search for member identification..">
        <table id="myTable" class="table table-bordered text-sm-center">
            <tr>
                <th>Member Identification</th>
                <th>Name</th>
                <th>email</th>
                <th with="140px" class="text-center"></th>
            </tr>
            @if(count($users)>0)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><div class="margin-tab">
                            {!! Form::open(['method' => 'DELETE','route' => ['members-destroy', $user->id],'style'=>'display:inline']) !!}
                            <button type="submit" style="display: inline;" class="delete-button">Delete<i class="glyphicon glyphicon-trash"></i></button>
                            {!! Form::close() !!}</div>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>No Members found</p>
            @endif
        </table>
    </div>
@endsection

