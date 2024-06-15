<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }
    public function allVideos()
    {
        $videos = Video::all();
        return view('welcome', compact('videos'));
    }
    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,avi,mkv|max:204800', // 200MB max size
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_path' => $videoPath,
        ]);

        return redirect()->route('videos.index');
    }

    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
{
    $request->validate([
        'title' => 'required',
        'video' => 'nullable|mimes:mp4,avi,mkv|max:204800', // 200MB max size
    ]);

    $videoPath = $video->video_path;

    if ($request->has('remove_video') && $request->remove_video == 'on') {
        // Delete the old video
        Storage::disk('public')->delete($videoPath);
        $videoPath = null;
    }

    if ($request->hasFile('video')) {
        if ($videoPath) {
            // Delete the old video if a new one is uploaded
            Storage::disk('public')->delete($videoPath);
        }
        // Store the new video
        $videoPath = $request->file('video')->store('videos', 'public');
    }

    $video->update([
        'title' => $request->title,
        'description' => $request->description,
        'video_path' => $videoPath,
    ]);

    return redirect()->route('videos.index');
}

    public function destroy(Video $video)
    {
        Storage::disk('public')->delete($video->video_path);
        $video->delete();
        return redirect()->route('videos.index');
    }
    // Search any video 
    public function search(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $videos = Video::where('title', 'like', '%' . $request->title . '%')->get();

        return view('welcome', compact('videos'));
    }

}


