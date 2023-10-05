<h1>{{ $voiceMessage->title }}</h1>
<p>{{ $voiceMessage->body }}</p>

<!-- Display the audio file -->
<audio controls>
    <source src="{{ $audioUrl }}" type="audio/mp3">
</audio>