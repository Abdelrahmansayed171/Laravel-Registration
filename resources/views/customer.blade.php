@extends('layouts.master')
@section('content')
<h1>Welcome, {{$customer['full_name']}}! </h1>
<div>
    {{ __('customer.email') }}: {{$customer['email']}}
</div>
<div>
    {{ __('customer.username') }}: {{$customer['username']}}
</div>
<div>
    {{ __('customer.phone') }}: {{$customer['phone']}}
</div>
<div>
    {{ __('customer.address') }}: {{$customer['address']}}
</div>
<div>
    {{ __('customer.dob') }}: {{$customer['birthdate']}}
</div>
@endsection