<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>Find my Doctor</title>
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Font Awesome icons (free version)-->
   <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
   <!-- Core theme CSS (includes Bootstrap)-->
   <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <style>
      .btn-next i {
         position: relative;
         top: 3px;
      }
      a.btn-next {
         color: #fff;
         background-color: #e52b2a;
         border-color: #e52b2a;
         text-decoration: none;
         height: 45px;
         display: block;
         padding: 7px;
         font-size: 18px;
         border-radius: 7px;
         margin: 0px auto;
      }
      .nxt-sc {
         padding-top: 55px;
         display: flex;
         align-items: center;
         justify-content: space-evenly;
         width: 30%;
         margin: 0px auto;
      }
      .plans {
         align-items: center;
         justify-content: center;
      }
      .inr{
         text-align: justify;
      }
   </style>
</head>
	<body id="page-top">
      <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="{{ asset('frontend/assets/img/in1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="{{ asset('frontend/assets/img/in2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="{{ asset('frontend/assets/img/in3.jpg') }}" class="d-block w-100" alt="...">
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div> -->
		<header class="masthead"></header>
		<section class="tabs-sc">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="inr">
   						Welcome to Insure Karo, an unprecedented Marketplace for Overseas Pakistanis. Whether you are looking for coverage for your parents or your spouse and children, we have a product to help you keep your family safe and secure.
						</p>
						<p class="inr">
                     Our state-of-the-art product offers coverage that includes Hospitalization Enhancement, Pre-Existing Medical Coverage, Hepatitis B & C Coverage, Specialist Investigation for Outpatients and much more.
						</p>
					</div>
				</div>
            <div class="row">
               <div class="col-lg-12">
                  <h2 style="padding-top: 15px;">What is Health Insurance?</h2>
                  <div class="row">
                     <div class="col-sm-8">
                        <p class="inr">
                           Health insurance is protection against unforeseen health risks. Policy holders and their beneficiaries are entitled to claim medical expenditures if they have an accident, fall ill or require hospitalization*. Policy holders are required to pay periodic or one time payments which are referred to as premiums, and receive coverage limits that can be claimed from the insurer if and when they require
                        </p>
                     </div>
                     <div class="col-sm-4">
                        <img src="{{ asset('frontend/assets/img/in1.jpg') }}" style="width: 100%;">
                     </div>
                  </div>
                  
                  <h2 style="padding-top: 15px;">Benefits of health insurance :</h2>
                  <div class="row">
                     <div class="col-sm-4">
                        <img src="{{ asset('frontend/assets/img/in2.jpg') }}" style="width: 100%;">
                     </div>
                     <div class="col-sm-8">
                        <p class="inr">
                           Managing medical expenditures during rising inflation can be financially exhausting. Find My Doctor is here to help! You can now protect your family from unforeseen risks without taking on insurmountable financial burden through our state-of-the-art insurance policies.
                        </p>
                     </div>
                  </div>
                  <p class="inr">
                  </p>
                  <h2 style="padding-top: 15px;">Why choose Insure Karo :</h2>
                  <div class="row">
                     <div class="col-sm-8">
                        <p class="inr">
                           Our state-of-the-art product offers coverage that includes Hospitalization Enhancement, Pre-Existing conditions as well which is something that the other insurance companies don’t offer. Besides these the customers also get discounts on lab tests from our application as well free doctor consultations from time to time. Insure Karo, phir chill karo!
                        </p>
                     </div>
                     <div class="col-sm-4">
                        <img src="{{ asset('frontend/assets/img/in3.jpg') }}" style="width: 100%;">
                     </div>
                  </div>
               </div>
            </div>
			</div>
		</section>
      <section class="tabs-area">
         <div class="tbsc">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-plan-tab" data-bs-toggle="pill" data-bs-target="#pills-plan" type="button" role="tab" aria-controls="pills-plan" aria-selected="false">Step 1<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-account-info-tab" data-bs-toggle="pill" data-bs-target="#pills-account-info" type="button" role="tab" aria-controls="pills-account-info" aria-selected="false">Step 2<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-insurance-type-tab" data-bs-toggle="pill" data-bs-target="#pills-insurance-type" type="button" role="tab" aria-controls="pills-insurance-type" aria-selected="true">Step 3<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-insurance-company-tab" data-bs-toggle="pill" data-bs-target="#pills-insurance-company" type="button" role="tab" aria-controls="pills-insurance-company" aria-selected="false">Step 4<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-account-beneficiary-tab" data-bs-toggle="pill" data-bs-target="#pills-account-beneficiary" type="button" role="tab" aria-controls="pills-account-beneficiary" aria-selected="false">Step 5<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-document-tab" data-bs-toggle="pill" data-bs-target="#pills-document" type="button" role="tab" aria-controls="pills-document" aria-selected="false">Step 6<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-confirmation-tab" data-bs-toggle="pill" data-bs-target="#pills-confirmation" type="button" role="tab" aria-controls="pills-confirmation" aria-selected="false">Step 7<i class="ri-arrow-right-s-line"></i></button>
               </li>
            </ul>
         </div>
         <div class="container">
            <form method="POST" action="{{ url('account/store') }}" enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-lg-12">
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-plan" role="tabpanel" aria-labelledby="pills-plan-tab">
                              <div class="crd-box">
                                    <div class="tb-hd">
                                       <h3>Please select your preferred plan:</h3>
                                       <div class="br-line"></div>
                                    </div>
                                    <div class="row justify-content-center">
                                       @foreach(get_list('plan_categories') as $key => $plan_category)
                                       <div class="col-md-2">
                                          <div class="button-bx">
                                                <input type="radio" class="btn-check" id="btncheckPC{{ $key }}" autocomplete="off" value="{{ $plan_category->id }}" data-relation="{{ $plan_category->relation }}" name="plan" @if($key == 0) checked @endif onchange="change_plan({{ $plan_category->id }}, '{{ $plan_category->relation }}')">
                                                <label class="btn btn-cstm add" for="btncheckPC{{ $key }}">
                                                   <img src="{{ asset('storage/'.$plan_category->image) }}">
                                                   <h3>{{ $plan_category->name }}</h3>
                                                </label>
                                          </div>
                                       </div>
                                       @endforeach                                        
                                       <div class="col-md-12 mt-5">
                                          @foreach(get_list('plan_categories') as $key => $plan_category)
                                          <div class="list-box" id="plan_detail{{ $plan_category->id }}" style="display: @if($key == 0)  inherit;@else none; @endif">
                                                <div class="mb-5">
                                                   <h1 class="text-center">{{ $plan_category->name }}</h1>
                                                </div>
                                                <div class="row nowrap">
                                                   <div class="col-md-12">
                                                      <div class="side-2">
                                                            <div class="plans row">
                                                               @foreach(get_list('plans', null, null, ['plans.plan_category_id' => $plan_category->id]) as $plan_key => $plan)
                                                               <div class="plan_box col-md-3">
                                                                  <div class="pl-hd">
                                                                        <h1>{{ $plan->name }}</h1>
                                                                        <h3>Rs. {{ number_format($plan->amount,2) }}</h3>
                                                                  </div>
                                                                  <div class="pl-cnt">
                                                                        <ul class="">
                                                                           @foreach(get_list('benefits', 'plan_benefits', ['plan_benefits.benefit_id' => 'benefits.id'], ['plan_benefits.plan_id' => $plan->id]) as $benefit_key => $benefit)
                                                                           <li>{{ $benefit->name }}</li>
                                                                           @endforeach
                                                                        </ul>
                                                                        <div class="">
                                                                           <input type="radio" class="btn-check" id="plan_{{ $plan->id }}" amount="{{ $plan->amount }}" value="{{ $plan->id }}" onchange="changeAmt()" autocomplete="off" name="plan" @if($plan_key == 0) checked @endif>
                                                                           <label class="btn btn-next btn btn-primary" for="plan_{{ $plan->id }}">
                                                                           Select
                                                                           </label>
                                                                        </div>
                                                                  </div>
                                                               </div>
                                                               @endforeach
                                                            </div>
                                                      </div>
                                                   </div>
                                                </div>
                                          </div>
                                          @endforeach
                                       </div>
                                       <div class="col-md-12">
                                          <div class="text-center nxt-sc">
                                             <a href="javascript:;" class="btn-next" onclick="change_tab('pills-account-info-tab')">Next <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-account-info" role="tabpanel" aria-labelledby="pills-account-info-tab">
                              <div class="crd-box">
                                    <div class="tb-hd">
                                       <h3>Please enter your details:</h3>
                                       <div class="br-line"></div>
                                    </div>
                                    <div class="form-sc">
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Full Name:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="full_name" class="form-control @error('full_name')is-invalid @enderror" value="{{ old('full_name') }}">
                                                @error('full_name')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3" hidden>
                                          <div class="col-2">
                                                <label>CNIC Number:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="cnic" class="form-control @error('cnic')is-invalid @enderror" value="4210112345678">
                                                @error('cnic')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Mobile Number:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="phone_number" class="form-control @error('phone_number')is-invalid @enderror" value="{{ old('phone_number') }}">
                                                @error('phone_number')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Email Address:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="email" class="form-control @error('email')is-invalid @enderror" value="{{ old('email') }}">
                                                @error('email')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="col-12 text-center">
                                          <div class="text-center nxt-sc">
                                                <a href="javascript:;" class="btn-next" onclick="change_tab('pills-plan-tab')"><i class="ri-arrow-left-line"></i> Back</a>
                                                <a href="javascript:;" class="btn-next" onclick="change_tab('pills-insurance-type-tab')">Next <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-insurance-type" role="tabpanel" aria-labelledby="pills-insurance-type-tab">
                              <div class="tb-hd">
                                    <h3>
                                       Please select your insurance type below:
                                    </h3>
                                    <div class="br-line"></div>
                              </div>
                              <div class="row justify-content-center">
                                    @foreach(get_list('insurance_types') as $key => $insurance_type)
                                    <div class="col-md-2">
                                       <div class="button-bx">
                                          <input type="radio" class="btn-check" id="btncheckB{{ $key }}" name="insurance_type" value="{{ $insurance_type->id }}" autocomplete="off" @if($key == 0) checked @endif>
                                          <label class="btn btn-cstm" for="btncheckB{{ $key }}">
                                          <img src="{{ asset('storage/'.$insurance_type->image) }}">
                                          </label>
                                       </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-12">
                                       <div class="text-center nxt-sc">
                                             <a href="javascript:;" class="btn-next" onclick="change_tab('pills-account-info-tab')"><i class="ri-arrow-left-line"></i> Back</a>
                                             <a href="javascript:;" class="btn-next" onclick="change_tab('pills-insurance-company-tab')">Next <i class="ri-arrow-right-line"></i></a>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-insurance-company" role="tabpanel" aria-labelledby="pills-insurance-company-tab">
                              <div class="tb-hd">
                                    <h3>Lets begin your journey towards better health coverage.<br/>
                                       Please select your preferred insurance partner:
                                    </h3>
                                    <div class="br-line"></div>
                              </div>
                              <div class="row justify-content-center">
                                    @foreach(get_list('insurances') as $key => $insurance)
                                    <div class="col-md-2">
                                       <div class="button-bx">
                                          <input type="radio" class="btn-check" id="btncheckI{{ $key }}" value="{{ $insurance->id }}"  name="insurance" autocomplete="off" @if($key == 0) checked @endif>
                                          <label class="btn  btn-cstm" for="btncheckI{{ $key }}">
                                          <img src="{{ asset('storage/'.$insurance->image) }}">
                                          </label>
                                       </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-12">
                                       <div class="text-center nxt-sc">
                                          <a href="javascript:;" class="btn-next" onclick="change_tab('pills-insurance-type-tab')"><i class="ri-arrow-left-line"></i> Back</a>
                                          <a href="javascript:;" class="btn-next" onclick="change_tab('pills-account-beneficiary-tab')">Next <i class="ri-arrow-right-line"></i></a>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-account-beneficiary" role="tabpanel" aria-labelledby="pills-account-beneficiary-tab">
                              <div class="crd-box">
                                    <div class="form-sc">
                                       <div class="tb-hd mt-5">
                                          <h3>Please enter your 1st Beneficiary details:</h3>
                                          <div class="br-line "></div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Full Name:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="b1_full_name" class="form-control @error('b1_full_name')is-invalid @enderror" value="{{ old('b1_full_name') }}">
                                                @error('b1_full_name')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Date of Birth:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="date" name="b1_dob" class="form-control @error('b1_dob')is-invalid @enderror" value="{{ old('b1_dob') }}">
                                                @error('b1_dob')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Relation:</label>
                                          </div>
                                          <div class="col-10">
                                                <select name="b1_relation" class="form-control relation @error('b1_relation')is-invalid @enderror"></select>
                                                @error('b1_relation')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>CNIC Number:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="b1_cnic" class="form-control @error('b1_cnic')is-invalid @enderror" value="{{ old('b1_cnic') }}">
                                                @error('b1_cnic')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Address:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="b1_address" class="form-control @error('b1_address')is-invalid @enderror" value="{{ old('b1_address') }}">
                                                @error('b1_address')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="tb-hd mt-5">
                                          <h3>Please enter your 2nd Beneficiary details:</h3>
                                          <div class="br-line "></div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Full Name:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="b2_full_name" class="form-control @error('b2_full_name')is-invalid @enderror" value="{{ old('b2_full_name') }}">
                                                @error('b2_full_name')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Date of Birth:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="date" name="b2_dob" class="form-control @error('b2_dob')is-invalid @enderror" value="{{ old('b2_dob') }}">
                                                @error('b2_dob')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Relation:</label>
                                          </div>
                                          <div class="col-10">
                                                <select name="b2_relation" class="form-control relation_1 @error('b2_relation')is-invalid @enderror"></select>
                                                @error('b2_relation')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>CNIC Number:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="b2_cnic" class="form-control @error('b2_cnic')is-invalid @enderror" value="{{ old('b2_cnic') }}">
                                                @error('b2_cnic')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                                <label>Address:</label>
                                          </div>
                                          <div class="col-10">
                                                <input type="text" name="b2_address" class="form-control @error('b2_address')is-invalid @enderror" value="{{ old('b2_address') }}">
                                                @error('b2_address')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <div class="col-12 text-center">
                                          <div class="text-center nxt-sc">
                                                <a href="javascript:;" class="btn-next" onclick="change_tab('pills-insurance-company-tab')"><i class="ri-arrow-left-line"></i> Back</a>
                                                <a href="javascript:;" class="btn-next" onclick="change_tab('pills-document-tab')">Next <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-document" role="tabpanel" aria-labelledby="pills-document-tab">
                              <div class="crd-box">
                                    <div class="tb-hd">
                                       <h3>Please submit the following documents:</h3>
                                       <div class="br-line"></div>
                                    </div>
                                    <div class="row justify-content-center">
                                       <div class="col-md-8">
                                          <div class="">
                                                <div class="upload mb-3 @error('cnic_image')is-invalid @enderror">
                                                   <input type="file" id="real-file" name="cnic_image" hidden="hidden" />
                                                   <span id="custom-text">Upload your CNIC copy</span>
                                                   <button type="button" id="custom-button">UPLOAD</button>
                                                </div>
                                                @error('cnic_image')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                                <div class="upload mb-3 @error('family_registration_certificate')is-invalid @enderror">
                                                   <input type="file" id="real-file_2" name="family_registration_certificate" hidden="hidden" />
                                                   <span id="custom-text_2">Upload your family Registration Certificate</span>
                                                   <button type="button" id="custom-button_2">UPLOAD</button>
                                                </div>
                                                @error('family_registration_certificate')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                                <div class="upload mb-3 @error('b_form')is-invalid @enderror">
                                                   <input type="file" id="real-file_3" name="b_form" hidden="hidden" />
                                                   <span id="custom-text_3">Upload your B Form</span>
                                                   <button type="button" id="custom-button_3">UPLOAD</button>
                                                </div>
                                                @error('b_form')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                                <div class="upload mb-3 @error('marriage_certificate')is-invalid @enderror">
                                                   <input type="file" id="real-file_4" name="marriage_certificate" hidden="hidden" />
                                                   <span id="custom-text_4">Upload your marriage Certificate</span>
                                                   <button type="button" id="custom-button_4">UPLOAD</button>
                                                </div>
                                                @error('marriage_certificate')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <div class="row">
                                                <div class="col-md-12">
                                                   <div class="text-center nxt-sc">
                                                      <a href="javascript:;" class="btn-next" onclick="change_tab('pills-insurance-company-tab')"><i class="ri-arrow-left-line"></i> Back</a>
                                                      <a href="javascript:;" class="btn-next" onclick="change_tab('pills-confirmation-tab')">Next <i class="ri-arrow-right-line"></i></a>
                                                   </div>
                                                </div>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-confirmation" role="tabpanel" aria-labelledby="pills-confirmation-tab">
                              <div class="crd-box">
                                    <div class="col-md-12">
                                       <div class="tb-hd mt-5">
                                          <h3>Please confirm if your information is correct:</h3>
                                          <div class="br-line "></div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-4">
                                                <h3 class="text-center">Your Details</h3>
                                                <div class="view-box">
                                                   <p><span class="vl-hd">Full Name:</span> <span id="span_full_name" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">CNIC Number:</span> <span id="span_cnic" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">Mobile Number</span> <span id="span_phone_number" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">Email Address:</span> <span id="span_email" class="vl-cn"></span></p>
                                                </div>
                                          </div>
                                          <div class="col-md-4">
                                                <h3 class="text-center">Beneficiary 1</h3>
                                                <div class="view-box">
                                                   <p><span class="vl-hd">Full Name:</span> <span id="span_b1_full_name" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">Date of Birth:</span> <span id="span_b1_dob" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">Relation:</span> <span id="span_b1_relation" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">CNIC Number:</span> <span id="span_b1_cnic" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">Address:</span> <span id="span_b1_address" class="vl-cn"></span></p>
                                                </div>
                                          </div>
                                          <div class="col-md-4">
                                                <h3 class="text-center">Beneficiary 2</h3>
                                                <div class="view-box">
                                                   <p><span class="vl-hd">Full Name:</span> <span id="span_b2_full_name" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">Date of Birth:</span> <span id="span_b2_dob" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">Relation:</span> <span id="span_b2_relation" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">CNIC Number:</span> <span id="span_b2_cnic" class="vl-cn"></span></p>
                                                   <p><span class="vl-hd">Address:</span> <span id="span_b2_address" class="vl-cn"></span></p>
                                                </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                                <div class="checkbox">
                                                   <div class="form-check">
                                                      <input class="form-check-input @error('agree_check')is-invalid @enderror" type="checkbox" name="agree_check" id="chk">
                                                      <label class="form-check-label" for="chk">
                                                      The attached documents are official Government of Pakistan issued documents. I hereby confirm that all information contained within is accurate and true.
                                                      </label>
                                                   </div>
                                                   @error('agree_check')
                                                   <span class="error invalid-feedback">{{ $message }}</span>
                                                   @enderror
                                                </div>
                                          </div>
                                          <div>
                                                <input type="text" name="coupon" id="coupon" placeholder="Enter Coupon" >
                                                <input type="button" name="coupon_btn" id="coupon_btn" value="Apply Coupon"> 
                                                <span id="coupon_msg"></span>
                                                <p>Plan Amount <span id="plan_amount">0</span></p>
                                                <p>Discount Amount <span id="discount_amount">0</span></p>
                                                <p>Total Amount <span id="total_amount">0</span></p>
                                          </div>
                                          <div class="text-center nxt-sc">                                             
                                             <a href="javascript:;" class="btn-next" onclick="change_tab('pills-document-tab')"><i class="ri-arrow-left-line"></i> Back</a>
                                             <a href="javascript:;" class="btn-next" type="submit" id="submit">SUBMIT</a>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </form>
         </div>
      </section>
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="{{ asset('frontend/js/scripts.js') }}"></script>
		<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
		<!-- * *                               SB Forms JS                               * *-->
		<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
		<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
		<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		<script type="text/javascript">
			var realFileBtn = document.getElementById("real-file");
			var customBtn = document.getElementById("custom-button");
			var customTxt = document.getElementById("custom-text");
			customBtn.addEventListener("click", function () {
				realFileBtn.click();
			});
			realFileBtn.addEventListener("change", function () {
				if (realFileBtn.value) {
					customTxt.innerHTML = realFileBtn.value.match(
					/[\/\\]([\w\d\s\.\-\(\)]+)$/
					)[1];
				} else {
					customTxt.innerHTML = "No file chosen, yet.";
				}
			});
		</script>
		<script type="text/javascript">
			var realFileBtn_2 = document.getElementById("real-file_2");
			var customBtn_2 = document.getElementById("custom-button_2");
			var customTxt_2 = document.getElementById("custom-text_2");
			customBtn_2.addEventListener("click", function () {
				realFileBtn_2.click();
			});
			realFileBtn_2.addEventListener("change", function () {
				if (realFileBtn_2.value) {
					customTxt_2.innerHTML = realFileBtn_2.value.match(
					/[\/\\]([\w\d\s\.\-\(\)]+)$/
					)[1];
				} else {
					customTxt_2.innerHTML = "No file chosen, yet.";
				}
			});
		</script>
		<script type="text/javascript">
			var realFileBtn_3 = document.getElementById("real-file_3");
			var customBtn_3 = document.getElementById("custom-button_3");
			var customTxt_3 = document.getElementById("custom-text_3");
			customBtn_3.addEventListener("click", function () {
				realFileBtn_3.click();
			});
			realFileBtn_3.addEventListener("change", function () {
				if (realFileBtn_3.value) {
					customTxt_3.innerHTML = realFileBtn_3.value.match(
					/[\/\\]([\w\d\s\.\-\(\)]+)$/
					)[1];
				} else {
					customTxt_3.innerHTML = "No file chosen, yet.";
				}
			});
		</script>
		<script type="text/javascript">
			var realFileBtn_4 = document.getElementById("real-file_4");
			var customBtn_4 = document.getElementById("custom-button_4");
			var customTxt_4 = document.getElementById("custom-text_4");
			customBtn_4.addEventListener("click", function () {
				realFileBtn_4.click();
			});
			realFileBtn_4.addEventListener("change", function () {
				if (realFileBtn_4.value) {
					customTxt_4.innerHTML = realFileBtn_4.value.match(
					/[\/\\]([\w\d\s\.\-\(\)]+)$/
					)[1];
				} else {
					customTxt_4.innerHTML = "No file chosen, yet.";
				}
			});
		</script>
		<script type="text/javascript">
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
				'use strict'
				
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.querySelectorAll('.needs-validation')
				
				// Loop over them and prevent submission
				Array.prototype.slice.call(forms).forEach(function (form) {
   				form.addEventListener('submit', function (event) {
      				if (!form.checkValidity()) {
         				event.preventDefault()
         				event.stopPropagation()
      				}
      				
      				form.classList.add('was-validated')
   				}, false)
				})
			})()

         function change_tab(param) {
            var phoneno = /[0-9]{11}/;///^[0-9]{11}$/;
            var cnic = /[0-9]{13}/;///^\d{13}$/;
            if(param == 'pills-insurance-type-tab'){
               var error = 0;
               if($('input[name="full_name"]').val() == ''){
                  $('input[name="full_name"]').addClass('is-invalid');
                  $('input[name="full_name"]').parent().append('<span class="error invalid-feedback">Full Name is required</span>');
                  error += 1;
               }else{
                  $('input[name="full_name"]').removeClass('is-invalid');
               }
               if(($('input[name="cnic"]').val() == '') || ( !cnic.test($('input[name="cnic"]').val()))){
                  $('input[name="cnic"]').addClass('is-invalid');
                  $('input[name="cnic"]').parent().append('<span class="error invalid-feedback">CNIC is required and must be 13 digits only</span>');
                  error += 1;
               }else{
                  $('input[name="cnic"]').removeClass('is-invalid');
               }
               if(($('input[name="phone_number"]').val() == '') || ( !phoneno.test($('input[name="phone_number"]').val()))){
                  $('input[name="phone_number"]').addClass('is-invalid');
                  $('input[name="phone_number"]').parent().append('<span class="error invalid-feedback">Phone is required and must be 11 digits only</span>');
                  error += 1;
               }else{
                  $('input[name="phone_number"]').removeClass('is-invalid');
               }
               if($('input[name="email"]').val() == ''){
                  $('input[name="email"]').addClass('is-invalid');
                  $('input[name="email"]').parent().append('<span class="error invalid-feedback">Email is required</span>');
                  error += 1;
               }else{
                  $('input[name="email"]').removeClass('is-invalid');
               }
               if(error > 0){
                  return false;
               }else{
                  $( "#" + param).click();
                  $.ajax({
                     url: "{{ url('client/store') }}",
                     type: 'POST',
                     data: {
                        full_name: $('input[name="full_name"]').val(),
                        cnic: $('input[name="cnic"]').val(),
                        phone_number: $('input[name="phone_number"]').val(),
                        email: $('input[name="email"]').val(),
                        _token: $('input[name="_token"]').val()
                     },
                     success: function (result) {
                        console.log(result)
                     }
                  })
               }

            }else if(param == 'pills-document-tab'){
               var error = 0;
               
               if($('input[name="b1_full_name"]').val() == ''){
                  $('input[name="b1_full_name"]').addClass('is-invalid');
                  $('input[name="b1_full_name"]').parent().append('<span class="error invalid-feedback">Full Name is required</span>');
                  error += 1;
               }else{
                  $('input[name="b1_full_name"]').removeClass('is-invalid');
               }
               if($('input[name="b1_dob"]').val() == ''){
                  $('input[name="b1_dob"]').addClass('is-invalid');
                  $('input[name="b1_dob"]').parent().append('<span class="error invalid-feedback">Date Of Birth is required</span>');
                  error += 1;
               }else{
                  $('input[name="b1_dob"]').removeClass('is-invalid');
               }
               if($('input[name="b1_relation"]').val() == ''){
                  $('input[name="b1_relation"]').addClass('is-invalid');
                  $('input[name="b1_relation"]').parent().append('<span class="error invalid-feedback">Relation is required</span>');
                  error += 1;
               }else{
                  $('input[name="b1_relation"]').removeClass('is-invalid');
               }
               if(($('input[name="b1_cnic"]').val() == '') || ( !cnic.test($('input[name="b1_cnic"]').val()))){
                  $('input[name="b1_cnic"]').addClass('is-invalid');
                  $('input[name="b1_cnic"]').parent().append('<span class="error invalid-feedback">CNIC is required and must be 13 digits</span>');
                  error += 1;
               }else{
                  $('input[name="b1_cnic"]').removeClass('is-invalid');
               }
               if($('input[name="b1_address"]').val() == ''){
                  $('input[name="b1_address"]').addClass('is-invalid');
                  $('input[name="b1_address"]').parent().append('<span class="error invalid-feedback">Address is required</span>');
                  error += 1;
               }else{
                  $('input[name="b1_address"]').removeClass('is-invalid');
               }
               if($('input[name="b2_full_name"]').val() == ''){
                  $('input[name="b2_full_name"]').addClass('is-invalid');
                  $('input[name="b2_full_name"]').parent().append('<span class="error invalid-feedback">Full Name is required</span>');
                  error += 1;
               }else{
                  $('input[name="b2_full_name"]').removeClass('is-invalid');
               }
               if($('input[name="b2_dob"]').val() == ''){
                  $('input[name="b2_dob"]').addClass('is-invalid');
                  $('input[name="b2_dob"]').parent().append('<span class="error invalid-feedback">Date Of Birth is required</span>');
                  error += 1;
               }else{
                  $('input[name="b2_dob"]').removeClass('is-invalid');
               }
               if($('input[name="b2_relation"]').val() == ''){
                  $('input[name="b2_relation"]').addClass('is-invalid');
                  $('input[name="b2_relation"]').parent().append('<span class="error invalid-feedback">Relation is required</span>');
                  error += 1;
               }else{
                  $('input[name="b2_relation"]').removeClass('is-invalid');
               }
               if(($('input[name="b2_cnic"]').val() == '') || ( !cnic.test($('input[name="b2_cnic"]').val())) ){
                  $('input[name="b2_cnic"]').addClass('is-invalid');
                  $('input[name="b2_cnic"]').parent().append('<span class="error invalid-feedback">CNIC is required and must be 13 digits</span>');
                  error += 1;
               }else{
                  $('input[name="b2_cnic"]').removeClass('is-invalid');
               }
               if($('input[name="b2_address"]').val() == ''){
                  $('input[name="b2_address"]').addClass('is-invalid');
                  $('input[name="b2_address"]').parent().append('<span class="error invalid-feedback">Address is required</span>');
                  error += 1;
               }else{
                  $('input[name="b2_address"]').removeClass('is-invalid');
               }
               if(error > 0){
                  return false;
               }else{
                  $( "#" + param).click();
               }

            }else if(param == 'pills-confirmation-tab'){
               $('#span_full_name').text($('input[name="full_name"]').val())
               $('#span_cnic').text($('input[name="cnic"]').val())
               $('#span_phone_number').text($('input[name="phone_number"]').val())
               $('#span_email').text($('input[name="email"]').val())
               $('#span_b1_full_name').text($('input[name="b1_full_name"]').val())
               $('#span_b1_dob').text($('input[name="b1_dob"]').val())
               $('#span_b1_relation').text($('.relation').val())
               $('#span_b1_cnic').text($('input[name="b1_cnic"]').val())
               $('#span_b1_address').text($('input[name="b1_address"]').val())
               $('#span_b2_full_name').text($('input[name="b2_full_name"]').val())
               $('#span_b2_dob').text($('input[name="b2_dob"]').val())
               $('#span_b2_relation').text($('.relation_1').val())
               $('#span_b2_cnic').text($('input[name="b2_cnic"]').val())
               $('#span_b2_address').text($('input[name="b2_address"]').val())
               $( "#" + param).click();
            }else{
               $( "#" + param).click();
            }
         }
		</script>
		<script>
			$(document).ready(function() {
   			$('#coupon_btn').click(function() {
      			var total_amount = $('#total_amount').text();
      			$.ajax({
      				url: "{{ url('coupon/validate-coupon') }}",
      				type: 'POST',
      				data: {
      					coupon: $('#coupon').val(),
      					total_amount: total_amount,
      					_token: $('input[name="_token"]').val()
      				},
      				success: function (result) {
      					var response = JSON.parse(result);
      					$('#coupon_msg').text(response.message)
      					if(response.code == 1){
      						$('#discount_amount').text(response.discount);
      						$('#total_amount').text(response.total_amount);
      					}
      				}
      			})
   			})
			})
			
			function changeAmt() {
   			var plan_amount = $('input[name="plan"]:checked').attr('amount');
   			$('#plan_amount').text(plan_amount);
   			$('#total_amount').text(plan_amount);
			}

         $('input[name="plan"]')[0].click();
         function change_plan(display_id, relation){
            $('.list-box').css('display', 'none');
            console.log(display_id)
            $('.relation').html('');
            $('.relation_1').html('');
            $('#plan_detail'+display_id).css('display', 'inherit');
            let relationship = relation.split(',');
            relationship.forEach(element => {
               var htm = "<option value='" + element + "'>" + element + "</option>";
               $('.relation').append(htm);
               if(element != 'Spouse'){
                  var htm1 = "<option value='" + element + "'>" + element + "</option>";
               }
               $('.relation_1').append(htm1);
            });
         }
		</script>
      <script>
         $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var demovalue = $(this).val();
                $(".myDiv").hide();
                $("#show"+demovalue).show();
            });
         });
      </script>
	</body>
</html>