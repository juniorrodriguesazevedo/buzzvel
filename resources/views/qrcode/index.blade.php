@extends('layouts.app')

@section('content')
    <h1 class="mb-3">QR Code Image Generator</h1>

    <form action="{{ route('qrcode.store') }}" method="post">
        @csrf
        <div class="input-group input-group-lg mb-3">
            <span class="input-group-text">Name</span>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="input-group input-group-lg mb-3">
            <span class="input-group-text">Linkedin</span>
            <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">
        </div>
        @error('linkedin')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="input-group input-group-lg mb-3">
            <span class="input-group-text">GitHub</span>
            <input type="text" class="form-control" name="github" value="{{ old('github') }}">
        </div>
        @error('github')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Generate Image</button>
        </div>
    </form>
@endsection
