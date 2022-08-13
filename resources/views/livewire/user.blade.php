<div>
    <h2>User Component</h2>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
            <button wire:click="delete({{ $user }})">Delete</button>
        @endforeach
    </ul>
</div>
