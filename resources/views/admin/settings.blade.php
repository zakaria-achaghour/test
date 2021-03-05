@extends('layouts.admin.designe')

@section('content')

           <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Settings Profile</h4>
                       
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->


              <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="card row">
                    <div class="card-body col-md-8 mx-auto">
                        
                        <h6 class="card-subtitle"></h6>
                        <form id="account-form" action="{{ route('profile_edit') }}" class="m-t-40">
                            @csrf
                           @method('PATCH')
                               
                           <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">First name *</label>
                                <input id="firstname" name="firstname" type="text" value="{{ $user->firstname }}" autocomplete="false" class="form-control" required >
                            </div>
                            <div class="col-md-6">
                                <label for="lastname">Last name *</label>
                              <input id="lastname" name="lastname" type="text" value="{{ $user->lastname }}" autocomplete="false" class="form-control" required >
                             </div>

                        </div>
                           <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email', $user->email ?? null) }}" 
                                    placeholder="example@example.com" autocomplete="false" required>
                         
                                      </div>
                                </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="text" value="{{ $user->email }}"autocomplete="false" class="required email form-control">
                                    
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="current_password">Current Password *</label>
                                    <span id="pwdchk"></span>
                                    <input id="current_password" name="current_password" type="password" class="required form-control">
                                    
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="new_password">New Password *</label>
                                    <input id="new_password" name="new_password" type="password" class="required form-control">
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password *</label>
                                            <input id="confirm_password" name="confirm_password" type="password" class="required form-control">
                                           
                                        </div>
                                    </div>
                                </div>
                                     
                                   
                              
                                   
                                
                               
                        
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <button type="submit" class="btn btn-warning btn-sm mt-1" style="width: 100%">Mettre à jour</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mt-1">
                                        <a href="" class="btn btn-danger btn-sm" style="width: 100%">Retour</a>
                                    </div>
                                   
                                </div>
                           

                        </form>
                    </div>
                </div>
          
            <!--<div class="card">
                <form id="account-form" action="{ route('profile_edit') }}" class="form-horizontal">

                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Personal Info</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="First Name Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="lname" placeholder="Password Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Company</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email1" placeholder="Company Name Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                            <div class="col-sm-9">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>-->

 @endsection

   