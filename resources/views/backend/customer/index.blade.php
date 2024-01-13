@extends('custom_layout.customer')
@section('main_content')



    <h1>Customer</h1>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"> Logout</button>
    </form>
@endsection