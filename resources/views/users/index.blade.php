<h1>Listagem</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }}
            {{ $user->email }}
            <a href="{{ route('user.show', $user->id) }}">Ver Detalhes</a>
        </li>
    @endforeach
</ul>