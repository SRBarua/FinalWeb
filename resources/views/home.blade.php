@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h2> Welcome to Tweeter </h2>
        </div>
        <div class="card-body">
            <div> <img src="/img/checked-user.png" style="height:90px" ></div>
            <p class="card-text">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <h4> You are logged in! </h4>
            </p>
            <a href= "{{ '/profiles' }}" class="btn btn-primary">Start Following</a>
        </div>
    </div>
</div>
@endsection
