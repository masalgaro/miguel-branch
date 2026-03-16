@extends('layouts.app')
@section('content')

<div class="container">

    <h1>Purchase History</h1>

        <h4>
        User:
        {{ $viewData["user"]->getFirstName() }}
        {{ $viewData["user"]->getLastName() }}
        </h4>

        @if(empty($viewData["history"]))

        <div class="alert alert-info">
        No purchase history available.
        </div>

    @endif

</div>

@endsection