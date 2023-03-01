@extends('master')
@section('title', 'message received successfully')
@section('content')
<div>
    <p>Thank you {{ $name }} your message received successfully</p>
    <a class="btn btn-info" href='{{ route('home') }}'>Back to home</a>
</div>
@endsection