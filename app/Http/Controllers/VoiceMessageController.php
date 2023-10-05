<?php

use Illuminate\Http\Request;
use App\Models\VoiceMessage;
use Moathdev\MediaUploader\Models\Media;

class VoiceMessageController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form submission
        $request->validate([
            'audio' => 'required|file|mimes:mp3,ogg|max:2048',
        ]);

        // Create a new voice message
        $voiceMessage = new VoiceMessage;
        $voiceMessage->title = $request->title;
        $voiceMessage->body = $request->body;
        $voiceMessage->save();

        // Upload the audio file and associate it with the voice message
        $voiceMessage->addMedia($request->file('audio'))->toMediaCollection('audios');

        // Redirect the user to the voice message
        return redirect()->route('voice-messages.show', $voiceMessage);
    }

    public function show(VoiceMessage $voiceMessage)
    {
        // Get the URL of the audio file
        $audioUrl = $voiceMessage->getFirstMediaUrl('audios');

        // Display the voice message view with the audio file URL
        return view('voice-messages.show', compact('voiceMessage', 'audioUrl'));
    }


    public function upload(Request $request)
    {
        $user = $request->user();

        if ($request->hasFile('voice_message')) {
            $file = $request->file('voice_message');
            $media = $user->uploadMedia($file, 'voice_messages');
            return response()->json([
                'status' => 'success',
                'media' => $media,
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'No file provided',
        ]);
    }

    public function getMedia($id)
    {
        $media = Media::find($id);
        return response()->file($media->getPath());
    }
}

