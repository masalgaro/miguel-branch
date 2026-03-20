@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.userList') }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <tr>
            <th>{{ __('messages.idLabel') }}</th>
            <th>{{ __('messages.nameLabel') }}</th>
            <th>{{ __('messages.actionsLabel') }}</th>
        </tr>

        @foreach ($viewData['users'] as $user)
            <tr>
                <td>{{ $user->getId() }}</td>
                <td>{{ $user->getFirstName() }} {{ $user->getLastName() }}</td>
                <td>
                    <a href="{{ route('users.show', ['id' => $user->getId()]) }}" class="btn btn-info">
                        {{ __('messages.viewButton') }}
                    </a>
                    <form action="{{ route('users.destroy', ['id' => $user->getId()]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            {{ __('messages.deleteButton') }}
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection