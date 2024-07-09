@extends('admin.layouts.admin_master')
@section('title')
    Seminars
@endsection
@section('admin')
    <div class="container">
        <h1>Seminars</h1>
        @foreach ($seminars as $seminar)
            <div class="card mb-4">
                <div class="card-body">
                    @if ($seminar->isSubscribed)
                        <video width="320" height="240" controls>
                           <source src="{{ asset($seminar->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h2>{{ $seminar->title }}</h2>
                        <p>{{ $seminar->description }}</p>
                    @else
                        <p>You need to subscribe to access this seminar.</p>
                        <a href="{{ route('seminars.subscribe', $seminar->id) }}" class="btn btn-primary">Subscribe</a>
                        <h2>{{ $seminar->title }}</h2>
                        <p>{{ $seminar->description }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
