@extends('layouts.app')
@section('content')
@if (count($resumes) > 0)
@foreach ($resumes as $resume)
{{-- <div class="noo-page-heading">
        <div class="container-boxed max parallax-content">
            <div class="page-heading-info">
                <h1 class="page-title">Resume Listing </h1>
            </div>
        </div>
        <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
    </div>
    <div class="container-wrap">
        <div class="container-boxed max offset main-content single-noo_job">
            <div class="row">
                <div class="noo-main col-md-8">
                    <div class="resumes posts-loop">
                        <div class="posts-loop-title">
                            <h3>Resumes</h3>
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
                                                        <img alt='' src='images/avatar/user_50x50.jpg' class='photo' height='40' width='40'/>
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
                                                        <img alt='' src='images/avatar/user_50x50.jpg' class='photo' height='40' width='40'/>
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
                                                        <img alt='' src='images/avatar/user_50x50.jpg' class='photo' height='40' width='40'/>
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
                                                        <img alt='' src='images/avatar/user_50x50.jpg' class='photo' height='40' width='40'/>
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
                                    <tr>
                                        <td>
                                            <div class="loop-item-wrap">
                                                <div class="item-featured">
                                                    <a href="#">
                                                        <img alt='' src='images/avatar/user_50x50.jpg' class='photo' height='40' width='40'/>
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
                                                        <img alt='' src='images/avatar/user_50x50.jpg' class='photo' height='40' width='40'/>
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
                                                        <img alt='' src='images/avatar/user_50x50.jpg' class='photo' height='40' width='40'/>
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
                                                        <img alt='' src='images/avatar/user_50x50.jpg' class='photo' height='40' width='40'/>
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
                            <span class='page-numbers current'>1</span>
                            <a class='page-numbers' href='#'>2</a>
                            <a class='page-numbers' href='#'>3</a>
                            <a class="next page-numbers" href="#">
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>  
                <div class="noo-sidebar col-md-4">
                    <div class="noo-sidebar-wrap">
                        <div class="widget widget_noo_advanced_search_widget">
                            <h4 class="widget-title">Search</h4>
                            <form class="widget-advanced-search">
                                <div class="form-group">
                                    <label class="sr-only" for="search-keyword">keyword</label>
                                    <input type="text" class="form-control" id="search-keyword" name="s" placeholder="keyword" value=""/>
                                </div>
                                <div class="form-group">
                                    <label class="h5" for="search-category">Category</label>
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
                                    <label class="h5">Total Year Experience</label>
                                    <div class="advance-search-form-control">
                                        <select name="experience_year" class="form-control-chosen form-control">
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
                                <div class="form-group">
                                    <label class="h5">Highest Degree Level</label>
                                    <div class="advance-search-form-control">
                                        <select name="highest_degree" class="form-control-chosen form-control">
                                            <option class="text-placeholder" value="">All Highest Degree Level </option>
                                            <option value="">Bachelor Degree </option>
                                            <option value="">Finance Diploma </option>
                                            <option value="">Design Diploma </option>
                                            <option value="">IT Diploma </option>
                                            <option value="">Fashion Design Diploma </option>
                                            <option value="">Engineering degree </option>
                                            <option value="">Bachelor </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="h5">Location</label>
                                    <div class="advance-search-form-control">
                                        <select name="location" class="form-control-chosen form-control">
                                            <option class="text-placeholder" value="">all location</option>
                                            <option value="">Amsterdam</option>
                                            <option value="">Kuta, Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-search-submit">Search</button>
                            </form>
                        </div>
                        <div class="widget noo-resume-count-widget">
                            <ul>
                                <li>
                                    <a href="#">Resumes</a>
                                    <p class="jobs-count">23</p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget noo-resume-category-widget">
                            <h4 class="widget-title">Resume Categories</h4>
                            <ul>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Designer</a></li>
                                <li><a href="#">Developer</a></li>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">Human Resource</a></li>
                                <li><a href="#">Information Technology</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Others</a></li>
                                <li><a href="#">Sales</a></li>
                            </ul>
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
</div>   --}}
{{$resume}}
<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>
@endforeach
@else
<h2>no result</h2>
@endif
@endsection