@extends('layouts.app')
@section('content')
<div class="noo-page-heading">
        <div class="container-boxed max parallax-content">
            <div class="page-heading-info">
                <h1 class="page-title">Resume Detail</h1>
            </div>
        </div>
        <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
    </div>
    <div class="container-wrap">
        <div class="container-boxed max offset main-content">
            <div class="row">
                <div class="noo-main col-md-12">
                    <article class="resume">
                        <div class="resume-candidate-profile">
                            <div class="row">
                                <div class="col-sm-3 profile-avatar">
                                <img alt='' src='/storage/resume_images/{{$resume->attachment}}' height='160' width='160' />
                                </div>
                                <div class="col-sm-9 candidate-detail">
                                    <div class="candidate-title clearfix">
                                        <h2>{{$resume->user_id}}</h2>
                                    </div>
                                    <div class="candidate-info">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <i class="fa fa-suitcase text-primary"></i>
                                                &nbsp;&nbsp;Team Leader for Dinero Software
                                            </div>
                                            <div class="col-sm-6">
                                                <i class="fa fa-map-marker text-primary"></i>
                                                &nbsp;&nbsp;{{$resume->location}}
                                            </div>
                                            <div class="col-sm-6">
                                                <i class="fa fa-birthday-cake text-primary"></i>
                                                &nbsp;&nbsp;Nov 12, 1984
                                            </div>
                                            <div class="col-sm-6">
                                                <i class="fa fa-phone text-primary"></i>
                                                &nbsp;&nbsp;9892944868
                                            </div>
                                            <div class="col-sm-6 pull-right">
                                                <a href="{{$resume->user_email}}">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                    &nbsp;&nbsp;{{$resume->user_email}}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pull-left"></div>
                                            <div class="candidate-social col-sm-6 pull-right" >
                                                <a class="noo-icon fa fa-facebook" href="#" target="_blank"></a>
                                                <a class="noo-icon fa fa-twitter" href="#" target="_blank"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="resume-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="resume-desc">
                                        <div class="resume-general row">
                                            <div class="col-sm-3">
                                                <h3 class="title-general">
                                                    <span>General Infomation</span>
                                                </h3>										
                                            </div>
                                            <div class="col-sm-9">
                                                <ul>
                                                    <li>
                                                        <span>Language</span>
                                                        {{$resume->language}}
                                                    </li>
                                                    <li>
                                                        <span>Highest Degree Level</span>
                                                        {{$resume->highest_degree}}
                                                    </li>
                                                    <li>
                                                        <span>Total Year Experience</span>
                                                       ...
                                                    </li>
                                                    <li>
                                                        <span>Job Category</span>
                                                        {{$resume->specialty}}
                                                    </li>
                                                    <li>
                                                        <span>Expected Job Level</span>
                                                       ....
                                                    </li>
                                                    <li>
                                                        <span>Job Location</span>
                                                        Amsterdam
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12">
                                                <p>
                                                    {{$resume->desc}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="resume-timeline row">
                                            <div class="col-md-3 col-sm-12">
                                                <h3 class="title-general">
                                                    <span>Education</span>
                                                </h3>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <div class="timeline-container education">
                                                    <div class="timeline-wrapper ">
                                                        <div class="timeline-time">
                                                            <span>1990 - 1995</span>
                                                        </div>
                                                        <dl class="timeline-series">
                                                            <dt class="timeline-event">
                                                                <a>
                                                                    Little Elementary<span>Elementary</span>
                                                                </a>
                                                            </dt>
                                                            <dd class="timeline-event-content">
                                                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus.</p>
                                                                <br class="clear">
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                    <div class="timeline-wrapper last">
                                                        <div class="timeline-time">
                                                            <span>1996 - 1999</span>
                                                        </div>
                                                        <dl class="timeline-series">
                                                            <dt class="timeline-event">
                                                                <a>
                                                                    Belford HighSchool<span>HighSchool</span>
                                                                </a>
                                                            </dt>
                                                            <dd class="timeline-event-content">
                                                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus magna justo,</p>
                                                                <br class="clear">
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resume-timeline row">
                                            <div class="col-md-3 col-sm-12">
                                                <h3 class="title-general">
                                                    <span>Work Experience</span>
                                                </h3>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <div class="timeline-container experience">
                                                    <div class="timeline-wrapper ">
                                                        <div class="timeline-time">
                                                            <span>2010 - 2014</span>
                                                        </div>
                                                        <dl class="timeline-series">
                                                            <dt class="timeline-event">
                                                                <a>
                                                                    A&amp;T Decoration<span class="tick tick-after">Designer</span>
                                                                </a>
                                                            </dt>
                                                            <dd class="timeline-event-content">
                                                                <p>
                                                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                                                </p>
                                                                <br class="clear">
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                    <div class="timeline-wrapper last">
                                                        <div class="timeline-time">
                                                            <span>2014 - 2015</span>
                                                        </div>
                                                        <dl class="timeline-series">
                                                            <dt class="timeline-event">
                                                                <a>
                                                                    Envato<span class="tick tick-after">Designer</span>
                                                                </a>
                                                            </dt>
                                                            <dd class="timeline-event-content">
                                                                <p>
                                                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                                                </p>
                                                                <br class="clear">
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resume-timeline row">
                                            <div class="col-md-3 col-sm-12">
                                                <h3 class="title-general">
                                                    <span>Summary of Skills</span>
                                                </h3>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <div class="skill">
                                                    <div class="pregress-bar clearfix">
                                                        <div class="progress_title">
                                                            <span>Photoshop</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div role="progressbar" aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-bg" aria-valuenow="90" style="width: 90%;">
                                                                <div class="progress_label"><span>90</span>%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pregress-bar clearfix">
                                                        <div class="progress_title">
                                                            <span>Illustrator</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div role="progressbar" aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-bg" aria-valuenow="85" style="width: 85%;">
                                                                <div class="progress_label"><span>85</span>%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pregress-bar clearfix">
                                                        <div class="progress_title">
                                                            <span>HTML</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div role="progressbar" aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-bg" aria-valuenow="100" style="width: 100%;">
                                                                <div class="progress_label"><span>100</span>%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
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