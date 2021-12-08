 @extends('front_end.master')
 @section('content')
 <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Store Registration</li>
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
                            <form action="{{url('seller-registration')}}" method="post">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        Account created Successfully
                                    </div>
                                @endif
                                @csrf
                                <div class="login-form">
                                    <h4 class="login-title">Store Registration</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Store Name</label>
                                            <input class="mb-0" type="text" name="store_name" placeholder="Store Name" value="{{@old('store_name')}}">
                                            <span class="text-danger">@error('store_name') {{$message}} @enderror</span>
                                         </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Contact #</label>
                                            <input class="mb-0" value="{{@old('contact')}}" type="text" name="contact" placeholder="Contact">
                                            <span class="text-danger">@error('contact') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Address*</label>
                                           <textarea class="form-control" placeholder="Address" style="resize:none" name="address" value="{{@old('address')}}"></textarea>
                                            <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Email</label>
                                            <input class="mb-0" type="email" name="email" placeholder="Enter Email" value="{{@old('email')}}">
                                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" name="password" placeholder="Confirm Password">
                                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
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