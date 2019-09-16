@extends('layouts.app')

@section('content')
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
                            </div>
                        </div>
                    </div>
                    <div class="jform-body">
                        <div class="container-boxed max">
                            <form class="form-horizontal" method="POST" action="{{action('JobFormController@store')}}" enctype="multipart/form-data" name="data">
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
                                                        <label for="jobtitle" class="col-sm-3 control-label">Job Title</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" value="" class="form-control" id="jobtitle"  name="jobtitle" autofocus required placeholder="Enter a short title for your job">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="job_description" class="col-sm-3 control-label">Job description</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" id="job_description"  name="job_description" rows="8" placeholder="Describe your job in a few paragraphs"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 control-label">Cover Image</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" name="cover_image" accept=".jpg,.png,.gif">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="location" class="col-sm-3 control-label">Job Location</label>
                                                        <div class="col-sm-9">
                                                            <select  name="location" class="form-control ">
                                                                <option value="">&nbsp;</option>
                                                                <option value="Bayelsa">Bayelsa</option>
                                                                <option value="Rivers">Rivers</option>
                                                                <option value="Delta">Delta</option>
                                                                <option value="Abuja">Abuja</option>
                                                                <option value="Lagos">Lagos</option>
                                                                <option value="Uyo">Uyo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jobtype" class="col-sm-3 control-label">Job type</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control " name="jobtype" >
                                                                <option value="">&nbsp;</option>
                                                                <option value="Contract">Contract</option>
                                                                <option value="Freelance">Freelance</option>
                                                                <option value="Full Time">Full Time</option>
                                                                <option value="Part Time">Part Time</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jobcategory" class="col-sm-3 control-label">Job Category</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control " name="jobcategory" >
                                                                <option value="">&nbsp;</option>
                                                                <option value="Customer Service">Customer Service</option>
                                                                <option value="Designer">Designer</option>
                                                                <option value="Developer">Developer</option>
                                                                <option value="Finance">Finance</option>
                                                                <option value="Human Resource">Human Resource</option>
                                                                <option value="Information Technology">Information Technology</option>
                                                                <option value="Marketing">Marketing</option>
                                                                <option value="Others">Others</option>
                                                                <option value="Sales">Sales</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="closing_date" class="col-sm-3 control-label">closing_date Date</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" value="" class="form-control" name="closing_date" placeholder="YYYY-MM-DD">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="application_notify_email" class="col-sm-3 control-label">Application Notify Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" value="" class="form-control"  name="application_notify_email" >
                                                            <em>Email to receive application notification. Leave it blank to use your account email.</em>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="salary_offer" class="col-sm-3 control-label">Salary Offer</label>
                                                        <div class="col-sm-9">
                                                            <select  class="form-control " name="salary_offer" >
                                                                <option value='0 ~ 3000'>0 ~ 3000</option>
                                                                <option value='3000 ~ 10.000'>3000 ~ 10.000</option>
                                                                <option value='10.000 ~ 20.000'>10.000 ~ 20.000</option>
                                                                <option value='20.000 ~ 50.000'>20.000 ~ 50.000</option>
                                                                <option value='50.000 ~ 100.000'>50.000 ~ 100.000</option>
                                                                <option value='100.000 ~'>100.000 ~</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 control-label">Experience Level</label>
                                                        <div class="col-sm-9">
                                                            <div class='form-control-flat'>
                                                                <label class='radio'>
                                                                    <input type='radio' name='experience_level' value='Junior' checked="checked">
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
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 control-label">Total Years Experience</label>
                                                        <div class="col-sm-9">
                                                            <div class='form-control-flat'>
                                                                <label class='radio'>
                                                                    <input type='radio' name='total_years' value='0-5' checked="checked">
                                                                    <i></i>0-5
                                                                </label>
                                                            </div>
                                                            <div class='form-control-flat'>
                                                                <label class='radio'>
                                                                    <input type='radio' name='total_years' value='5-10'>
                                                                    <i></i>5-10
                                                                </label>
                                                            </div>
                                                            <div class='form-control-flat'>
                                                                <label class='radio'>
                                                                    <input type='radio' name='total_years' value='10-20'>
                                                                    <i></i>10-20
                                                                </label>
                                                            </div>
                                                            <div class='form-control-flat'>
                                                                <label class='radio'>
                                                                    <input type='radio' name='total_years' value='20+'>
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
                                                            <textarea class="form-control" name="working_hours" placeholder="" rows="8" ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-form-company">
                                                    <h4>Company Profile</h4>
                                                    <div class="company-profile-form">
                                                        <div class="form-group row">
                                                            <label for="companyname" class="col-sm-3 control-label">Company Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"  name="companyname" placeholder="Enter your company name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_website" class="col-sm-3 control-label">Company Website</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="company_website" value="" name="company_website" placeholder="Enter your company website">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_description" class="col-sm-3 control-label">Company Description</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" id="company_description" name="company_description" rows="8" placeholder="Enter your company description"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label">Company Logo</label>
                                                            <div class="col-sm-9">
                                                                <input type="file" name="cover_image2" accept=".jpg,.png,.gif">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label">Cover Image</label>
                                                            <div class="col-sm-9">
                                                                <input type="file" name="company_logo" accept=".jpg,.png,.gif">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_googleplus" class="col-sm-3 control-label">Google+</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" value="" name="google" placeholder="http://">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_facebook" class="col-sm-3 control-label">Facebook</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" value="" name="facebook" placeholder="http://">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_linkedin" class="col-sm-3 control-label">LinkedIn</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" value="" name="linkedin" placeholder="http://">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_twitter" class="col-sm-3 control-label">Twitter</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" value=""  name="twitter" placeholder="http://">
                                                            </div>
                                                        </div>
                                                        <div class="form-group  row">
                                                            <label for="company_instagram" class="col-sm-3 control-label">Instagram</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" value="" name="instagram" placeholder="http://">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions form-group text-center clearfix">
                                          <button type="submit" class="btn btn-primary">Continue</button>
                                     </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /.main -->
        </div><!--/.row-->
    </div><!--/.container-full-->
</div><!--/.container-wrap-->
<div class="colophon wigetized">
    <div class="container-boxed max">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget widget_text">
                    <h4 class="widget-title">Jobmonster</h4>
                    <div class="textwidget">
                        Donec elementum tellus vel magna bibendum, et fringilla metus tristique. Vestibulum cursus venenatis lacus, vel eleifend lectus blandit a.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget widget_text">
                    <h4 class="widget-title">Contact Us</h4>
                    <div class="textwidget">
                        <p>
                            JobMonster Inc.<br/>
                            54/29 West 21st Street, New York, 10010, USA<br/>
                            <a href="mailto:email@domain.com">email@domain.com</a><br/>
                            http://jobmonster.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget mailchimp-widget">
                    <h4 class="widget-title">NEWSLETTER</h4>
                    <form class="mc-subscribe-form">
                        <label for="email">
                            Fusce magna tortor, posuere a condimentum ac, vehicula sit amet lorem.
                        </label>
                        <div class="mc-email-wrap">
                            <input type="email" id="email" name="mc_email" class="form-control mc-email" value="" placeholder="Enter your email here..."/>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>  
</div>
<footer class="colophon site-info">
    <div class="container-full">
        <div class="footer-more">
            <div class="container-boxed">
                <div class="row">
                    <div class="col-md-12">
                        <div class="noo-bottom-bar-content">
                            © 2015 Jobmonster. Designed with
                            <i> </i> by NooTheme
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</footer>
</div> <!-- /#top.site -->
<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>
@endsection