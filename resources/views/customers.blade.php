@extends('layouts.app')

@section('content')

<h1>Customer Accounts</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('customers.create') }}">Create Customer</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
    @forelse($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->full_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <a href="{{ route('customers.edit', $customer) }}">Edit</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No customers found.</td>
        </tr>
    @endforelse
    </tbody>
</table>

@endsection