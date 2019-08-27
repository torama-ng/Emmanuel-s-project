@extends('layouts.app')

@section('content')
    <h1>Edit post</h3>
        <div class="container">
        {{ Form::open(array('action'=> ['PostsController@update', $post->id], 'method' => 'POST')) }}
        <div class="form-group">
            {{Form::label('jobtitle','JobTitle')}}
            {{Form::text('Jobtitle','',array('class'=>'form-control','placeholder'=>'Title'))}}
        </div>
        <div class="form-group">
            {{Form::label('companyname','Company Name')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
        </div>
        <div class="form-group">
            {{Form::label('location','Location')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
        </div>
        <div class="form-group">
            {{Form::label('schedule','Schedule')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
        </div>
        <div class="form-group">
            {{Form::label('requirements','Experience')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
        </div>
        <div class="form-group">
            {{Form::label('description','Job description')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
        </div>
        <div class="form-group">
            {{Form::label('image upload','image')}}
            {{ Form::file('cover_image')}}
            
        </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::Submit('Submit', array('class' =>'btn btn-dark'))}}
         {{ Form::close() }}
        </div>
@endsection