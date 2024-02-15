@extends('layouts.app')
@section('content')
<h1>listagem do usuário {{ $user->name; }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>
@endsection