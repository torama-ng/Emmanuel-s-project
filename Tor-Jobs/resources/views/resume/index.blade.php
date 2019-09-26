@extends('layouts.app')
@section('content')
{{-- @if (count($resumes) > 0)
@foreach ($resumes as $resume)
@endforeach
@else
<h2>no result</h2>
@endif --}}
<div class="noo-page-heading">
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="resume_nextajax-wrap">
                                    @if (count($resumes) > 0)
                                    @foreach ($resumes as $resume)
                                    <tr>
                                        <td>
                                            <div class="loop-item-wrap">
                                                <div class="item-featured">
                                                    <a href="#">
                                                        <img alt='' src='/storage/resume_images/{{$resume->attachment}}' class='photo' height='40' width='40'/>
                                                    </a>
                                                </div>
                                                <div class="loop-item-content">
                                                    <h2 class="loop-item-title">
                                                        <a href="resume-detail.html">{{$resume->user_id}}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                        <a href="/resume/{{$resume->id}}"><strong>{{$resume->title}}</strong></a>
                                        </td>
                                        
                                        <td class="hidden-xs">
                                            <i class="fa fa-map-marker"></i>&nbsp;<em>{{$resume->location}}</em>
                                        </td>
                                        <td class="hidden-xs"><strong>{{$resume->specialty}}</strong></td>
                                    <td>
                                    <a href="/resume/{{$resume->id}}">
                                        <button class="btn btn-primary">view</button>
                                    </a>    
                                    </td>
                                    </tr>
                                    @endforeach
                                    {{$resumes->links()}}
                                    @else
                                    <h2>no result</h2>
                                    @endif   
                                </tbody>
                            </table>
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
<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>

@endsection