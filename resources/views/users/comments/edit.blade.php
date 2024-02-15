@extends('layouts.app')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2>Editar Usuário"> {{ $user->name }}</h1>

@include('includes.validations')
<form action="{{ route('comment.update', $comment->id) }}" method="POST">

    @method('PUT')
    @include('users.comments._partials.form')

@endsection