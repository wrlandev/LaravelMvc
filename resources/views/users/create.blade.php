@extends('layouts.app')
@section('content')
<h1>Novo Usuário</h1>

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome:">
    <input type="email" name="email" placeholder="Email:">
    <input type="password" name="password" placeholder="Password:">
    <button type="submit">Enviar</button>
</form>
@endsection