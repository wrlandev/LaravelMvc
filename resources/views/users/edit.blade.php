@extends('layouts.app')
@section('content')

<h1>Editar Usuário {{ $user->name }}</h1>

@include('includes.validations')
<form action="{{ route('user.update', $user->id) }}" method="POST">

    @method('PUT')
    @include('users._partials.form')

@endsection