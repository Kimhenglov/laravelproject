@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="text-success">Payment Successful</h1>
    <p>Thank you for your payment! Your transaction has been completed successfully.</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Return to Home</a>
</div>
@endsection
