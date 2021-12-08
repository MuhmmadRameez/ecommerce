 @extends('front_end.master')
 @section('content')
 <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Complete Profile</li>
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
                            <form action="{{url('save_information')}}" method="post">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        Account creataed successfully
                                    </div>
                                @endif
                                @csrf
                                <div class="login-form">
                                    <h4 class="login-title">Complete Your Profile</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Contact#</label>
                                            <input type="hidden" name="user_id" value="{{$id}}">
                                            <input class="mb-0" type="text" name="mobile" placeholder="Contact #" value="{{@old('mobile')}}">
                                            
                                            <span class="text-danger">@error('mobile') {{$message}}  @enderror</span>
                                            
                                         </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Secondary Contact</label>
                                            <input class="mb-0" value="{{@old('seconadary_mobile')}}" type="text" name="seconadary_mobile" placeholder="Secondary Mobile">
                                           <span class="text-danger">
                                            @error('secondary_mobile') {{$message}}  @enderror
                                           </span>
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Address</label>
                                           <textarea class="form-control" value="{{@old('address')}}" name="address" placeholder="Enter Your Complete Address"></textarea>
                                           <span class="text-danger">
                                           @error('address') {{$message}}  @enderror
                                           </span>

                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Shipping/Billing Address</label>
                                             <textarea class="form-control" value="{{@old('billing_address')}}" name="billing_address" placeholder="Billing Address"></textarea>
                                             <span class="text-danger">
                                             @error('billing_address') {{$message}}  @enderror
                                             </span>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Person Name</label>
                                            <input class="mb-0" type="text" value="{{@old('person_name')}}" name="person_name" placeholder="Contact Person">
                                            <span class="text-danger">
                                            @error('person_name') {{$message}}  @enderror
                                            </span>
                                        </div>

                                         <div class="col-md-6 mb-20">
                                            <label>Contact</label>
                                            <input class="mb-0" type="text" value="{{@old('contact')}}" name="contact" placeholder="Contact Number">
                                            <span class="text-danger">
                                            @error('contact') {{$message}}  @enderror
                                            </span>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="register-button mt-0">Save Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endsection