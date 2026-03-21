@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.savingsAccountList') }}</h1>

    <table class="table">
        <tr>
            <th>{{ __('messages.idLabel') }}</th>
            <th>{{ __('messages.userName') }}</th>
            <th>{{ __('messages.actionsLabel') }}</th>
        </tr>

        @foreach ($viewData['savingsAccounts'] as $savingsAccount)
            <tr>
                <td>{{ $savingsAccount->getId() }}</td>
                <td>{{ $savingsAccount->getUser()->getName() }}</td>
                <td>
                    <a href="{{ route('savingsAccount.show', ['id' => $savingsAccount->getId()]) }}" class="btn btn-info">
                        {{ __('messages.viewButton') }}
                    </a>
                    <form action="{{ route('savingsAccount.destroy', ['id' => $savingsAccount->getId()]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            {{ __('messages.deleteButton') }}
                        </button>
                    </form>
                    <a href="{{ route('savingsAccount.edit', ['id' => $savingsAccount->getId()]) }}" class="btn btn-warning">
                        {{ __('messages.editButton') }}
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection