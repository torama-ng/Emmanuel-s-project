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
							<li><a href="candidate-manage-application.html"><i class="fa fa-newspaper-o"></i> Manage Application</a></li>
							<li><a href="candidate-bookmark-job.html"><i class="fa fa-heart"></i> Bookmarked Jobs</a></li>
							<li><a href="candidate-job-alert.html"><i class="fa fa-bell-o"></i> Job Alerts</a></li>
							<li class="divider" role="presentation"></li>
							<li class="active"><a href="candidate-my-profile.html"><i class="fa fa-user"></i> My Profile</a></li>
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
			<div class="container-wrap">
				<div class="main-content container-boxed max offset">
					<div class="row">
						<div class="noo-main col-md-12">
							<div class="form-title">
								<h3>Change Profile</h3>
							</div>
							<form class="form-horizontal" enctype="multipart/form-data">
								<div class="candidate-profile-form row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name" class="col-sm-4 control-label">Full Name</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" required id="name" value="Jane Doe" name="name" placeholder="Your name">
										    </div>
										</div>
										<div class="form-group">
											<label for="profile-email" class="col-sm-4 control-label">Email</label>
											<div class="col-sm-8">
										    	<input type="email" class="form-control" required id="profile-email" value="email@domain.com" name="email" placeholder="Your email">
										    </div>
										</div>
										<div class="form-group">
											<label for="current_job" class="col-sm-4 control-label">Current Job</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="current_job" value="Web Designer / Developer" name="current_job">
										    </div>
										</div>
										<div class="form-group">
											<label for="current_company" class="col-sm-4 control-label">Current Company</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="current_company" value="Wild West Company" name="current_company">
										    </div>
										</div>
										<div class="form-group">
											<label for="birthday" class="col-sm-4 control-label">Birthday</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="birthday" value="1989-01-25" name="birthday">
										    </div>
										</div>
										<div class="form-group">
											<label for="address" class="col-sm-4 control-label">Address</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="address" value="Los Angeles, United States" name="address">
										    </div>
										</div>
										<div class="form-group">
											<label for="phone" class="col-sm-4 control-label">Phone Number</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="phone" value="0968.584.396" name="phone">
										    </div>
										</div>
										<div class="form-group">
											<label for="facebook" class="col-sm-4 control-label">Facebook</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="facebook" value="facebook.com"  name="facebook" placeholder="http://">
										    </div>
										</div>
										<div class="form-group">
											<label for="twitter" class="col-sm-4 control-label">Twitter</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="twitter" value=""  name="twitter" placeholder="http://">
										    </div>
										</div>
										<div class="form-group">
											<label for="linkedin" class="col-sm-4 control-label">LinkedIn</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="linkedin" value=""  name="linkedin" placeholder="http://">
										    </div>
										</div>
										<div class="form-group">
											<label for="behance" class="col-sm-4 control-label">Behance</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="behance" value=""  name="behance" placeholder="http://">
										    </div>
										</div>
										<div class="form-group">
											<label for="instagram" class="col-sm-4 control-label">Instagram</label>
											<div class="col-sm-8">
										    	<input type="text" class="form-control" id="instagram" value=""  name="instagram" placeholder="http://">
										    </div>
										</div>

									</div>
									<div class="col-sm-6">
										<div class="form-group">
										    <label for="description" class="control-label">Instroduce Yourself <small>(Optional)</small></label>
										    <textarea class="form-control" id="description" name="description" rows="8">
										    	Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.&nbsp;Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.Donec et massa malesuada, laoreet lacus non, lacinia felis. Phasellus pretium enim tellus, et aliquet mi fringilla non. Aenean lorem libero, adipiscing.
										    </textarea>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Profile Image</label>
											<div class="col-sm-9">
												<div class="col-md-1 noo_upload"></div>
												<div class="col-md-10">
													<input type="file" name="application_attachment" accept=".jpg,.png,.gif">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-primary">Save My Profile</button>
								</div>
							</form>
							<hr/>
							<div class="form-title">
								<h3>Change Password</h3>
							</div>
							<form class="form-horizontal">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label for="old_pass" class="col-sm-3 control-label">Current Password</label>
											<div class="col-sm-9">
										    	<input type="password" class="form-control" required id="old_pass" value="" name="old_pass">
										    </div>
										</div>
										<div class="form-group">
											<label for="new_pass" class="col-sm-3 control-label">New Password</label>
											<div class="col-sm-9">
										    	<input type="password" class="form-control" required id="new_pass" value="" name="new_pass">
										    </div>
										</div>
										<div class="form-group">
											<label for="new_pass_confirm" class="col-sm-3 control-label">Confirm new password</label>
											<div class="col-sm-9">
										    	<input type="password" class="form-control" required id="new_pass_confirm" value="" name="new_pass_confirm">
										    </div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Save New Password</button>
								</div>
							</form>
							<hr/>
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
@endsection