@extends('layouts.app')

@section('content')

    <div class="container-sm jumbotron">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100 pr-3">
            </div>
            <div class="col-4">

                <div class="d-flex align-content-center">
                    <a href="/profile/{{ $post->user->id }}"><img src="{{ $post->user->profile->profileImage() }}"
                                                                  class="rounded-circle mr-1"
                                                                  style="max-width: 30px"></a>
                    <a href="/profile/{{ $post->user->id }}" class="text-dark"><h3>{{ $post->user->username }}</h3></a>
                </div>
                <hr>
                <p>
                <span class="font-weight-bold border-right mr-1 p-1">
                    <a href="/profile/{{ $post->user->id }}" class="text-dark">
                        {{ $post->user->username }}
                    </a>
                </span>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
@endsection
