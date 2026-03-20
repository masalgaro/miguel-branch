@extends('layouts.app')
@section('content')
<h1>{{$viewData['office']->getName()}}</h1>
<h3>{{$viewData['office']->getAddress()}}</h3>
<p>{{$viewData['office']->getManagerName()}}</p>
<form action="{{ route('office.destroy', $viewData['office']->getId()) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete this office</button>
</form>
<a href="{{ route('office.edit', $viewData['office']->getId()) }}">
    Edit this office
</a>

@endsection