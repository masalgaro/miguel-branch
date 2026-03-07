@extends('layouts.app')
@section('content')
    @foreach ($viewData["phones"] as $phone)
    <h1>{{$phone->getName()}}</h1>
    <p>{{$phone->getMemory()}}</p>
    <p>{{$phone->getBrand()}}</p>
    @endforeach
@endsection