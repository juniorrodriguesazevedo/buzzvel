@extends('layouts.app')

@section('content')
    <h4>Hello, my name is {{ $qrCode->name }}</h4>

    <h3>My History</h3>

    <p>Lorem ipsum dolor it amet, consectetur</p>

    <div>
        <a class="btn btn-primary" href="{{ $qrCode->github }}" target="_blank" rel="noopener noreferrer">GitHub</a>
        <a class="btn btn-primary" href="{{ $qrCode->linkedin }}" target="_blank" rel="noopener noreferrer">Linkedin</a>
    </div>
@endsection