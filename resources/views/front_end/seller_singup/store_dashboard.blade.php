@extends('front_end.master')
@section('content')
<style>
   .card {
   box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
   }
   .card {
   position: relative;
   display: flex;
   flex-direction: column;
   min-width: 0;
   word-wrap: break-word;
   background-color: #fff;
   background-clip: border-box;
   border: 0 solid rgba(0,0,0,.125);
   border-radius: .25rem;
   }
   .card-body {
   flex: 1 1 auto;
   min-height: 1px;
   padding: 1rem;
   }
   .gutters-sm {
   margin-right: -8px;
   margin-left: -8px;
   }
   .gutters-sm>.col, .gutters-sm>[class*=col-] {
   padding-right: 8px;
   padding-left: 8px;
   }
   .mb-3, .my-3 {
   margin-bottom: 1rem!important;
   }
   .bg-gray-300 {
   background-color: #e2e8f0;
   }
   .h-100 {
   height: 100%!important;
   }
   .shadow-none {
   box-shadow: none!important;
   }
</style>
<div class="breadcrumb-area">
   <div class="container">
      <div class="breadcrumb-content">
         <ul>
            <li><a href="index.html">Home</a></li>
            <li class="active">Dashboard</li>
         </ul>
      </div>
   </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
   <div class="container">
      <div class="row">
         <div class="container">
            <div class="main-body">
               <!-- Breadcrumb -->
               <nav aria-label="breadcrumb" class="main-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                     <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                  </ol>
               </nav>
               
            <div class="alert alert-warning text-center">Complete Your Profile <a href="#"> Click Here</a></div>
         
               <!-- /Breadcrumb -->
               <div class="row gutters-sm">
                  <div class="col-md-4 mb-3">
                     <div class="card">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center text-center">
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                              <div class="mt-3">
                                 <h4>{{Session::get('name')}}</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                             <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><a href="#">Store Manage</a></h6>
                              <i class="fa fa-wallet"></i>
                           </li>

                           <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><a href="#">Complains</a></h6>
                              <i class="fa fa-wallet"></i>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><a href="#">Customer Messages</a></h6>
                              <i class="fa fa-wallet"></i>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><a href="#">Cancel Order</a></h6>
                              <i class="fa fa-wallet"></i>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><a href="#">Payments</a></h6>
                              <i class="fa fa-wallet"></i>
                           </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><a href="#">Ready For Shippment</a></h6>
                              <i class="fa fa-wallet"></i>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="row">
                          <div class="col-md-4"><p>Firstname </p></div>
                          <div class="col-md-8"></div>
                          <div class="col-md-4"><p>Lastname</p></div>  
                          <div class="col-md-8"></div>
                          <div class="col-md-4"><p>Email</p></div>
                          <div class="col-md-8"></div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="row">
                          <div class="col-md-4"><p>Firstname </p></div>
                          <div class="col-md-8"></div>
                          <div class="col-md-4"><p>Lastname</p></div>  
                          <div class="col-md-8"></div>
                          <div class="col-md-4"><p>Email</p></div>
                          <div class="col-md-8"></div>
                     </div>
                  </div>


                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
