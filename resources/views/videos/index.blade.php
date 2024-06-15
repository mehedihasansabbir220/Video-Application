@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Videos</h1>
    <a href="{{ route('videos.create') }}" class="btn btn-primary">Upload Video</a>
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
                        <a href="{{ route('videos.show', $video->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
