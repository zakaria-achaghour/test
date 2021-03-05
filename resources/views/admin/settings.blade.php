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
                <div class="card">
                    <div class="card-body ">
                        
                        <h6 class="card-subtitle"></h6>
                        <form id="account-form" action="{{ route('profile_edit') }}" class="m-t-40">
                            @csrf
                            @method('PATCH')
                            
                                <section>
                                    <label for="userName">User name *</label>
                                    <input id="userName" name="userName" type="text"value="{{ $user->name }}" class="form-control" required >
                                    <label for="current_password">Current Password *</label>
                                    <span id="pwdchk"></span>
                                    <input id="current_password" name="current_password" type="password" class="required form-control">
                                    
                                    <label for="new_password">New Password *</label>
                                    <input id="new_password" name="new_password" type="password" class="required form-control">
                                    <label for="confirm_password">Confirm Password *</label>
                                    <input id="confirm_password" name="confirm_password" type="password" class="required form-control">
                                   
                                </section>
                                
                                <section>
                                    <label for="firstname">First name *</label>
                                    <input id="firstname" name="firstname" type="text" value="{{ $user->firstname }}" class="form-control" required >
                                    <label for="lastname">Last name *</label>
                                    <input id="lastname" name="lastname" type="text" value="{{ $user->lastname }}" class="form-control" required >
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="text" value="{{ $user->email }}" class="required email form-control">
                                    
                                   
                                </section>
                               
                        
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
    
 @endsection

   