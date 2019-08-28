@extends('layouts.app')

@section('content')
    <h1 class="create-title">Job-Form</h3>
        <div class="container">
            {{ Form::open(array('action'=> 'JobFormController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data')) }}
                <div class="form-group">
                    {{Form::label('title','JobTitle')}}
                    {{Form::text('jobtitle','',array('class'=>'form-control','placeholder'=>'Title'))}}
                </div>
                <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::text('companyname','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
                </div>
                <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::text('location','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
                </div>
                <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::text('schedule','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
                </div>
                <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::text('requirements','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
                </div>
                <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::text('description','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
                </div>
                <div class="form-group">
                    {{-- {{Form::label('image upload','image')}} --}}
                    {{ Form::file('cover_image')}}
                    
                </div>
                {{Form::Submit('Submit', array('class' =>'btn btn-dark'))}}
             {{ Form::close() }}
    </div>
    {{-- <div class="">
    <form method="POST" action="{{action('JobFormController@store')}}" enctype="multipart/form-data" name="data">
        <input name="_method" type="hidden" value="POST">
    
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
            <div class="form-group">
              <label for="jobtitle">Job Title</label>
            <input type="text" class="form-control" id="jobtitle" name="jobtitle" value="{{ old('jobtitle') }}" placeholder="Job Title">
            </div>
            <div class=" ">
                <label for="companyname">Company Name</label>
                <input type="text" class="form-control" id="companyname" name="companyname" value="{{ old('companyname') }}" placeholder="Company Name">
            </div>
          
          
             <div class="form-group">
                 <label for="location">Location</label>
                 <select id="location" name="location" class="custom-select" value="{{ old('location') }}">
                    <option selected>....</option>
                    <option>Rivers</option>
                    <option>Lagos</option>
                    <option>Calabar</option>
                    <option>Benin</option>
                    <option>Bayelsa</option>
              </select>
              </div>
          <div class="form-group">
            <label for="schedule">Schedule</label>
            <select id="schedule" name="schedule" value="{{ old('schedule') }}" class="custom-select">
                  <option selected>Full-Time</option>
                  <option>Part-Time</option>
            </select>
          </div>
          <div class="">
            <label for="requirements">requirements</label>
            <input type="text" class="form-control" name="requirements" id="requirements" value="{{ old('requirements') }}" placeholder="Requirements">
          </div> 
          <div class="form-group">
                  <label for="description">Job Descriptions</label>
                  <textarea class="form-control" name="description" value="{{ old('description') }}" placeholder="Enter Job Descriptions" id="description">
                  </textarea>
          </div>
          <div class="form-group">
                <label for="company_image">Company Image</label>
          <input type="image" class="form-control-file" value="{{old('users_image')}}" id="exampleFormControlFile1">
              </div>
          <button type="submit" class="btn btn-primary">Submit</button> 
          {{csrf_field()}}
        </form>
    </div> --}}


@endsection