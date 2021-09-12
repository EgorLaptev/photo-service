@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/login.css') }}">
@endsection

@section('content')

    <section class="login">

        <form action="{{ route('login')  }}" method="POST" class="login__form">

            @csrf

            <input type="text" name="login" placeholder="Login" required>
            <input type="password" name="password" placeholder="Password" required>

            <input type="submit" value="Log in">

        </form>

        @if(count($errors->all()) > 0)
            <div class="error"> {{ $errors->all()[0] }} </div>
        @endif

    </section>

@endsection
