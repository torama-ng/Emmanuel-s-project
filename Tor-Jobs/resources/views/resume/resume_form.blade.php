@extends('layouts.app')
@section('content')
	
<body>
    <div class="noo-page-heading">
        <div class="container-boxed max text-center parallax-content">
            <div class="member-heading-avatar">
                <img alt='' src='images/avatar/user_100x100.jpg' height='100' width='100'/>
            </div>
            <div class="page-heading-info ">
                <h1 class="page-title">Post a Resume</h1>
            </div>
            <div class="page-sub-heading-info">
                Resume Detail
            </div>
        </div> 
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
                                <form class="form-horizontal">
                                    <div class="jstep-content">
                                        <div class="jpanel jpanel-resume-form">
                                            <div class="jpanel-title">
                                                <h3>Resume Detail</h3>
                                            </div>
                                            <div class="jpanel-body">
                                                <div class="resume-form">
                                                    <div class="resume-form-detail">
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Education</label>
                                                            <div class="col-sm-9">
                                                                <div class="noo-metabox-addable">
                                                                    <div class="noo-addable-fields">
                                                                        <div class="fields-group">
                                                                            <input type="text" class="form-control" placeholder="School name" name='education_school' value="" />
                                                                            <input type="text" class="form-control" placeholder="Qualification(s)" name='education_qualification' value="" />
                                                                            <input type="text" class="form-control" placeholder="Start/end date" name='education_date' value="" />
                                                                            <textarea class="form-control form-control-editor ignore-valid" id="education_note" name="education_note" rows="5" placeholder="Note"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="noo-addable-actions">
                                                                        <a href="#" class="noo-clone-fields pull-left">
                                                                            <i class="fa fa-plus-circle text-primary"></i>
                                                                            Add Education
                                                                        </a>
                                                                        <a href="#" class="noo-remove-fields pull-right">
                                                                            <i class="fa fa-times-circle"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Work Experience</label>
                                                            <div class="col-sm-9">
                                                                <div class="noo-metabox-addable">
                                                                    <div class="noo-addable-fields">
                                                                        <div class="fields-group">
                                                                            <input type="text" class="form-control" placeholder="Employer" name='experience_employer' value="" />
                                                                            <input type="text" class="form-control" placeholder="Job Title" name='experience_job' value="" />
                                                                            <input type="text" class="form-control" placeholder="Start/end date" name='experience_date' value="" />
                                                                            <textarea class="form-control" id="experience_note" name="experience_note" rows="5" placeholder="Note"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="noo-addable-actions">
                                                                        <a href="#" class="noo-clone-fields pull-left">
                                                                            <i class="fa fa-plus-circle text-primary"></i>
                                                                            Add Experience
                                                                        </a>
                                                                        <a href="#" class="noo-remove-fields pull-right">
                                                                            <i class="fa fa-times-circle"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Summary of Skill</label>
                                                            <div class="col-sm-9">
                                                                <div class="noo-metabox-addable">
                                                                    <div class="noo-addable-fields">
                                                                        <div class="fields-group row">
                                                                            <div class="col-sm-9 col-xs-6">
                                                                                <input type="text" class="form-control" placeholder="Skill Name" name='skill_name' value="" />
                                                                            </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                                                                <input type="text" class="form-control" name='skill_percent' value="" />
                                                                                <span class="percent-text">% (1 to 100)</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="noo-addable-actions">
                                                                        <a href="#" class="noo-clone-fields pull-left">
                                                                            <i class="fa fa-plus-circle text-primary"></i>
                                                                            Add Skill
                                                                        </a>
                                                                        <a href="#" class="noo-remove-fields pull-right">
                                                                            <i class="fa fa-times-circle"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions form-group text-center clearfix">
                                            <a class="btn btn-primary" href="#">Back</a>
                                             <button type="button" class="btn btn-primary">Preview</button>
                                         </div>
                                    </div>
                                </form>
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