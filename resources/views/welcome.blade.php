<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container px-0">
    <h1>All Videos</h1>
    <div class="row mt-4">
        @foreach ($videos as $video)
            <div class="col-md-4">
                <div class="card mb-4">
                    <video width="100%" controls>
                        <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">{{ $video->title }}</h5>
                        <p class="card-text">{{ $video->description }}</p>
                        <a href="{{ route('videos.show', $video->id) }}" class="btn btn-primary">Watch Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
