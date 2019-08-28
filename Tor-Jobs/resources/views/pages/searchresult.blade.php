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
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">{{$job}}</div>
          </div>
        </div>
      </div>
@endforeach

@else

<h2 class="error-messages">
    no such job
</h2>

@endif




@endsection
