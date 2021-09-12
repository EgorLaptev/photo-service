@extends('templates.page')

@section('links')
        <link rel="stylesheet" href="{{ url('public/assets/css/register.css') }}">
@endsection

@section('content')

    <section class="register">

        <form action="{{ route('register')  }}" method="POST" class="register__form">

            @csrf

            <input type="text" name="login" placeholder="Login" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Repeat password" required>

            <input type="submit" value="Register">

        </form>

        @if(count($errors->all()) > 0)
            <div class="error"> {{ $errors->all()[0] }} </div>
        @endif

    </section>

@endsection
