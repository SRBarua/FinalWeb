<div class="card text-center mb-3">
    <div class="card-header">
        <img src="/img/default.png" height="90px">
        <p><a href=""><span>Tweets</span> | <a href="/profiles/{{ $profile->user->followers }}"><span>Followers</span> | <a href="/profiles/{{ $profile->user->following }}"></strong><span>Following</span></p></p>
    </div>
    <div class="card-body" text-align="center">
        <h5 class="card-title"><h1><a href="/profiles/{{ $profile->id }}"> {{ $profile->user->name }} </a><h1>
        <follow-button user-id="{{ $profile->user_id }}" follows="{{ $profile->user->follows }}" > Follow </folow-button>
    </div>
</div>
