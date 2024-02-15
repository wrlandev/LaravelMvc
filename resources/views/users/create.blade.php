@extends('layouts.app')
@section('content')

<h1>Novo Usuário</h1>

@include('includes.validations')

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    @include('users._partials.form')
</form>

@endsection