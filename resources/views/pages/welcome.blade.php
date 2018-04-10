@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Bienvenue sur mon application Laravel</h1>
        <p>Ceci est un ma première application sur le Framework Laravel</p>
        <a class="btn btn-primary btn-lg" href="/login" role=button>Login</a>
        <a class="btn btn-success btn-lg" href="/register" role=button>Register</a>
    </div>
@endsection