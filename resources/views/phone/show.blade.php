@extends('layouts.app')
@section('content')
    <img src="{{ asset('storage/'.$viewData['phone']->getImage()) }}" width="200">
    <h1>{{$viewData["phone"]->getName()}}</h1>
    <h2>{{$viewData["phone"]->getMemory()}}</h2>
    <h3>{{$viewData["phone"]->getBrand()}}</h3>
    <p>{{$viewData["phone"]->getBattery()}}</p>
    <p>{{$viewData["phone"]->getRam()}}</p>
    <p>{{$viewData["phone"]->getQuantity()}} unidades</p>
    <form action="{{ route('phone.destroy', $viewData['phone']->getId()) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete this Phone</button>
    </form>
    <a href="{{ route('phone.edit', $viewData['phone']->getId()) }}">
        Edit this phone
    </a>

@endsection