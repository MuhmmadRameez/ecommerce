 @extends('front_end.master')
 @section('content')
 <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Confirmation</li>
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
                           <div class="alert alert-success text-center">Your Account has been verify click <a href="{{url('sign-in')}}">Login</a> and Complete your profile</div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection