@extends('layouts.app')
@section('content')
    <h1>{{$viewData["phone"]->getName()}}</h1>
    <h2>{{$viewData["phone"]->getMemory()}}</h2>
    <h3>{{$viewData["phone"]->getBrand()}}</h3>
    <p>{{$viewData["phone"]->getBattery()}}</p>
    <p>{{$viewData["phone"]->getRam()}}</p>
    <p>{{$viewData["phone"]->getQuantity()}} unidades</p>
@endsection