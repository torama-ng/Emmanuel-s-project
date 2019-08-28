
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="display">
    <header>{{$job->companyname}}</header>
        <ul>
        <li>{{$job->jobtitle}}</li>
        <li>{{$job->location}}</li>
        <li>{{$job->schedule}}</li>
        <li>{{$job->requirements}}</li>
        <li>{{$job->description}}</li>
        <li>{{$job->created_at}}</li>
        </ul>
    </div>
</div>

@endsection