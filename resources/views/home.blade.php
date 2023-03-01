@extends('master')
@section('title', 'Home')
@section('content')
<div>
    <h1>WELCOME PAGE</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, cum.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi vel praesentium velit ipsa, ab consequatur architecto accusantium sequi odio dolore ratione dolorem, totam voluptatem inventore maiores quidem odit nobis! Illum consequuntur sapiente quae, excepturi architecto amet odit tempora sed id, cumque asperiores magni magnam unde ipsa animi distinctio quo voluptatum.</p>
    <a class="btn btn-info" href='{{ route('contact.index') }}'>contact us</a>
</div>
@endsection