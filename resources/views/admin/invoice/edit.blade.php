@extends('layouts.app')

@section('content')

<form action="{{ route('admin.invoice.update', $viewData['invoice']->getId()) }}" method="POST">

    @csrf
    @method('PUT')

    <div>
        <label>Date</label>
        <input 
            type="date" 
            name="date" 
            value="{{ old('date', $viewData['invoice']->getDate()) }}"
        >
    </div>

    <div>
        <label>User</label>
        <select name="user_id">
            @foreach($viewData['users'] as $user)
                <option 
                    value="{{ $user->getId() }}"
                    @if(old('user_id', $viewData['invoice']->user->getId()) == $user->getId()) selected @endif
                >
                    {{ $user->getName() }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Office</label>
        <select name="office_id">
            @foreach($viewData['offices'] as $office)
                <option 
                    value="{{ $office->getId() }}"
                    @if(old('office_id', $viewData['invoice']->office->getId()) == $office->getId()) selected @endif
                >
                    {{ $office->getName() }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">
        Update invoice
    </button>

</form>

@endsection