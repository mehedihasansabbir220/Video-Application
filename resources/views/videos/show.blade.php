@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $video->title }}</h1>
    <video width="100%" controls>
        <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <p>{{ $video->description }}</p>
    <a href="{{ asset('storage/' . $video->video_path) }}" download class="btn btn-success">Download</a>
    <a href="{{ route('videos.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
