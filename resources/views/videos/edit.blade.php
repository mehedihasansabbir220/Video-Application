@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Video</h1>
    <form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $video->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description">{{ $video->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="video">Video</label>
            @if ($video->video_path)
                <video width="100%" controls>
                    <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remove_video" id="remove_video">
                    <label class="form-check-label" for="remove_video">
                        Remove current video
                    </label>
                </div>
            @endif
            <input type="file" name="video" class="form-control" id="video">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
