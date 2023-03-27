@extends('layouts.app')

@section('content')
    <h3 class="mb-5">{{ $qrCode->name }}</h3>

    <h2 class="mb-3">Scan Me</h2>

    <div>
        {!! QrCode::size(250)->generate($qrCode->url) !!}
    </div>
@endsection