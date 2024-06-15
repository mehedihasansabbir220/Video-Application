@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Upload Video</h1>
    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="video">Video File</label>
            <input type="file" name="video" class="form-control-file" id="video" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
