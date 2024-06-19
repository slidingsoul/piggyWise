@extends('layouts.app')

@section('content')
<div class="result-container">
    @if ($result)
        <h2>Kamu boleh membelinya!</h2>
        <img src="{{ asset('images/thumbs-up.png') }}" alt="Thumbs Up">
    @else
        <h2>Kamu tidak perlu membelinya!</h2>
        <img src="{{ asset('images/stop.png') }}" alt="Stop">
    @endif
</div>
@endsection