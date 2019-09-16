@extends('layouts.app')
@section('content')
<div class="noo-page-heading">
    <div class="container-boxed max parallax-content">
      <div class="page-heading-info">
        <h1 class="page-title">Jobs </h1>
      </div>
    </div> 
    <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
  </div>
  <div class="container-wrap">
    <div class="main-content container-boxed max offset">
      <div class="row">
        <div class="noo-main col-md-8">
          <div class="jobs posts-loop">
            <div class="posts-loop-title">
              <h3>Latest Jobs</h3>
            </div>
            <div class="posts-loop-content">
             
              
              @if(count($jobs) > 0)
              @foreach($jobs as $job)
              <article class="noo_job hentry">
                <div class="loop-item-wrap">
                  <div class="item-featured">
                    <a href="#">
                    <img width="50" height="50" src="/storage/cover_images/{{$job->cover_image}}" alt="Polar Design Group"/>
                    </a>
                  </div>
                  <div class="loop-item-content">
                    <h2 class="loop-item-title">
                      <a href="#">{{$job->jobtitle}}</a>
                    </h2>
                    <p class="content-meta">
                      <span class="job-company">
                        <a href="#">{{$job->companyname}}</a>
                      </span>
                      <span class="job-type contract">
                        <a href="#">
                          <i class="fa fa-bookmark"></i>{{$job->jobtype}}
                        </a>
                      </span>
                      <span class="job-location">
                        <i class="fa fa-map-marker"></i>
                        <a href="#"><em>{{$job->location}}</em></a>
                      </span>
                      <span>
                        <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                          <i class="fa fa-calendar"></i>
                          {{$job->created_at}}
                        </time>
                      </span>
                    </p>
                  </div>
                  <div class="show-view-more">
                  <a class="btn btn-primary" href="/jobform/{{$job->id}}">View more </a>
                  </div>
                </div>
              </article>
              @endforeach
              {{$jobs->links()}}
              @else
              <h2>No Job Found</h2>
              @endif
              
              
             
            </div>
            <div class="loadmore-action">
              <a href="#" class="btn btn-default btn-block btn-loadmore">Load More</a>
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
                  <input type="text" class="form-control" id="search-keyword" name="search" placeholder="keyword" value=""/>
                </div>
                <div class="form-group">
                  <label class="h5" for="search-category">Category</label>
                  <div class="advance-search-form-control">
                    <select name="jobtype" class="form-control-chosen form-control" id="search-category">
                      <option class="text-placeholder" value="">all category</option>
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
                <div class="form-group">
                  <label class="h5" for="search-type">Type</label>
                  <div class="advance-search-form-control">
                    <select name="type" class="form-control-chosen form-control" id="search-type">
                      <option class="text-placeholder" value="">all type</option>
                      <option value="Contract">Contract</option>
                      <option value="Full Time">Full Time</option>
                      <option value="Part Time">Part Time</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="h5">Salary Offer</label>
                  <div class="advance-search-form-control">
                    <select class="form-control-chosen form-control">
                      <option class="text-placeholder" value="">All Salary Offer</option>
                      <option value="0 ~ 3000">0 ~ 3000 </option>
                      <option value="3000 ~ 10.000">3000 ~ 10.000 </option>
                      <option value="10.000 ~ 20.000">10.000 ~ 20.000 </option>
                      <option value="20.000 ~ 50.000">20.000 ~ 50.000 </option>
                      <option value="50.000 ~ 100.000">50.000 ~ 100.000 </option>
                      <option value="100.000 ~">100.000 ~ </option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="h5">Experience Level</label>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="experience_level" type="radio" value="Junior"/><i></i>
                      Junior
                    </label>
                  </div>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="experience_level" type="radio" value="Senior"/><i></i>
                      Senior
                    </label>
                  </div>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="experience_level" type="radio" value="Manager"/><i></i>
                      Manager 
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="h5">Academic Degree</label>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="academic_degree" type="radio" value="associate"/><i></i>
                      Associate Degree
                    </label>
                  </div>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="academic_degree" type="radio" value="bachelor"/><i></i>
                      Bachelor's Degree
                    </label>
                  </div>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="academic_degree" type="radio" value="master"/><i></i>
                      Master’s Degree
                    </label>
                  </div>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="academic_degree" type="radio" value="doctoral"/><i></i>
                      Doctoral Degree 
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="h5">Dress Code</label>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="dress_code" type="radio" value="Indifferent"/><i></i>
                      Indifferent 
                    </label>
                  </div>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="dress_code" type="radio" value="Casual"/><i></i>
                      Casual 
                    </label>
                  </div>
                  <div class="form-control-flat">
                    <label class="radio pl-4">
                      <input name="dress_code" type="radio" value="Formal"/><i></i>
                      Formal 
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-search-submit">Search</button>
              </form>
            </div>
          </div>
        </div> 
      </div> 
    </div> 
  </div> 
  @endsection