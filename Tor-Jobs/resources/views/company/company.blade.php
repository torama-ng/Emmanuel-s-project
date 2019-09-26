
@extends('layouts.app')
@section('content')
<div class="site">
        <div class="noo-page-heading">
            <div class="container-boxed max parallax-content">
                <div class="page-heading-info">
                    <h1 class="page-title">Company</h1>
                </div>
            </div> 
            <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
        </div>
        <div class="container-wrap">
            <div class="main-content container-boxed max offset">
                <div class="row">
                    <div class="noo-main col-md-8">
                        <div class="form-title">
                            <h3>Companies</h3>
                        </div>
                        <div class="company-letters">
                            <a href="#A">A</a>
                            <a href="#B">B</a>
                            <a href="#C">C</a>
                            <a href="#D">D</a>
                            <a href="#E">E</a>
                            <a href="#F">F</a>
                            <a href="#G">G</a>
                            <a href="#H">H</a>
                            <a href="#I">I</a>
                            <a href="#J">J</a>
                            <a href="#K">K</a>
                            <a href="#L">L</a>
                            <a href="#M">M</a>
                            <a href="#N">N</a>
                            <a href="#O">O</a>
                            <a href="#P">P</a>
                            <a href="#Q">Q</a>
                            <a href="#R">R</a>
                            <a href="#S">S</a>
                            <a href="#T">T</a>
                            <a href="#U">U</a>
                            <a href="#V">V</a>
                            <a href="#W">W</a>
                            <a href="#X">X</a>
                            <a href="#Y">Y</a>
                            <a href="#Z">Z</a>
                        </div>
                        <div class="masonry">
                            <ul class="companies-overview masonry-container">
                                <li class="company-group masonry-item">
                                  
                                    <ul>
                                            @if(count($jobs) > 0)
                                            @foreach ($jobs as $job)
                                    <li class="company-name"><a href="/jobform/{{$job->id}}"> {{$job->companyname}}</a></li>
                                            @endforeach
                                                
                                            @else
                                            <h2>nothing</h2>    
                                            @endif
                                            
                                        
                                       
                                    </ul>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class=" noo-sidebar col-md-4">
                        <div class="noo-sidebar-wrap">
                            <div class="widget noo-job-search-widget">
                                <h3 class="widget-title">Search</h3>
                                <form class="form-horizontal noo-job-search">
                                    <label class="sr-only" for="s">Search for:</label>
                                    <input type="search" id="s" class="form-control" placeholder="Search Job&hellip;" value="" name="search" title="Search for:"/>
                                    <div class="form-group form-action">
                                            <button type="submit" class="btn btn-primary btn-search-submit">Search</button>
                                        </div>
                                </form>
                            </div>
                            <div class="widget noo-job-count-widget">
                                <ul>
                                        {{-- @if(count($jobs) > 0) --}}
                                        {{-- @foreach ($jobs as $job) --}}
                                    <li>
                                        <a href="#">Companies</a>
                                        <p class="jobs-count">{{$jobs->count()}}</p>
                                    </li>
                                    {{-- @endforeach --}}
                                                
                                    {{-- @else
                                    <h2>nothing</h2>    
                                    @endif --}}
                                    
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

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/modernizr-2.7.1.min.js'></script>
    <script type='text/javascript' src='js/jquery.cookie.js'></script>
    <script type='text/javascript' src='js/jquery.blockUI.min.js'></script>
    <script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
    <script type='text/javascript' src='js/isotope-2.0.0.min.js'></script>
    <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type='text/javascript' src='js/hoverIntent-r7.min.js'></script>
    <script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
    <script type='text/javascript' src='js/script.js'></script>
    <script type='text/javascript' src='js/chosen.jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.datetimepicker.js'></script>
    <script type='text/javascript' src='js/jquery.parallax-1.1.3.js'></script>
    <script type='text/javascript' src='js/jquery.carouFredSel-6.2.1-packed.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

    <div class="memberModalLogin modal fade" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-member">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row login-socical">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div class="button_socical fb">
                                <i class="fa fa-facebook-square"></i>
                                <em class="fa-facebook-square">Login with Facebook</em>
                            </div>
                            <div class="button_socical gg">
                                <i class="fa fa-google-plus"></i>
                                <em class="fa-google-plus">Login with Google</em>
                            </div>
                            <div class="button_socical linkedin">
                                <i class="fa fa-linkedin-square"></i>
                                <em class="fa-linkedin-square">Login with LinkedIn</em>
                            </div>
                        </div>
                    </div>
                    <form class="noo-ajax-login-form form-horizontal">
                        <div class="form-group row">
                            <label class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="log form-control" name="log" required placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="pwd form-control" required value="" name="pwd" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <div class="checkbox">
                                    <div class="form-control-flat">
                                        <label class="checkbox">
                                            <input type="checkbox" class="rememberme" name="rememberme" value="forever">
                                            <i></i> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions form-group text-center">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                            <div class="login-form-links">
                                <span><a href="#"><i class="fa fa-question-circle"></i> Forgot Password?</a></span>
                                <span>
                                    Don't have an account yet? 
                                    <a href="#" class="member-register-link" data-rel="registerModal">
                                        Register Now <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="memberModalRegister modal fade" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-member">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Sign Up</h4>
                </div>
                <div class="modal-body">
                    <form class="noo-ajax-register-form form-horizontal">
                        <div class="form-group row user_login_container">
                            <label class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="user_login form-control" name="user_login" required placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="user_email form-control" name="user_email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="user_password form-control" required value="" name="user_password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label">Retype your password</label>
                            <div class="col-sm-9">
                                <input type="password" class="cuser_password form-control" required value="" name="cuser_password" placeholder="Repeat password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label">You are</label>
                            <div class="col-sm-9">
                                <div class="form-control-flat">
                                    <select class="user_role" name="user_role" required>
                                        <option value="">-Select-</option>
                                        <option value="">I&#039;m an employer looking to hire</option>
                                        <option value="">I&#039;m a candidate looking for a job</option>
                                    </select>
                                    <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="checkbox account-reg-term">
                                <div class="form-control-flat">
                                    <label class="checkbox">
                                        <input class="account_reg_term" type="checkbox" title="Please agree with the term">
                                        <i></i>
                                        I agree with the <a href="#">Terms of use</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection