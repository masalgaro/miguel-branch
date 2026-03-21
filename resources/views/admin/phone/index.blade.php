@extends('layouts.app')
@section('content')
    @foreach ($viewData['phones'] as $phone)
    <img src="{{ asset('storage/'.$phone->getImage()) }}" width="200">
    <h1>{{$phone->getName()}}</h1>
    <h1>{{$phone->getPrice()}} $</h1>
    <p>{{$phone->getMemory()}}</p>
    <p>{{$phone->getBrand()}}</p>
    <a href="{{ route('admin.phone.show', ['id'=> $phone->getId()]) }}">Info</a>
    @endforeach
@endsection