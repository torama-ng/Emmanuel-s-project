@extends('layouts.app')
@section('content')
	

			<div class="noo-page-heading">
				<div class="container-boxed max text-center parallax-content">
					<div class="member-heading-avatar">
						<img alt='' src='images/avatar/user_100x100.jpg' height='100' width='100'/>
					</div>
					<div class="page-heading-info ">
						<h1 class="page-title">Member</h1>
					</div>
					<div class="page-sub-heading-info">
						My Profile
					</div>
				</div> 
				<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
			</div>
			<div class="member-heading">
				<div class="container-boxed max">
					<div class="member-heading-nav">
						<ul>
							<li><a href="candidate-manage-resume.html"><i class="fa fa-file-text-o"></i> Manage Resume</a></li>
							<li><a href="candidate-bookmark-job.html"><i class="fa fa-heart"></i> Bookmarked Jobs</a></li>
							<li class="divider" role="presentation"></li>
							<li class="active"><a href="/Candidate"><i class="fa fa-user"></i> My Profile</a></li>
							<li> <a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
											  document.getElementById('logout-form').submit();">
								<i class="fa fa-sign-out"></i>Sign Out
							 </a>
							</li>
							
							 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								 @csrf
							 </form>
						</ul>
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