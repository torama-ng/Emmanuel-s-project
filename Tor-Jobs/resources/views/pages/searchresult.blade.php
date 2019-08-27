@extends('layouts.app')
@section('content')
<div class="container search-style">
<form class="form-inline my-2 my-lg-0" method="get" action="/search">
    <input class="form-control form-control-lg mr-sm-4 " name="search" type="search" placeholder="Search" aria-label="Search">
    <input class="form-control form-control-lg mr-sm-4" name="location" type="search" placeholder="location" aria-label="Search">
    <button class="btn btn-dark my-2 my-sm-0" type="submit" style=" border-radius: 10px;">Find Jobs</button>
</form>
</div>
@if (count($jobs) > 0)
@foreach ($jobs as $job)


<div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">{{$job->jobtitle}}</a>
            {{-- <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a> --}}
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">{{$job}}</div>
            {{-- <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div> --}}
          </div>
        </div>
      </div>
@endforeach

@else

<h2 style="display:flex; justify-content: center;
justify-items: center; font-size:80px; color:rgba(100, 90, 100, 0.5); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
    no such job
</h2>

@endif




@endsection
