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
        <nav class=" noo-user-navbar-collapse">
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
                  @if(Auth::check())
                      @if(Auth::user()->user_type === 'candidate')
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
                      @endif
                      <li class="align-left">
                        <a href="/blog">Blog</a>
                        <ul class="sub-menu">
                          <li><a href="/blog-details">Blog Detail</a></li>
                          <li><a href="member.html">Member</a></li>
                          <li><a href="packages.html">Packages</a></li>
                        </ul>
                      </li>
                      @if(Auth::user()->user_type === 'employer')
                      <li class="menu-item-post-btn">
                        <a href="/jobform/create">Post a Job</a>
                      </li>
                      @endif
                @endif
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
        
      </div>  
    </div>  
  </div>
</header>