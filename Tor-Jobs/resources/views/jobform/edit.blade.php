@extends('layouts.app')

@section('content')
    <h1 class="header">EDIT POST</h3>
        <div class="container">
        {{ Form::open(array('action'=> ['JobFormController@update', $job->id], 'method' => 'POST')) }}
        <div class="form-group">
            {{Form::label('jobtitle','JobTitle')}}
            {{Form::text('Jobtitle','',array('class'=>'form-control','placeholder'=>'Title'))}}
        </div>
        <div class="form-group">
            {{Form::label('companyname','Company Name')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Company Name'))}}
        </div>
        <div class="form-group">
            {{Form::label('location','Location')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Location'))}}
        </div>
        <div class="form-group">
            {{Form::label('schedule','Schedule')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Schedule'))}}
        </div>
        <div class="form-group">
            {{Form::label('requirements','Experience')}}
            {{Form::text('body','',array('class'  => 'form-control', 'placeholder' => 'Requirements'))}}
        </div>
        <div class="form-group">
            {{Form::label('description','Job description')}}
            {{Form::textarea('body','',array('class'  => 'form-control', 'placeholder' => 'Job Description'))}}
        </div>
        <div class="form-group">
            {{Form::label('image upload','Company_image')}}
            {{ Form::file('cover_image')}}
            
        </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::Submit('Submit', array('class' =>'btn btn-dark'))}}
         {{ Form::close() }}
        </div>
@endsection