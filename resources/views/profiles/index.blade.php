@extends('layouts.main')
@section('content')
            @foreach ($profiles as $profile)
                @include('profiles._profile')

            @endforeach
    </div>
@endsection
