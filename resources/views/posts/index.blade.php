@extends('layouts.app')

@section('content')

    <div class="container-sm">
        @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-2">
                <img src="/storage/{{ $post->image }}" class="w-100 pr-3">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-6 offset-2 d-flex border-bottom">

                    <a href="/profile/{{ $post->user->id }}"><img src="{{ $post->user->profile->profileImage() }}"
                                                                  class="rounded-circle mr-1"
                                                                  style="max-width: 30px"></a>
                    <a href="/profile/{{ $post->user->id }}" class="text-dark"><h3>{{ $post->user->username }}</h3></a>
            </div>
        </div>
            <div class="row">
                <div class="col-6 offset-2">
                    {{ $post->caption }}
                </div>
            </div>

        @endforeach
    </div>
@endsection
