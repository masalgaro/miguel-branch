@extends('layouts.app')
@section('content')
    @foreach($viewData['offices'] as $office)
    <h1>{{$office->getName()}}</h1>
    <p>{{$office->getAddress()}}</p>
    <a href="{{ route('office.show', ['id'=> $office->getId()]) }}">Info</a>
    @endforeach
@endsection