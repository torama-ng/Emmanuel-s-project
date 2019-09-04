
@extends('layouts.app')

@section('content')


<div class="container">
    <a href="/jobform" class="btn btn-dark"><i class="fas fa-long-arrow-alt-left"></i> go back</a>
    
        <h1 class="title">{{$job->companyname}}</h1>
        {{-- <img src="/storage/cover_images/{{$job->cover_image}}" style="height:400px; width:100%;"><hr style="width: 1100px;"> --}}
       <div>
        <h4>"{!!$job->jobdescription!!}"</h4>
       </div>
       <hr>
    <small>Written on {{$job->created_at}}</small>
    <hr>
    <a href="/jobform/{{$job->id}}/edit" class="btn btn-dark">Edit</a>
    
    {!!Form::open(['action'=>['JobFormController@destroy',$job->id], 'method'=>'POST', 'class'=>'pull-right', 'style' => 'float:right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete',['class' => 'btn btn-danger pull-right'])}}
    {!!Form::close()!!}
    </div>

@endsection