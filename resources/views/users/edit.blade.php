@extends('layouts.app')

@section('content')

<h1>Edit User</h1>

@if ($errors->any())
    <div>
        <strong>Please correct the following errors:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form
    action="{{ route('users.update', $user) }}"
    method="POST"
    enctype="multipart/form-data"
>
    @csrf
    @method('PUT')

    <div>
        <label for="username">Username</label>
        <input
            type="text"
            id="username"
            name="username"
            value="{{ old('username', $user->username) }}"
            required
        >
    </div>

    <div>
        <label for="full_name">Full Name</label>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="{{ old('full_name', $user->full_name) }}"
            required
        >
    </div>

    <div>
        <label>Current Avatar</label>
        <br>

        <img
            src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/avatar-placeholder.svg') }}"
            alt="User avatar"
            width="100"
            height="100"
        >
    </div>

    <div>
        <label for="avatar">Profile Picture</label>
        <input
            type="file"
            id="avatar"
            name="avatar"
            accept="image/*"
        >
        <small>Maximum file size: 2 MB.</small>
    </div>

    <button type="submit">Update User</button>
    <a href="{{ route('users.index') }}">Cancel</a>
</form>

@endsection