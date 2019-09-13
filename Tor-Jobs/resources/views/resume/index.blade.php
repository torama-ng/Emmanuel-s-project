@extends('layouts.app')
@section('content')
<div class="container-wrap">
        <div class="main-content container-fullwidth">
            <div class="row">
                <div class="noo-main col-md-12">
                    <div class="row pt-0 pb-0">
                        <div class="col-md-12">
                            <div class="noo-job-search-wrapper">
                                <div class="job-search-bg-image"></div>
                                <div class="job-advanced-search column-4">
                                    <div class="job-search-info text-center">
                                        <p class="search-top-title">JobMonster HTML Theme</p>
                                        <h3 class="search-main-title">Thousands of Qualified Resumes are Available</h3>
                                    </div>
                                    <div class="job-advanced-search-wrap">
                                        <form class="form-inline">
                                            <div class="job-advanced-search-form">
                                                <div class="form-group">
                                                    <label class="sr-only" for="search-keyword">keyword</label>
                                                    <input type="text" class="form-control" id="search-keyword" name="s" placeholder="keyword" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="search-category">Category</label>
                                                    <div class="advance-search-form-control">
                                                        <select name="category" class="form-control-chosen form-control" id="search-category">
                                                            <option class="text-placeholder" value="">all category</option>
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
                                                <div class="form-group">
                                                    <label class="sr-only" for="search-custom-field">Total Year Experience</label>
                                                    <div class="advance-search-form-control">
                                                        <select name="_experience_year" id="search-custom-field" class="form-control-chosen form-control">
                                                            <option class="text-placeholder" value="">All Total Year Experience </option>
                                                            <option value="">1 </option>
                                                            <option value="">2 </option>
                                                            <option value="">3 </option>
                                                            <option value="">4 </option>
                                                            <option value="">5 </option>
                                                            <option value="">6 </option>
                                                            <option value="">7 </option>
                                                            <option value="">8 </option>
                                                            <option value="">9 </option>
                                                            <option value="">10 </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group form-action">
                                                    <button type="button" class="btn btn-primary btn-search-submit">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-10 pb-10 bg-white">
                        <div class="container-boxed max">
                            <div class="col-md-12">
                                <div class="resumes posts-loop">
                                    <div class="posts-loop-title">
                                        <h3>Popular resumes</h3>
                                    </div>
                                    <div class="posts-loop-content resume-table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Candidate</th>
                                                    <th>Resume Title</th>
                                                    <th class="hidden-xs">Location</th>
                                                    <th class="hidden-xs">Category</th>
                                                </tr>
                                            </thead>
                                            <tbody class="resume_nextajax-wrap">
                                                <tr>
                                                    <td>
                                                        <div class="loop-item-wrap">
                                                            <div class="item-featured">
                                                                <a href="#">
                                                                    <img alt='' src='images/avatar/user_100x100.jpg' class='photo' height='40' width='40'/>
                                                                </a>
                                                            </div>
                                                            <div class="loop-item-content">
                                                                <h2 class="loop-item-title">
                                                                    <a href="resume-detail.html">Suresh Patel</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"><strong>Web Developer</strong></a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <i class="fa fa-map-marker"></i>&nbsp;<em>india</em>
                                                    </td>
                                                    <td class="hidden-xs"><strong>Designer, Developer</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="loop-item-wrap">
                                                            <div class="item-featured">
                                                                <a href="#">
                                                                    <img alt='' src='images/avatar/user_100x100.jpg' class='photo' height='40' width='40'/>
                                                                </a>
                                                            </div>
                                                            <div class="loop-item-content">
                                                                <h2 class="loop-item-title">
                                                                    <a href="resume-detail.html">Cammy</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"><strong>Front Desk Specialist</strong></a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <i class="fa fa-map-marker"></i>&nbsp;<em>Atlanta</em>
                                                    </td>
                                                    <td class="hidden-xs"><strong>Customer Service</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="loop-item-wrap">
                                                            <div class="item-featured">
                                                                <a href="#">
                                                                    <img alt='' src='images/avatar/user_100x100.jpg' class='photo' height='40' width='40'/>
                                                                </a>
                                                            </div>
                                                            <div class="loop-item-content">
                                                                <h2 class="loop-item-title">
                                                                    <a href="resume-detail.html">Bettymesfin</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"><strong>Web Developer</strong></a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <i class="fa fa-map-marker"></i>&nbsp;<em>Atlanta</em>
                                                    </td>
                                                    <td class="hidden-xs"><strong>Information Technology</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="loop-item-wrap">
                                                            <div class="item-featured">
                                                                <a href="#">
                                                                    <img alt='' src='images/avatar/user_100x100.jpg' class='photo' height='40' width='40'/>
                                                                </a>
                                                            </div>
                                                            <div class="loop-item-content">
                                                                <h2 class="loop-item-title">
                                                                    <a href="resume-detail.html">Jane Doe</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"><strong>Marketing Online</strong></a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <i class="fa fa-map-marker"></i>&nbsp;<em>Berlin</em>
                                                    </td>
                                                    <td class="hidden-xs"><strong>Marketing</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pagination list-center">
                                        <a href="#" class="prev page-numbers">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>
                                        <a href="#" class="next page-numbers">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray pt-9 pb-0">
                        <div class="col-md-12">
                            <div class="container-boxed max">
                                <div class="row pt-0 pb-0">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="noo-text-block">
                                            <h3>Featured Employers</h3>
                                            <p>
                                                Donec ut condimentum dui. Mauris vestibulum eros lacus, in ultricies nulla malesuada ac. Praesent semper leo a libero ultrices tempus.
                                            </p>
                                        </div>
                                        <hr class="noo-clear" />
                                        <div class="noo-text-block list-image-employer">
                                            <p>
                                                <a href="#">
                                                    <img src="images/logo/logo_177x100.jpg" alt="" width="210" height="120"/>
                                                </a>
                                                <a href="#">
                                                    <img src="images/logo/logo_177x100.jpg" alt="" width="210" height="120"/>
                                                </a>
                                                <a href="#">
                                                    <img src="images/logo/logo_177x100.jpg" alt="" width="210" height="120"/>
                                                </a>
                                                <a href="#">
                                                    <img src="images/logo/logo_177x100.jpg" alt="" width="210" height="120"/>
                                                </a>
                                                <a href="#">
                                                    <img src="images/logo/logo_177x100.jpg" alt="" width="210" height="120"/>
                                                </a>
                                                <a href="#">
                                                    <img src="images/logo/logo_177x100.jpg" alt="" width="210" height="120"/>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <img src="images/home-image_709x632.png" alt="home-image" class="noo-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="parallax customer" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
                    </div>
                    <div class="row bg-gray pt-10 pb-10">
                        <div class="col-md-12">
                            <div class="noo-text-block">
                                <h3 class="text-center">What JobMonster Offered</h3>
                                <p class="text-center text-italic">
                                    Integer mollis nunc et nibh sodales volutpat. Vivamus rhoncus, magna quis ultricies<br/>
                                    rhoncus, neque nunc laoreet dolor.
                                </p>
                            </div>
                            <div class="container-boxed max">
                                <div class="row pt-5 pb-2">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="noo-text-block">
                                            <p>
                                                <span class="text-primary pr-2">
                                                    <span class="noo-icon features-icon icon-circle">
                                                        <i class="fa fa-mobile"></i>
                                                    </span>
                                                </span>
                                                <strong>CROSS BROWSERS</strong><br/>
                                                Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="noo-text-block">
                                            <p>
                                                <span class="text-primary pr-2">
                                                    <span class="noo-icon features-icon icon-circle">
                                                        <i class="fa fa-cog"></i>
                                                    </span>
                                                </span>
                                                <strong>EASY CUSTOMIZATION</strong><br/>
                                                Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="noo-text-block">
                                            <p>
                                                <span class="text-primary pr-2">
                                                    <span class="noo-icon features-icon icon-circle">
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </span>
                                                <strong>POWERFUL FEATURES</strong><br/>
                                                Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-boxed max">
                                <div class="row pt-2 pb-2">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="noo-text-block">
                                            <p>
                                                <span class="text-primary pr-2">
                                                    <span class="noo-icon features-icon icon-circle">
                                                        <i class="fa fa-magic"></i>
                                                    </span>
                                                </span>
                                                <strong>MODERN DESIGN</strong><br/>
                                                Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="noo-text-block">
                                            <p>
                                                <span class="text-primary pr-2">
                                                    <span class="noo-icon features-icon icon-circle">
                                                        <i class="fa fa-code"></i>
                                                    </span>
                                                </span>
                                                <strong>CLEAN CODING</strong><br/>
                                                Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="noo-text-block">
                                            <p>
                                                <span class="text-primary pr-2">
                                                    <span class="noo-icon features-icon icon-circle">
                                                        <i class="fa fa-thumbs-o-up"></i>
                                                    </span>
                                                </span>
                                                <strong>QUICK SUPPORT</strong><br/>
                                                Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-10 pb-10 bg-white">
                        <div class="container-boxed max">
                            <div class="col-md-12">
                                <div class="noo-text-block">
                                    <h3 class="text-center">From Our Blog</h3>
                                    <p class="text-center text-italic">
                                        Etiam imperdiet pulvinar nisl, eu iaculis justo efficitur in.
                                    </p>
                                </div>
                                <hr class="noo-gap mt-4"/>
                                <div class="noo-recent-news posts-loop grid">
                                    <div class="row">
                                        <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                            <div class="loop-item-wrap">
                                                <div class="loop-item-featured">
                                                    <a href="#">
                                                        <img width="555" height="100" src="images/blog/blog_555x100.jpg" alt="blog_9"/>
                                                    </a>
                                                </div>
                                                <div class="loop-item-content">
                                                    <h2 class="loop-item-title">
                                                        <a href="blog-detail.html">
                                                            Career Fair 2015: Over 500 Jobs From Great Employers
                                                        </a>
                                                    </h2>
                                                    <p class="content-meta">
                                                        <span>
                                                            <i class="fa fa-file-image-o"></i>
                                                            under <a href="#">News</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                            <div class="loop-item-wrap">
                                                <div class="loop-item-featured">
                                                    <a href="#">
                                                        <img width="555" height="100" src="images/blog/blog_555x100.jpg" alt="blog_8"/>
                                                    </a>
                                                </div>
                                                <div class="loop-item-content">
                                                    <h2 class="loop-item-title">
                                                        <a href="blog-detail.html">
                                                            10 Best Tech Companies To Work For 2014
                                                        </a>
                                                    </h2>
                                                    <p class="content-meta">
                                                        <span>
                                                            <i class="fa fa-file-image-o"></i>
                                                            under <a href="#">News</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                            <div class="loop-item-wrap">
                                                <div class="loop-item-featured">
                                                    <a href="#">
                                                        <img width="555" height="100" src="images/blog/blog_555x100.jpg" alt="blog_13"/>
                                                    </a>
                                                </div>
                                                <div class="loop-item-content">
                                                    <h2 class="loop-item-title">
                                                        <a href="blog-detail.html">
                                                            Back To Work After Vacation
                                                        </a>
                                                    </h2>
                                                    <p class="content-meta">
                                                        <span>
                                                            <i class="fa fa-file-image-o"></i>
                                                            under <a href="#">Productivity</a>, <a href="#">Skills</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                            <div class="loop-item-wrap">
                                                <div class="loop-item-featured">
                                                    <a href="#">
                                                        <img width="555" height="100" src="images/blog/blog_555x100.jpg" alt="blog_11"/>
                                                    </a>
                                                </div>
                                                <div class="loop-item-content">
                                                    <h2 class="loop-item-title">
                                                        <a href="blog-detail.html">
                                                            How To Get Out Of Stress At Work
                                                        </a>
                                                    </h2>
                                                    <p class="content-meta">
                                                        <span>
                                                            <i class="fa fa-file-image-o"></i>
                                                            under <a href="#">News</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                            <div class="loop-item-wrap">
                                                <div class="loop-item-featured">
                                                    <a href="#">
                                                        <img width="555" height="100" src="images/blog/blog_555x100.jpg" alt="blog_4"/>
                                                    </a>
                                                </div>
                                                <div class="loop-item-content">
                                                    <h2 class="loop-item-title">
                                                        <a href="blog-detail.html">
                                                            Job Motivational Quote
                                                        </a>
                                                    </h2>
                                                    <p class="content-meta">
                                                        <span>
                                                            <i class="fa fa-file-image-o"></i>
                                                            under <a href="#">Career Advice</a>, <a href="#">Productivity</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                            <div class="loop-item-wrap">
                                                <div class="loop-item-featured">
                                                    <a href="#">
                                                        <img width="555" height="100" src="images/blog/blog_555x100.jpg" alt="blog_3"/>
                                                    </a>
                                                </div>
                                                <div class="loop-item-content">
                                                    <h2 class="loop-item-title">
                                                        <a href="blog-detail.html">
                                                            Our Blog Theme
                                                        </a>
                                                    </h2>
                                                    <p class="content-meta">
                                                        <span>
                                                            <i class="fa fa-file-image-o"></i>
                                                            under <a href="#">News</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-primary-overlay bg-image bg-parallax pt-5 pb-0">
                        <div class="col-md-12 parallax-content">
                            <div class="container-boxed max">
                                <div class="row pt-2 pb-0">
                                    <div class="col-md-6 col-sm-12 pr-8">
                                        <img src="images/app-device_408x478.png" alt="app-device" class="noo-image">
                                    </div>
                                    <div class="col-md-6 col-sm-12 pt-10">
                                        <div class="noo-text-block">
                                            <div class="app-section white">
                                                <h3 class="white">Get JobMonster App for your mobile</h3>
                                                <p>
                                                    <em>Searching for jobs never been that easy. Now you can find job matched your career expectation, apply for jobs and receive feedback right on your mobile. Get JobMonster mobile app and start your job search now!</em>
                                                    <img class="mr-2 mt-3" src="images/thumb-app_183x60.png" alt="customer"/>
                                                    <img class="mt-3" src="images/thumb-app_183x60.png" alt="customer"/>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="parallax app" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
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
@endsection