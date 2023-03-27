@extends('layouts.app')

@section('content')
    <h1 class="mb-3">QR Code Image Generator</h1>

    <form action="" method="post">
        <div class="input-group input-group-lg mb-3">
            <span class="input-group-text">Name</span>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="input-group input-group-lg mb-3">
            <span class="input-group-text">Linkedin</span>
            <input type="text" class="form-control" name="linkedin">
        </div>

        <div class="input-group input-group-lg mb-3">
            <span class="input-group-text">GitHub</span>
            <input type="text" class="form-control" name="github">
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button">Generate Image</button>
        </div>
    </form>
@endsection
