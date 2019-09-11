@extends('layouts.app')
@section('content')
<div class="container-wrap">
        <div class="main-content container-fullwidth">
            <div class="row">
                <div class="noo-main col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="noo-job-search-wrapper">
                                <div class="job-search-bg-image"></div>
                                <div class="job-advanced-search column-4">
                                    <div class="job-search-info text-center">
                                        <p class="search-top-title">JobMonster HTML Theme</p>
                                        <h3 class="search-main-title">Join us &amp; Explore thousands of Jobs</h3>
                                    </div>
                                    <div class="job-advanced-search-wrap">
                                        <form class="form-inline">
                                            <div class="job-advanced-search-form">
                                                <div class="form-group">
                                                    <label class="sr-only" for="search-keyword">keyword</label>
                                                    <input type="text" class="form-control" id="search-keyword" name="s" placeholder="keyword" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only">Category</label>
                                                    <div class="advance-search-form-control">
                                                        <select name="category" class="form-control-chosen form-control">
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
                                                    <label class="sr-only">Location</label>
                                                    <div class="advance-search-form-control">
                                                        <select name="location" class="form-control-chosen form-control">
                                                            <option class="text-placeholder" value="">all location</option>
                                                            <option value="">Amsterdam</option>
                                                            <option value="">Kuta, Indonesia</option>
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
                    <div class="row bg-primary">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="noo-step-icon clearfix">
                                        <ul class="noo-step-icon-3">
                                            <li>
                                                <span class="noo-step-icon-item">
                                                    <a href="#">
                                                        <span class="fa fa-key noo-step-icon-class"></span>
                                                        <span class="noo-step-icon-title">
                                                            1.Register an account to start
                                                        </span>
                                                    </a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="noo-step-icon-item">
                                                    <a href="#">
                                                        <span class="fa fa-search-plus noo-step-icon-class"></span>
                                                        <span class="noo-step-icon-title">
                                                            2. Specify &amp; search your desired job
                                                        </span>
                                                    </a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="noo-step-icon-item">
                                                    <a href="#">
                                                        <span class="fa fa-file-text-o noo-step-icon-class"></span>
                                                        <span class="noo-step-icon-title">
                                                            3. Send your resume to employers
                                                        </span>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-10 pb-10 bg-white">
                        <div class="container-boxed max">
                            <div class="col-md-8 col-sm-12">
                                <div class="jobs posts-loop jobs-shortcode">
                                    <div class="posts-loop-title">
                                        <h3>Recent Jobs</h3>
                                    </div>
                                    <div class="posts-loop-content">
                                        <div class="posts-loop-content">
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Villa Senang"/>
                                                        </a>
                                                    </div>
                                                    <div class="loop-item-content">
                                                        <h2 class="loop-item-title">
                                                            <a href="#">Housekeeping</a>
                                                        </h2>
                                                        <p class="content-meta">
                                                            <span class="job-company">
                                                                <a href="#">Villa Senang</a>
                                                            </span>
                                                            <span class="job-type contract">
                                                                <a href="#">
                                                                    <i class="fa fa-bookmark"></i>Contract
                                                                </a>
                                                            </span>
                                                            <span class="job-location">
                                                                <i class="fa fa-map-marker"></i>
                                                                <a href="#"><em>Kuta, Indonesia</em></a>
                                                            </span>
                                                            <span>
                                                                <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                                    <i class="fa fa-calendar"></i>
                                                                    Aug 18, 2015 - Aug 31, 2015
                                                                </time>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="show-view-more">
                                                        <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Wild West Company"/>
                                                        </a>
                                                    </div>
                                                    <div class="loop-item-content">
                                                        <h2 class="loop-item-title">
                                                            <a href="#">Developer</a>
                                                        </h2>
                                                        <p class="content-meta">
                                                            <span class="job-company">
                                                                <a href="#">Wild West Company</a>
                                                            </span>
                                                            <span class="job-type part-time">
                                                                <a href="#">
                                                                    <i class="fa fa-bookmark"></i>Part Time
                                                                </a>
                                                            </span>
                                                            <span class="job-location">
                                                                <i class="fa fa-map-marker"></i>
                                                                <a href="#"><em>Amsterdam</em></a>
                                                            </span>
                                                            <span>
                                                                <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                                    <i class="fa fa-calendar"></i>
                                                                    Aug 10, 2015 - Aug 24, 2015
                                                                </time>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="show-view-more">
                                                        <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Vincom Group"/>
                                                        </a>
                                                    </div>
                                                    <div class="loop-item-content">
                                                        <h2 class="loop-item-title">
                                                            <a href="#">Product Designer</a>
                                                        </h2>
                                                        <p class="content-meta">
                                                            <span class="job-company">
                                                                <a href="#">Vincom Group</a>
                                                            </span>
                                                            <span class="job-type full-time">
                                                                <a href="#">
                                                                    <i class="fa fa-bookmark"></i>Full Time
                                                                </a>
                                                            </span>
                                                            <span class="job-location">
                                                                <i class="fa fa-map-marker"></i>
                                                                <a href="#"><em>Berlin</em></a>
                                                            </span>
                                                            <span>
                                                                <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                                    <i class="fa fa-calendar"></i>
                                                                    Jan 22, 2015 - Mar 17, 2016
                                                                </time>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="show-view-more">
                                                        <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Elink Inc."/>
                                                        </a>
                                                    </div>
                                                    <div class="loop-item-content">
                                                        <h2 class="loop-item-title">
                                                            <a href="#">IT Department Manager</a>
                                                        </h2>
                                                        <p class="content-meta">
                                                            <span class="job-company">
                                                                <a href="#">Elink Inc.</a>
                                                            </span>
                                                            <span class="job-type full-time">
                                                                <a href="#">
                                                                    <i class="fa fa-bookmark"></i>Full Time
                                                                </a>
                                                            </span>
                                                            <span class="job-location">
                                                                <i class="fa fa-map-marker"></i>
                                                                <a href="#"><em>Vietnam</em></a>
                                                            </span>
                                                            <span>
                                                                <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                                    <i class="fa fa-calendar"></i>
                                                                    Jan 22, 2015 - Mar 17, 2016
                                                                </time>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="show-view-more">
                                                        <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                    </div>
                                                </div>
                                            </article>
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
                            <div class="col-md-4 col-sm-6">
                                <div class="jobs posts-loop jobs-shortcode slider job-slider">
                                    <div class="posts-loop-title">
                                        <h3>Featured Jobs</h3>
                                    </div>
                                    <div class="pagination list-center">
                                        <a href="#" id="prev" class="prev page-numbers">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>
                                        <a href="#" id="next" class="next page-numbers">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    <ul class="posts-loop-content">
                                        <li class="slider_post">
                                            <div class="img-thumb">
                                                <a href="#">
                                                    <img src="images/job/thumb_360x210.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-title-bar">
                                                        <div class="item-featured">
                                                            <a href="#">
                                                                <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Vincom Group"/>
                                                            </a>
                                                        </div>
                                                        <div class="items">
                                                            <h4 class="item-title">
                                                                <a href="#">Product Designer </a>
                                                            </h4>
                                                            <h4 class="item-company">
                                                                <a href="#">Vincom Group </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <span class="job-type full-time">
                                                            <a href="#">
                                                                <i class="fa fa-bookmark"></i>
                                                                Full Time
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="item-excerpt">
                                                        Job Description Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. 
                                                    </div>
                                                    <div class="item-view-more">
                                                        <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                        <li class="slider_post">
                                            <div class="img-thumb">
                                                <a href="#">
                                                    <img src="images/job/thumb_360x210.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-title-bar">
                                                        <div class="item-featured">
                                                            <a href="#">
                                                                <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Wild West Company"/>
                                                            </a>
                                                        </div>
                                                        <div class="items">
                                                            <h4 class="item-title">
                                                                <a href="#">Vendor Sales Manager </a>
                                                            </h4>
                                                            <h4 class="item-company">
                                                                <a href="#">Wild West Company </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <span class="job-type full-time">
                                                            <a href="#">
                                                                <i class="fa fa-bookmark"></i>
                                                                Full Time
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="item-excerpt">
                                                        Job Description Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. 
                                                    </div>
                                                    <div class="item-view-more">
                                                        <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray pt-5 pb-5 bg-dark">
                        <div class="col-md-12">
                            <div class="container-boxed max">
                                <div class="noo-text-block pt-1 pb-1">
                                    <h3 class="text-center">
                                        <strong>Featured Employer </strong>
                                    </h3>
                                    <p class="text-center">
                                        <em>Donec ut condimentum dui. Mauris vestibulum eros lacus, in ultricies nulla malesuada ac. Praesent semper leo a libero ultrices tempus.</em>
                                    </p>
                                </div>
                                <div class="featured_slider">
                                    <div id="slider_employer">
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt=''/>
                                            </a>
                                        </div>
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt=''/>
                                            </a>
                                        </div>
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt=''/>
                                            </a>
                                        </div>
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt=''/>
                                            </a>
                                        </div>
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt=''/>
                                            </a>
                                        </div>
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt=''/>
                                            </a>
                                        </div>
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt=''/>
                                            </a>
                                        </div>
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt='#'/>
                                            </a>
                                        </div>
                                        <div class='bg_images'>
                                            <a href='#' target='_blank'>
                                                <img src='images/company/company_60x60.jpg' alt=''/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="page pag_slider_employer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-image pt-10 pb-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container-boxed max">
                                    <div class="featured_slider">
                                        <div id="slider_testimonial">
                                            <div class="box_testimonial">
                                                <div class="box-content">
                                                    <p>
                                                        Donec sagittis et massa at rutrum. Proin eleifend nunc interdum tortor malesuada molestie. Donec dictum orci in ipsum aliquam aliquam. Nunc facilisis convallis lobortis. Phasellus erat dui, pulvinar vitae odio vel
                                                    </p>
                                                </div>
                                                <div class="icon"></div>
                                                <div class="box-info">
                                                    <div class="box-info-image">
                                                        <img src="images/testimonial/user_70x70.jpg" alt=""/>
                                                    </div>
                                                    <div class="box-info-entry">
                                                        <h4>JOHNNY SANDERS</h4>
                                                        <h5>Branding Manage - Fliplist.com</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box_testimonial">
                                                <div class="box-content">
                                                    <p>
                                                        Donec sagittis et massa at rutrum. Proin eleifend nunc interdum tortor malesuada molestie. Donec dictum orci in ipsum aliquam aliquam. Nunc facilisis convallis lobortis. Phasellus erat dui, pulvinar vitae odio vel.
                                                    </p>
                                                </div>
                                                <div class="icon"></div>
                                                <div class="box-info">
                                                    <div class="box-info-image">
                                                        <img src="images/testimonial/user_70x70.jpg" alt=""/>
                                                    </div>
                                                    <div class="box-info-entry">
                                                        <h4>JOHNNY SANDERS</h4>
                                                        <h5>Branding Manage - Fliplist.com</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box_testimonial">
                                                <div class="box-content">
                                                    <p>
                                                        Donec sagittis et massa at rutrum. Proin eleifend nunc interdum tortor malesuada molestie. Donec dictum orci in ipsum aliquam aliquam. Nunc facilisis convallis lobortis. Phasellus erat dui, pulvinar vitae odio vel.
                                                    </p>
                                                </div>
                                                <div class="icon"></div>
                                                <div class="box-info">
                                                    <div class="box-info-image">
                                                        <img src="images/testimonial/user_70x70.jpg" alt=""/>
                                                    </div>
                                                    <div class="box-info-entry">
                                                        <h4>JOHNNY SANDERS</h4>
                                                        <h5>Branding Manage - Fliplist.com</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box_testimonial">
                                                <div class="box-content">
                                                    <p>
                                                        <em>Donec ut condimentum dui. Mauris vestibulum eros lacus, in ultricies nulla malesuada ac. Praesent semper leo a libero ultrices tempus.</em>
                                                    </p>
                                                    <p>
                                                        <em>Malesuada ac. Praesent semper leo a libero ultrices tempus.</em>
                                                    </p>
                                                </div>
                                                <div class="icon"></div>
                                                <div class="box-info">
                                                    <div class="box-info-image">
                                                        <img src="images/testimonial/user_70x70.jpg" alt=""/>
                                                    </div>
                                                    <div class="box-info-entry">
                                                        <h4>JOHNNY SANDERS</h4>
                                                        <h5>Branding Manage - Fliplist.com</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box_testimonial">
                                                <div class="box-content">
                                                    <p>
                                                        <em>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat enean sollicitudin ipsum, nec sagittis sem nibh id elit.</em>
                                                    </p>
                                                    <p>
                                                        <em>Donec ut condimentum dui. Mauris vestibulum eros lacus, in ultricies nulla malesuada ac. Praesent semper leo a libero ultrices tempus.</em>
                                                    </p>
                                                </div>
                                                <div class="icon"></div>
                                                <div class="box-info">
                                                    <div class="box-info-image">
                                                        <img src="images/testimonial/user_70x70.jpg" alt=""/>
                                                    </div>
                                                    <div class="box-info-entry">
                                                        <h4>JOHNNY SANDERS</h4>
                                                        <h5>Branding Manage - Fliplist.com</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box_testimonial">
                                                <div class="box-content">
                                                    <p>
                                                        <i>Donec ut condimentum dui. Mauris vestibulum eros lacus, in ultricies nulla malesuada ac. Praesent semper leo a libero ultrices tempus.</i>
                                                    </p>
                                                </div>
                                                <div class="icon"></div>
                                                <div class="box-info">
                                                    <div class="box-info-image">
                                                        <img src="images/testimonial/user_70x70.jpg" alt=""/>
                                                    </div>
                                                    <div class="box-info-entry">
                                                        <h4>JOHNNY SANDERS</h4>
                                                        <h5>Branding Manage - Fliplist.com</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="page pag_slider_testimonial"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <div class="row bg-white pt-10 pb-10">
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
<script>
    jQuery('document').ready(function ($) {
        $("#slider_employer").carouFredSel({
            responsive	: true,
            auto 		: false,
            items		: {
                width		: 180,
                height		: "variable",
                visible		: {
                    min			: 1,
                    max			: 6
                }
            },
            pagination: { container : ".pag_slider_employer", keys	: true }
        });
        $("#slider_testimonial").carouFredSel({
            responsive	: true,
            auto 		: false,
            items		: {
                width		: 180,
                height		: "variable",
                visible		: {
                    min			: 1,
                    max			: 3
                }
            },
            pagination: { container : ".pag_slider_testimonial", keys	: true }
        });
        $('.job-slider .posts-loop-content').carouFredSel({
            infinite: true,
            circular: true,
            responsive: true,
            debug : false,
            items: {
              start: 0
            },
            scroll: {
              items: 1,
              duration: 400,
              fx: "crossfade"
            },
            auto: {
              timeoutDuration: 3000,
              play: true
            },
            swipe: {
              onTouch: true,
              onMouse: true
            },
            prev : "#prev",
            next : "#next"
        });
    });
</script>

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