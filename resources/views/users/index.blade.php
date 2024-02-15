@extends('layouts.app')

@section('content')
<h1>
    Listagem
    <a href="{{ route('users.create') }}">+</a>
</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }}
            {{ $user->email }}
            <a href="{{ route('user.show', $user->id) }}">Ver Detalhes</a>
        </li>
    @endforeach
</ul>
@endsection