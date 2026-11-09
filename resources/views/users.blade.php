@extends('layouts.app')

@section('content')

<h1>User Accounts</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('users.create') }}">Create User</a>

<table>
    <thead>
        <tr>
            <th>Avatar</th>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
    @forelse($users as $user)
        <tr>
            <td>
                <img
                    src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/avatar-placeholder.svg') }}"
                    alt="{{ $user->full_name }} avatar"
                    width="70"
                    height="70"
                >
            </td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->full_name }}</td>
            <td>
                <a href="{{ route('users.edit', $user) }}">
                    Edit
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No users found.</td>
        </tr>
    @endforelse
    </tbody>
</table>

@endsection