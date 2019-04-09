@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit obcaecati, ipsa, delectus aliquam laboriosam libero odio praesentium sed earum dolore ipsam. In pariatur aliquid, cum quam aut eum corporis iure?</p>
@endsection

@section('sidebar')
    @parent
    <h5>This is appended to sidebar</h5>
@endsection
