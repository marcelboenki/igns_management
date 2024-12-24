@extends('layout.app')

@section('moduleNav')
    @include('module.tcg.partials.navigation')

    @foreach($cards as $card)
        {{ $card->getId() }}: {{ $card->getName() }}<br />
    @endforeach
@endsection
