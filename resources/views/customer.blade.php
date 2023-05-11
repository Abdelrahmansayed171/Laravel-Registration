@extends('layouts.master')
@section('content')
<h1>Welcome, {{$customer['full_name']}}! </h1>
<div>
    Email: {{$customer['email']}}
</div>
<div>
    username: {{$customer['username']}}
</div>
<div>
    phone Numer: {{$customer['phone']}}
</div>
<div>
    address: {{$customer['address']}}
</div>
<div>
    DOB: {{$customer['birthdate']}}
</div>
@endsection