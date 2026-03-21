@extends('layouts.app')

@section('content')

<h1>Admin Panel</h1>

<div>
    <h3>Offices</h3>
    <a href="{{ route('admin.office.index') }}">View Offices</a>
    <a href="{{ route('admin.office.create') }}">Create Office</a>
</div>

<div>
    <h3>Users</h3>
    <a href="{{ route('admin.user.index') }}">View Users</a>
    <a href="{{ route('admin.user.create') }}">Create User</a>
</div>

<div>
    <h3>Invoices</h3>
    <a href="{{ route('admin.invoice.index') }}">View Invoices</a>
    <a href="{{ route('admin.invoice.create') }}">Create Invoice</a>
</div>


@endsection