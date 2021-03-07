@extends('layouts.dashboard.designe')

@section('content')

           <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Users</h4>
                        <div class="ml-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a>Users</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->






                         





             <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                       
                      
                        <div class="card row my-2">
                            <div class="card-body col-12">
                                <div class="card-title">
                        <!-- flash message -->

                        <div class="container ">
                            <div class="row ">
                                <div class="col-md-12 mx-auto ">
                                    
                                        @include('partials.alerts')
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end flash message -->

                                </div>
                                <div class="table-responsive">
                                    <table id="users-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>UserName</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Contact</th>

                                                <th>Role</th>

                                                <th>Actions</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                            
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->firstname }}</td>
                                                <td>{{ $user->lastname }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->gender }}</td>
                                                <td>{{ $user->contact }}</td>
                                                <td>{{ $user->role }}</td>

                                                <td>
                                                    
                                                    <a href="{{ route('users.edit',['user'=>$user->id]) }}" class="btn btn-outline-warning  "><i
                                                        class="fas fa-edit"></i></a>
                                                    <div class="btn btn-outline-danger  my-1"><i
                                                        class="fas fa-trash-alt"></i></div>

                                                </td>

                                            </tr>
                                            @endforeach
                                          
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>UserName</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Contact</th>
                                                <th>Role</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                   
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            
 @endsection
