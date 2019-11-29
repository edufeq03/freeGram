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
                <a href="#">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3"><strong>15</strong> posts</div>
                <div class="pr-3"><strong>55</strong> followers</div>
                <div class="pr-3"><strong>1245</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fsdu3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/72604356_167355661009088_2659325039706472991_n.jpg?_nc_ht=instagram.fsdu3-1.fna.fbcdn.net&_nc_cat=108&oh=6f9130c439be3a80184a23053410f222&oe=5E70E2E5" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fsdu3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/72604356_167355661009088_2659325039706472991_n.jpg?_nc_ht=instagram.fsdu3-1.fna.fbcdn.net&_nc_cat=108&oh=6f9130c439be3a80184a23053410f222&oe=5E70E2E5" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fsdu3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/72604356_167355661009088_2659325039706472991_n.jpg?_nc_ht=instagram.fsdu3-1.fna.fbcdn.net&_nc_cat=108&oh=6f9130c439be3a80184a23053410f222&oe=5E70E2E5" class="w-100">
        </div>
    </div>
</div>
@endsection
