@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fsdu3-1.fna.fbcdn.net/vp/7cd56fd32d2bf32b173ed93e24fb8165/5E7B0F26/t51.2885-19/s150x150/37108442_1933492130040283_6018283671813881856_n.jpg?_nc_ht=instagram.fsdu3-1.fna.fbcdn.net" class="rounded-circle" alt="">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new Post</a>
                
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-3"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-3"><strong>55</strong> followers</div>
                <div class="pr-3"><strong>1245</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
