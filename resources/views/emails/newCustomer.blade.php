@component('mail::message')
    A new user {{ $username }} is registered to the system 
    @component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
        Click Here!
    @endcomponent
@endcomponent