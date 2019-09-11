{{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container nav">
                <a class="navbar-brand " href="{{ url('/') }}"style="font-size:50px; font-weight:400;  
                color: rgb(100, 120, 115); line-height:20px; 
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; left-padding:-3px;" >
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link account" href="{{ route('register') }}"  style="border:1px solid gray;">Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="/jobform">Employers <br>Post jobs & find talents</a>
                        </li>
                    @endif  --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="font-size:18px;">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"  style=" border: 1px solid gray;
                                    border-radius: 50px;
                                    background-color: gray;
                                    font-size:18px;">Sign-Up</a>
                                </li>
                                <li class="nav-item">
                                        <a href="/jobform" style="padding-left:30px;">Employers
                                        <br>
                                                Post jobs & find talent
                                    </a>
                                    </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
       
              <nav class="navbar navbar-expand-md navbar-light bg-light "> --}}
                    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button> --}}
                  
                    {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown ">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Find Jobs
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown slide" style="padding-left:30px;">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Career Resources
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </li>
                              <li class="nav-item active " style="padding-left:30px;">
                                    <a class="nav-link" href="#">Company Profiles <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item " style="padding-left:30px;">
                                    <a class="nav-link" href="#">Salary</a>
                                  </li>
                                  <li class="nav-item " style="padding-left:30px;">
                                        <a class="nav-link resume" href="#"
                                        style=" border: 1px solid gray;
                                        border-radius: 50px;
                                        background-color: gray;"
                                        >Upload Resume</a>
                                      </li>
                       
                      </ul>
                     
                    </div>
                  </nav> --}} 



                  {{-- <div class="site"> --}}
                      <header class="noo-header" id="noo-header">
                        <div class="navbar-wrapper">
                          <div class="navbar navbar-default fixed-top shrinkable">
                            <div class="container-boxed max">
                              <div class="navbar-header">
                                <h1 class="sr-only">JobMonster</h1> 
                                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-navbar-collapse">
                                  <span class="sr-only">Navigation</span>
                                  <i class="fa fa-bars"></i>
                                </a>
                                <a class="navbar-toggle member-navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-user-navbar-collapse">
                                  <i class="fa fa-user"></i>
                                </a>
                                <a href="./" class="navbar-brand">
                                  <img class="noo-logo-img noo-logo-normal" src="/images/logo-jobmonster.png" alt="logo">
                                  <img class="noo-logo-mobile-img noo-logo-normal" src="images/logo-mobile.png" alt="">
                                </a>
                              </div>  
                              <nav class="collapse navbar-collapse noo-user-navbar-collapse">
                                <ul class="navbar-nav sf-menu">
                                    @guest
                                    @if (Route::has('login'))
                                        <li class="align-left">
                                               
                                            <a  href="{{ route('login') }}"><i class="fa fa-sign-in"></i>{{ __('Login') }}</a>
                                        </li>
                                        @endif
                                        @if (Route::has('register'))
                                            <li class="align-left">
                                                <a  href="{{ route('register') }}"><i class="fa fa-key"></i>{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                    <li class="align-right">
                                        <a id="navbarDropdown" class="align-left" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          <i class="fa fa-user"> {{ Auth::user()->name }}</i> <span class="caret"></span>
                                        </a>
                                       
                                         <div class="dropdown-menu  align-right" aria-labelledby="navbarDropdown"> 
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div> 
                  
                                    </li>
                                @endguest
                                </ul>
                              </nav>
                              <nav class="collapse navbar-collapse noo-navbar-collapse">
                                <ul class="navbar-nav sf-menu">
                                  <li class="current-menu-item align-left">
                                    <a href="/">Home</a>
                                    <ul class="sub-menu">
                                      <li><a href="/home">Home Resume</a></li>
                                      <li><a href="/home-2">Home Ver.2</a></li>
                                      <li><a href="/map">Home Search Map</a></li>
                                    </ul>
                                  </li>
                                  <li class="align-left">
                                    <a href="/jobform">Jobs</a>
                                    <ul class="sub-menu">
                                      <li><a href="jobs-fullwidth.html">Jobs Fullwidth</a></li>
                                      <li><a href="jobs-detail.html">Jobs Detail</a></li>
                                      {{-- <li><a href="post-a-job-step-1.html">Post a job - Step 1</a></li>
                                      <li><a href="post-a-job-step-2.html">Post a job - Step 2</a></li>
                                      <li><a href="post-a-job-step-3.html">Post a job - Step 3</a></li>
                                      <li><a href="post-a-job-step-4.html">Post a job - Step 4</a></li> --}}
                                    </ul>
                                  </li>
                                  <li class="align-left">
                                    <a href="/company">Companies</a>
                                    <ul class="sub-menu">
                                      <li><a href="/company-details">Company Detail</a></li>
                                    </ul>
                                  </li>
                                  @can('isCandidate')
                                  <li class="align-left">
                                    <a href="resume.html">Resumes</a>
                                    <ul class="sub-menu">
                                      <li><a href="resume-detail.html">Resume Detail</a></li>
                                      <li><a href="post-a-resume-step-1.html">Post a resume - Step 1</a></li>
                                      <li><a href="post-a-resume-step-2.html">Post a resume - Step 2</a></li>
                                      <li><a href="post-a-resume-step-3.html">Post a resume - Step 3</a></li>
                                      <li><a href="post-a-resume-step-4.html">Post a resume - Step 4</a></li>
                                    </ul>
                                  </li>
                                  @endcan
                                  <li class="align-left">
                                    <a href="/blog">Blog</a>
                                    <ul class="sub-menu">
                                      <li><a href="/blog-details">Blog Detail</a></li>
                                      <li><a href="member.html">Member</a></li>
                                      <li><a href="packages.html">Packages</a></li>
                                    </ul>
                                  </li>
                                  @can('isEmployer')
                                  <li class="menu-item-post-btn">
                                    <a href="/jobform/create">Post a Job</a>
                                  </li>
                                  @endcan
                                  @guest
                                  @if (Route::has('login'))
                                      <li class="align-left">
                                             
                                          <a  href="{{ route('login') }}"><i class="fa fa-sign-in"></i>{{ __('Login') }}</a>
                                      </li>
                                      @endif
                                      @if (Route::has('register'))
                                          <li class="align-left">
                                              <a  href="{{ route('register') }}"><i class="fa fa-key"></i>{{ __('Register') }}</a>
                                          </li>
                                      @endif
                                  @else
                                  <li class="align-right">
                                      <a id="navbarDropdown" class="align-left" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fa fa-user"> {{ Auth::user()->name }}</i> <span class="caret"></span>
                                      </a>
                                     
                                       <div class="dropdown-menu  align-right" aria-labelledby="navbarDropdown"> 
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>
      
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>
                                      </div> 
                
                                  </li>
                              @endguest
                                </ul>
                              </nav>  
                            </div>  
                          </div>  
                        </div>
                      </header>