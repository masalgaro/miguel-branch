@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('admin.invoice.save') }}">

    @csrf

    <div>
        <label>Date</label>
        <input 
            type="date" 
            name="date" 
            value="{{ old('date') }}"
        />
    </div>

    <div>
        <label>User</label>
        <select name="user_id">
            @foreach($viewData['users'] as $user)
                <option 
                    value="{{ $user->getId() }}"
                    @if(old('user_id') == $user->getId()) selected @endif
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
                    @if(old('office_id') == $office->getId()) selected @endif
                >
                    {{ $office->getName() }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">
        Send
    </button>

</form>

@endsection