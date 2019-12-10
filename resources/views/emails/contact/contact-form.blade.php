@component('mail::message')
<html>
    #You have a new message from an Member! <br>

    <strong>Name</strong> {{ $data['name'] }} <br>
    <strong>E-mail</strong> {{ $data['email'] }} <br>
    <strong>Message:</strong> <br>
    {{ $data['message'] }}

</html>
@endcomponent
