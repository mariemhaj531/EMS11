@extends('app')

@section('content')
<div class="container">
    <h1>Bienvenue, {{ Auth::user()->name }}</h1>
    <p>Vous êtes connecté en tant qu'administrateur.</p>
</div>
@endsection
