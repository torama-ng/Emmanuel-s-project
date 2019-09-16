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
                Company Profile
            </div>
        </div> 
        <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
    </div>
    <div class="member-heading">
        <div class="container-boxed max">
            <div class="member-heading-nav">
                <ul>
                    <li><a href="employer-manage-plan.html"><i class="fa fa-file-text-o"></i> Manage Plan</a></li>
                    <li><a href="employer-manage-application.html"><i class="fa fa-newspaper-o"></i> Manage Application</a></li>
                    <li><a href="employer-manage-job.html"><i class="fa fa-file-text-o"></i> Manage Job</a></li>
                    <li class="divider"></li>
                    <li class="active"><a href="employer-company-profile.html"><i class="fa fa-users"></i> Company Profile</a></li>
                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>Sign Out
                     </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="main-content container-boxed max offset">
            <div class="row">
                <div class="noo-main col-md-12">
                    <div class="form-title">
                        <h3>Edit Company Info</h3>
                    </div>
                    <form class="form-horizontal" enctype="multipart/form-data">
                        <div class="company-profile-form">
                            <div class="form-group row">
                                <label for="company_name" class="col-sm-3 control-label">Company Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required id="company_name" value="Drupal Company"  name="company_name" placeholder="Enter your company name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_website" class="col-sm-3 control-label">Company Website</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="company_website" value="" name="company_website" placeholder="Enter your company website">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_desc" class="col-sm-3 control-label">Company Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control form-control-editor" id="company_desc"  name="company_desc" rows="8" placeholder="Enter your company description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Company Logo</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-1 noo_upload"></div>
                                        <div class="col-md-10">
                                            <input type="file" name="application_attachment" accept=".jpg,.png,.gif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Cover Image</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-1 noo_upload"></div>
                                        <div class="col-md-10">
                                            <input type="file" name="application_attachment" accept=".jpg,.png,.gif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_googleplus" class="col-sm-3 control-label">Google+</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="company_googleplus" value=""  name="company_googleplus" placeholder="http://">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_facebook" class="col-sm-3 control-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="company_facebook" value=""  name="company_facebook" placeholder="http://">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_linkedin" class="col-sm-3 control-label">LinkedIn</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="company_linkedin" value=""  name="company_linkedin" placeholder="http://">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_twitter" class="col-sm-3 control-label">Twitter</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="company_twitter" value=""  name="company_twitter" placeholder="http://">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_instagram" class="col-sm-3 control-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="company_instagram" value=""  name="company_instagram" placeholder="http://">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                             <button type="button" class="btn btn-primary">Save</button>
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
    
@endsection