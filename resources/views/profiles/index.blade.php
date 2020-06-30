@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 p-5">
                <img
                    src="/storage/{{ $user->profile->image }}"
                    class="rounded-circle w-100">
            </div>
            <div class="col-md-9 pt-5">
                <div class="d-flex align-items-baseline justify-content-between"><h1
                        class="pr-3">{{ $user->username }}</h1>
                    @can('update', $user->profile)
                        <button style="border: none; background-color: #ffffff" class="pl-3"><a href="/p/create">Add New
                                Post</a></button>
                    @endcan
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts()->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div>
                    @can('update', $user->profile)
                        <button style="border: none; background-color: #ffffff" class="pt-2"><a
                                href="/profile/{{ $user->id }}/edit">Edit Profile</a></button>
                    @endcan
                </div>
                <div class="mt-3"><strong>{{ $user->profile->title }}</strong> <br>
                    <p>{{ $user->profile->description }}</p></div>
                <div class="font-weight-bold"><a href="{{ $user->profile->url }}"
                                                 style="text-decoration: none; color: #2E2E2E">{{ $user->profile->url }}</a>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
