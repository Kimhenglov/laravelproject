@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="text-danger">Payment Failed</h1>
    <p>Unfortunately, there was an issue with your payment. Please try again.</p>
    <a href="{{ url('/payment/try-again') }}" class="btn btn-warning">Retry Payment</a>
</div>
@endsection
