@extends('layouts.app')

@section('content')

<div class="container jumbotron mt-4">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100 pr-3">
        </div>
        <div class="col-4">

            <div class="d-flex align-content-center">
                <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle mr-1"
                        style="max-width: 30px"></a>
                <a href="/profile/{{ $post->user->id }}" class="text-dark" style="text-decoration: none"><h3>{{ $post->user->username }}</h3></a>
            </div>
            <p>{{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection
