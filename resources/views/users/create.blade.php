@extends('layouts.app')
@section('content')
<h1>Novo Usuário</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome:">
    <input type="email" name="email" placeholder="Email:">
    <input type="password" name="password" placeholder="Password:">
    <button type="submit">Enviar</button>
</form>
@endsection