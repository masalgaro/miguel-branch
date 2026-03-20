@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.savingsAccountList') }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <tr>
            <th>{{ __('messages.idLabel') }}</th>
            <th>{{ __('messages.savingsAccountNumber') }}</th>
            <th>{{ __('messages.actionsLabel') }}</th>
        </tr>

        @foreach ($viewData['savingsAccounts'] as $savingsAccount)
            <tr>
                <td>{{ $savingsAccount->getId() }}</td>
                <td>{{ $savingsAccount->getNumber() }}</td>
                <td>
                    <a href="{{ route('savingsAccounts.show', ['id' => $savingsAccount->getId()]) }}" class="btn btn-info">
                        {{ __('messages.viewButton') }}
                    </a>
                    <form action="{{ route('savingsAccounts.destroy', ['id' => $savingsAccount->getId()]) }}" method="POST" style="display:inline;">
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