@extends('layouts.app')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Comentário</h1>

@include('includes.validations')

<form action="{{ route('comment.store', $user->id) }}" method="POST">
    @csrf
    @include('users.comments._partials.form')
</form>

@endsection