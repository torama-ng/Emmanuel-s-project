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
                    {{Form::textarea('description','',array('class'  => 'form-control', 'placeholder' => 'Body text'))}}
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

	<div class="noo-page-heading">
        <div class="container-boxed max text-center parallax-content">
            <div class="member-heading-avatar">
                <img alt='' src='images/avatar/user_100x100.jpg' height='100' width='100' />
            </div>
            <div class="page-heading-info">
                <h1 class="page-title">Post a Job</h1>
            </div>
            <div class="page-sub-heading-info">
                Describe your company and vacancy
            </div>
        </div><!-- /.container-boxed -->
        <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
    </div>
    <div class="container-wrap">	
        <div class="main-content container-fullwidth">
            <div class="row">
                <div class="noo-main col-md-12">
                    <div class="jform">
                        <div class="jform-header">
                            <div class="container-boxed max">
                                <div class="jform-steps">
                                    <ul class="jsteps jsteps-4">
                                        <li class=" completed">
                                            <span class="jstep-num">
                                                <a href="javascript:void(0);"><i class="fa fa-check"></i></a>
                                            </span>
                                            <div class="jstep-line">
                                                <span class="jstep-dot"></span>
                                            </div>
                                            <div class="jstep-label">Login or create an account</div>
                                        </li>
                                        <li class="completed">
                                            <span class="jstep-num">
                                                <a href="#"><i class="fa fa-check"></i></a>
                                            </span>
                                            <div class="jstep-line">
                                                <span class="jstep-dot"></span>
                                            </div>
                                            <div class="jstep-label">Choose a package</div>
                                        </li>
                                        <li class="active">
                                            <span class="jstep-num">
                                                <a href="javascript:void(0);">3</a>
                                            </span>
                                            <div class="jstep-line">
                                                <span class="jstep-dot"></span>
                                            </div>
                                            <div class="jstep-label">Describe your company and vacancy</div>
                                        </li>
                                        <li>
                                            <span class="jstep-num">
                                                <a href="javascript:void(0);">4</a>
                                            </span>
                                            <div class="jstep-line">
                                                <span class="jstep-dot"></span>
                                            </div>
                                            <div class="jstep-label">Preview and submit your job</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="jform-body">
                            <div class="container-boxed max">
                                       
                                <form class="form-horizontal"  method="POST" action="{{action('JobFormController@store')}}" enctype="multipart/form-data" name="data">
                                    <input name="_method" type="hidden" value="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div id="step_content_form" class="jstep-content">
                                        <div class="jpanel jpanel-job-form">
                                            <div class="jpanel-title">
                                                <h3>Describe your company and vacancy</h3>
                                            </div>
                                            <div class="jpanel-body">
                                                <div class="form-title">
                                                    <h3>Job Details</h3>
                                                </div>
                                                <div class="job-form">
                                                    <div class="job-form-detail">
                                                        <div class="form-group row">
                                                            <label for="position" class="col-sm-3 control-label">Job Title</label>
                                                            <div class="col-sm-9">
                                                            <input type="text" value="{{old('jobtitle')}}" class="form-control" id="position"  name="position" autofocus required placeholder="Enter a short title for your job">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="desc" class="col-sm-3 control-label">Job Description</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" id="desc" value="{{old('job_description')}}"  name="desc" rows="8" placeholder="Describe your job in a few paragraphs"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label">Cover Image</label>
                                                            <div class="col-sm-9">
                                                                <input type="file" name="application_attachment" value="{{old('cover_image')}}" accept=".jpg,.png,.gif">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="location" class="col-sm-3 control-label">Job Location</label>
                                                            <div class="col-sm-9">
                                                                <select id="location" name="location[]" value="{{old('location')}}" multiple data-placeholder="Enter a city and country or leave it blank" class="form-control form-control-chosen">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="">Amsterdam</option>
                                                                    <option value="">Atlanta</option>
                                                                    <option value="">Berlin</option>
                                                                    <option value="">Brisbane</option>
                                                                    <option value="">California</option>
                                                                    <option value="">Ha Noi</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="type" class="col-sm-3 control-label">Job Type</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control form-control-chosen" value="{{old('job_type')}}" name="type" id="type" data-placeholder="Select job type for your job">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="">Contract</option>
                                                                    <option value="">Freelance</option>
                                                                    <option value="">Full Time</option>
                                                                    <option value="">Part Time</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="category" class="col-sm-3 control-label">Job Category</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control form-control-chosen" value="{{old('job_category')}}" name="category[]" id="category" multiple data-placeholder="Select a category for your job ">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="">Customer Service</option>
                                                                    <option value="">Designer</option>
                                                                    <option value="">Developer</option>
                                                                    <option value="">Finance</option>
                                                                    <option value="">Human Resource</option>
                                                                    <option value="">Information Technology</option>
                                                                    <option value="">Marketing</option>
                                                                    <option value="">Others</option>
                                                                    <option value="">Sales</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="closing" class="col-sm-3 control-label">Closing Date</label>
                                                            <div class="col-sm-9">
                                                            <input type="text" value="{{old('closing_date')}}" class="form-control jform-datepicker" id="closing"  name="closing" placeholder="YYYY-MM-DD">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="application_email" class="col-sm-3 control-label">Application Notify Email</label>
                                                            <div class="col-sm-9">
                                                            <input type="text" value="{{old('application_notify_me')}}" class="form-control" id="application_email"  name="application_email" >
                                                                <em>Email to receive application notification. Leave it blank to use your account email.</em>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="salary" class="col-sm-3 control-label">Salary Offer</label>
                                                            <div class="col-sm-9">
                                                                <select id="salary" value="{{old('salary_offer')}}" class="form-control form-control-chosen" name="salary" data-placeholder="Select Salary Offer" >
                                                                    <option value=''>0 ~ $3000</option>
                                                                    <option value=''>$3000 ~ $10.000</option>
                                                                    <option value=''>$10.000 ~ $20.000</option>
                                                                    <option value=''>$20.000 ~ $50.000</option>
                                                                    <option value=''>$50.000 ~ $100.000</option>
                                                                    <option value=''>$100.000 ~</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label">Experience Level</label>
                                                            <div class="col-sm-9">
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <form value="{{old('experience_level')}}">
                                                                    <input type='radio'  name='experience_level' value='Junior' checked="checked">
                                                                        <i></i>Junior
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='experience_level' value='Senior'>
                                                                        <i></i>Senior
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='experience_level' value='Manager'>
                                                                        <i></i>Manager
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label">Total Years Experience</label>
                                                            <div class="col-sm-9">
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='year_experience' value='0-5' checked="checked">
                                                                        <i></i>0-5
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='year_experience' value='5-10'>
                                                                        <i></i>5-10
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='year_experience' value='10-20'>
                                                                        <i></i>10-20
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='year_experience' value='20+'>
                                                                        <i></i>20+
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label">Academic Degree</label>
                                                            <div class="col-sm-9">
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='academic_degree' value='associate' checked="checked">
                                                                        <i></i>Associate Degree
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='academic_degree' value='bachelor'>
                                                                        <i></i>Bachelor's Degree
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='academic_degree' value='master'>
                                                                        <i></i>Master’s Degree
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='academic_degree' value='doctoral'>
                                                                        <i></i>Doctoral Degree
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label">Dress Code</label>
                                                            <div class="col-sm-9">
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='dress_code' value='Indifferent' checked="checked">
                                                                        <i></i>Indifferent
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='dress_code' value='Casual'>
                                                                        <i></i>Casual
                                                                    </label>
                                                                </div>
                                                                <div class='form-control-flat'>
                                                                    <label class='radio'>
                                                                        <input type='radio' name='dress_code' value='Formal'>
                                                                        <i></i>Formal
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="working_hours" class="col-sm-3 control-label">Working Hours</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" id="working_hours" name="working_hours" placeholder="" rows="8" ></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-form-company">
                                                        <h4>Company Profile</h4>
                                                        <div class="company-profile-form">
                                                            <div class="form-group row">
                                                                <label for="company_name" class="col-sm-3 control-label">Company Name</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="company_name" value="" name="company_name" placeholder="Enter your company name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="company_website" class="col-sm-3 control-label">Company Website</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="company_website" value="" name="company_website" placeholder="Enter your company website">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="company_desc" class="col-sm-3 control-label">Company Description</label>
                                                                <div class="col-sm-9">
                                                                    <textarea class="form-control" id="company_desc" name="company_desc" rows="8" placeholder="Enter your company description"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 control-label">Company Logo</label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" name="application_attachment" accept=".jpg,.png,.gif">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 control-label">Cover Image</label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" name="application_attachment" accept=".jpg,.png,.gif">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="company_googleplus" class="col-sm-3 control-label">Google+</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="company_googleplus" value="" name="company_googleplus" placeholder="http://">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="company_facebook" class="col-sm-3 control-label">Facebook</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="company_facebook" value="" name="company_facebook" placeholder="http://">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="company_linkedin" class="col-sm-3 control-label">LinkedIn</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="company_linkedin" value="" name="company_linkedin" placeholder="http://">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="company_twitter" class="col-sm-3 control-label">Twitter</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="company_twitter" value=""  name="company_twitter" placeholder="http://">
                                                                </div>
                                                            </div>
                                                            <div class="form-group  row">
                                                                <label for="company_instagram" class="col-sm-3 control-label">Instagram</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="company_instagram" value="" name="company_instagram" placeholder="http://">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions form-group text-center clearfix">
                                            <a class="btn btn-primary" href="#">Back</a>
                                              <button type="button" class="btn btn-primary">Continue</button>
                                              {{csrf_field()}}
                                         </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.main -->
            </div><!--/.row-->
        </div><!--/.container-full-->
    </div><!--/.container-wrap-->
  
@endsection