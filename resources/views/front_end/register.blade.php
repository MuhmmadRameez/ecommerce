 @extends('front_end.master')
 @section('content')
 <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div style="margin:auto" class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="{{url('signup')}}" method="post">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        Account creataed successfully
                                    </div>
                                @endif
                                @csrf
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name</label>
                                            <input class="mb-0" type="text" name="name" placeholder="First Name" value="{{@old('name')}}">
                                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                         </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name</label>
                                            <input class="mb-0" value="{{@old('lastname')}}" type="text" name="lastname" placeholder="Last Name">
                                            <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" type="email" value="{{@old('email')}}" name="email" placeholder="Email Address">
                                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" name="password" placeholder="Password">
                                            <span class="text-danger">@error('passowrd') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Confirm Password</label>
                                            <input class="mb-0" type="password" name="re_password" placeholder="Confirm Password">
                                            <span class="text-danger">@error('c_pass') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="register-button mt-0">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endsection