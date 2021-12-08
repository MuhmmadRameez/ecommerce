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
                            <form action="{{url('verify_email')}}" method="post">
                                @csrf
                                <div class="login-form">
                                    <h4 class="login-title">Email Confirmation</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Confirmation Code</label>
                                            <input type="hidden" name="user_id" value="{{$id}}">
                                            <input class="mb-0" type="text" name="code" placeholder="Enter Confirmation Code" value="{{@old('name')}}">
                                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                         </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="register-button mt-0">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endsection