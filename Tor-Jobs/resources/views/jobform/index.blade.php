@extends('layouts.app')
@section('content')
<h1>Job Listing</h1>
@if (count($jobs) > 0)
@foreach ($jobs as $job)

<div class="container">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
              <div class="col-md-4">
                
                  <img src="/storage/cover_images/{{$job->users_image}}" alt="" style="height:30%;width:100%;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title"><a href="/posts/{{$job->id}}">{{$job->jcompanyname}}</a></h2>
                <p class="card-text">{{$job->jobtitle}}</p>
                  <p class="card-text"><small class="text-muted">{{$job->created_at}}</small></p>
                <button type="button" class="btn btn-dark"><a href="/jobform/{{$job->id}}">view</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
@endforeach
<div class="container use" > {{$jobs->links()}}</div>

@else
<h2>posts not found</h2>
    
@endif
@endsection