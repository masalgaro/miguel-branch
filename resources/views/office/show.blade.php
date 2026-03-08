@extends('layouts.app')
@section('content')
<h1>{{$viewData["office"]->getName()}}</h1>
<h3>{{$viewData["office"]->getAddress()}}</h3>
<p>{{$viewData["office"]->getManagerName()}}</p>
@endsection