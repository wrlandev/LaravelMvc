@extends('layouts.app')

@section('content')
<h1>
    Listagem
    <a href="{{ route('users.create') }}">+</a>
</h1>

<form action="{{ route('users.index') }}" method="get">
    <input type="search" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }}
            {{ $user->email }}
            <a href="{{ route('user.show', $user->id) }}">Ver Detalhes</a>
            <a href="{{ route('users.edit', $user->id) }}">Editar</a>
        </li>
    @endforeach
</ul>
@endsection