@include('inc.usernavbar')
@extends('layouts.auth')
@section('content')

<div class="margina">
    <h1>Contact Admin</h1>
    <form action={{ route('contact-store') }} method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" value="{{ old('email') }}" class="form-control">
            <div>{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="20" rows="10"
                      class="form-control" value="{{ old('message') }}"></textarea>
            <div>{{ $errors->first('message') }}</div>
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Send Message</button>

    </form>
</div>
@endsection
