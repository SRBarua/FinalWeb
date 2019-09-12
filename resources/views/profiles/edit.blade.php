@extends('layouts.main')
@section('content')
        <h2>Edit Profile</h2>
        @if(Auth::id() == $profile->user_id)
            <form action="/profiles/{{ $profile->id }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <form>
                  <div class="form-group row">
                      <label for="bio" class="col-md-2 col-form-label"> Bio </label>
                      <div class="col-md-10">
                          <textarea name="bio" placeholder="About yourself">{{ $profile->bio }}</textarea>
                      </div>
                 </div>
                 <div class="form-group row">
                     <label for="bio" class="col-md-2 col-form-label">Date of Birth </label>
                     <div class="col-md-10">
                         <textarea name="birthday" placeholder="yyyy-mm-dd">{{ $profile->birthday }}</textarea>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="ilocation" class="col-md-2 col-form-label"> Location </label>
                     <div class="col-md-10">
                         <textarea name="location" placeholder="City, State/Province">{{ $profile->location }}</textarea>
                     </div>
                 </div>

                <br />
                <button type="submit">Save</button>
            </form>
        @endif
@endsection
