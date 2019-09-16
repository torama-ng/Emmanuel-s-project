
@extends('layouts.app')

@section('content')
<div class="noo-page-heading">
    <div class="container-boxed max parallax-content">
        <div class="page-heading-info">
            <h1 class="page-title">{{$job->jobtitle}}<span class="count">1418 views</span> </h1>
        </div>
        <div class="page-sub-heading-info">
            <p class="content-meta">
                <span class="job-type part-time">
                    <a href="#"><i class="fa fa-bookmark"></i>{{$job->jobtype}}</a>
                </span>
                <span class="job-location">
                    <i class="fa fa-map-marker"></i>
                    <a href="#"><em>{{$job->location}}</em></a>
                </span>
                <span>
                    <time class="entry-date" datetime="2015-08-10T09:46:53+00:00">
                        <i class="fa fa-calendar"></i>
                        {{$job->created_at}}
                    </time>
                </span>
                <span>
                    <i class="fa fa-folder"></i>
                    <a href="#"> {{$job->jobtitle}}</a>
                </span>
                <span>
                    <a href="#"><i class="fa fa-print"></i> Print</a>
                </span>
            </p>
        </div> 
    </div>
    <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
    <div class="container-boxed max offset main-content single-noo_job">
        <div class="row">
            <div class="noo-main col-md-8">
                <div class="job-desc">
                    <h3>Job Description</h3>
                    <p>{{$job->job_description}}</p>
                    <h3>How To Apply</h3>
                    <p>
                        How candidate can apply for your job. You can leave your contact, address to receive hard copy application or any detailed guide for application.
                    </p>
                    <div class="job-custom-fields">
                        <h3>Salary Offer</h3>
                        <p>{{$job->salary_offer}}</p>
                        <h3>Experience Level</h3>
                        <p>
                            <i class="fa fa-check-circle"></i>
                            {{$job->experience_level}}
                        </p>
                        <h3>Total Years Experience</h3>
                        <p>
                            <i class="fa fa-check-circle"></i>
                            {{$job->total_years}} 
                        </p>
                        <h3>Academic Degree</h3>
                        <p>
                            <i class="fa fa-check-circle"></i>
                            {{$job->academic_degree}} 
                        </p>
                        <h3>Dress Code</h3>
                        <p>
                            <i class="fa fa-check-circle"></i>
                            {{$job->dress_code}} 
                        </p>
                        <h3>Working Hours</h3>
                        <p>{{$job->working_hours}}</p>
                    </div>
                </div>
                <div class="job-action">
                    <a class="btn btn-primary" data-target="#applyJobModal" href="#" data-toggle="modal">
                        Apply for this job
                    </a>
                    <div id="applyJobModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="applyJobModalLabel">Apply Job</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="candidate_name" class="control-label">Name</label>
                                            <input type="text" class="form-control" id="candidate_name" value="" name="candidate_name" autofocus required placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="candidate_email" class="control-label">Email</label>
                                            <input type="email" class="form-control" id="candidate_email" value="" name="candidate_email" required placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="application_message" class="control-label">Message</label>
                                            <textarea class="form-control" id="application_message" name="application_message" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="control-label">
                                                        Upload to CV
                                                    </label>
                                                    <div class="form-control-flat">
                                                        <div class="form-control-file"> 
                                                            <span class="form-control-file-button">
                                                                <i class="fa fa-folder-open"></i> Browse
                                                            </span>
                                                            <input type="file" name="application_attachment" class="jform-validate-uploadcv" accept=".doc,.docx,.pdf"> 
                                                            <input type="text" readonly value="" class="form-control" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <p class="help-block">Maximum upload file size: 12 MB</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-actions">
                                            <button type="button" class="btn btn-primary">Send application</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-default" href="#">Apply via LinkedIn</a>
                    <a class="bookmark-job pull-right" href="javascript:void(0);" data-toggle="tooltip" data-original-title="Bookmark Job">
                        <i class="fa fa-heart"></i>
                    </a>
                </div>
            </div>  
            <div class="noo-sidebar col-md-4">
                <div class="noo-sidebar-wrap">
                    <div class="job-social clearfix">
                        <span class="noo-social-title">
                            Share this job
                        </span>
                        <a href="#share" class="noo-icon fa fa-facebook" title="Share on Facebook"></a>
                        <a href="#share" class="noo-icon fa fa-twitter" title="Share on Twitter"></a>
                        <a href="#share" class="noo-icon fa fa-google-plus" title="Share on Google+"></a>
                        <a href="#share" class="noo-icon fa fa-pinterest" title="Share on Pinterest"></a>
                        <a href="#share" class="noo-icon fa fa-linkedin" title="Share on LinkedIn"></a>
                    </div>
                    <div class="company-desc">
                        <div class="company-header">
                            <div class="company-featured">
                                <a href="#">
                                    <img width="110" height="110" src="/storage/cover_images/{{$job->company_logo}}" alt="Wild West Company"/>
                                </a>
                            </div>
                            <h3 class="company-title">
                                <a href="#">{{$job->companyname}}</a>
                            </h3>
                        </div>
                        <div class="company-info">
                            {{$job->company_description}}
                            <div class="job-social clearfix">
                                <span class="noo-social-title">Connect with us</span>
                                <a href="#" class="company_website" target="_blank">
                                    <span>{{$job->company_website}}</span>
                                </a>
                                <a class="noo-icon fa fa-facebook" href="#" target="_blank"></a> 
                                <a class="noo-icon fa fa-twitter" href="#" target="_blank"></a> 
                                <a class="noo-icon fa fa-google-plus" href="#" target="_blank"></a> 
                                <a class="noo-icon fa fa-linkedin" href="#" target="_blank"></a> 
                                <a class="noo-icon fa fa-instagram" href="#" target="_blank"></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>  
</div>
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
</div>  
<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>


@endsection