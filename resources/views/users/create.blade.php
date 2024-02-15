@extends('layouts.app')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Usuário</h1>

@include('includes.validations')

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    @include('users._partials.form')
</form>

@endsection