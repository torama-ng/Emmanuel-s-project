<div id="app">
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
                            <li class="nav-item">
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
       
              <nav class="navbar navbar-expand-md navbar-light bg-light ">
                    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button> --}}
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                  </nav>