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
    <script>
        $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var demovalue = $(this).val();
                $(".myDiv").hide();
                $("#show"+demovalue).show();
            });
        
            $('input[type="text"]').keyup(function(){
                 $('#span_full_name').text($('input[name="full_name"]').val())
                 $('#span_cnic').text($('input[name="cnic"]').val())
                 $('#span_rda_account_number').text($('input[name="rda_account_number"]').val())
                 $('#span_email').text($('input[name="email"]').val())
                 $('#span_b1_full_name').text($('input[name="b1_full_name"]').val())
                 $('#span_b1_dob').text($('input[name="b1_dob"]').val())
                 $('#span_b1_relation').text($('input[name="b1_relation"]').val())
                 $('#span_b1_cnic').text($('input[name="b1_cnic"]').val())
                 $('#span_b1_contact').text($('input[name="b1_contact"]').val())
                 $('#span_b1_email').text($('input[name="b1_email"]').val())
                 $('#span_b1_age').text($('input[name="b1_age"]').val())
                 $('#span_b2_full_name').text($('input[name="b2_full_name"]').val())
                 $('#span_b2_dob').text($('input[name="b2_dob"]').val())
                 $('#span_b2_relation').text($('input[name="b2_relation"]').val())
                 $('#span_b2_cnic').text($('input[name="b2_cnic"]').val())
                 $('#span_b2_contact').text($('input[name="b2_contact"]').val())
                 $('#span_b2_email').text($('input[name="b2_email"]').val())
                 $('#span_b2_age').text($('input[name="b2_age"]').val())
            });
            
            $('input[type="date"]').change(function(){
                 $('#span_full_name').text($('input[name="full_name"]').val())
                 $('#span_cnic').text($('input[name="cnic"]').val())
                 $('#span_rda_account_number').text($('input[name="rda_account_number"]').val())
                 $('#span_email').text($('input[name="email"]').val())
                 $('#span_b1_full_name').text($('input[name="b1_full_name"]').val())
                 $('#span_b1_dob').text($('input[name="b1_dob"]').val())
                 $('#span_b1_relation').text($('input[name="b1_relation"]').val())
                 $('#span_b1_cnic').text($('input[name="b1_cnic"]').val())
                 $('#span_b1_contact').text($('input[name="b1_contact"]').val())
                 $('#span_b1_email').text($('input[name="b1_email"]').val())
                 $('#span_b1_age').text($('input[name="b1_age"]').val())
                 $('#span_b2_full_name').text($('input[name="b2_full_name"]').val())
                 $('#span_b2_dob').text($('input[name="b2_dob"]').val())
                 $('#span_b2_relation').text($('input[name="b2_relation"]').val())
                 $('#span_b2_cnic').text($('input[name="b2_cnic"]').val())
                 $('#span_b2_contact').text($('input[name="b2_contact"]').val())
                 $('#span_b2_email').text($('input[name="b2_email"]').val())
                 $('#span_b2_age').text($('input[name="b2_age"]').val())
            });
        });
    </script>
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
    </style>
</head>
	<body id="page-top">
		<header class="masthead">
		</header>
		<section class="tabs-sc">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="inr">
							Welcome to Insure Karo, an unprecedented Marketplace for Overseas Pakistanis. Whether you are looking for coverage for your parents or your spouse and children, we have a product to help you keep your family safe and secure.
						</p>
						<p class="inr">
							Our state-of-the-art product offers coverage that includes Hospitalization Enhancement, Pre-Existing Medical Coverage, Hepatitis B &amp; C Coverage, Specialist Investigation for Outpatients and much more.
						</p>
					</div>
				</div>
			</div>
		</section>
      <section class="tabs-area">
         <div class="tbsc">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Step 1 <i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Step 2 <i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Step 3<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-step4-tab" data-bs-toggle="pill" data-bs-target="#pills-step4" type="button" role="tab" aria-controls="pills-step4" aria-selected="false">Step 4<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-step5-tab" data-bs-toggle="pill" data-bs-target="#pills-step5" type="button" role="tab" aria-controls="pills-step5" aria-selected="false">Step 5<i class="ri-arrow-right-s-line"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-step6-tab" data-bs-toggle="pill" data-bs-target="#pills-step6" type="button" role="tab" aria-controls="pills-step6" aria-selected="false">Step 6<i class="ri-arrow-right-s-line"></i></button>
               </li>
            </ul>
         </div>
         <div class="container">
            <form method="POST" action="{{ url('account/store') }}" enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                           <div class="tb-hd">
                              <h3>Lets begin your journey towards better health coverage.<br/>
                              Please select your preferred insurance partner:</h3>
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
                                    <a href="javascript:;" id="nxt" class="btn-next">Next <i class="ri-arrow-right-line"></i></a>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                                    <a href="javascript:;" class="btn-next"  id="back"><i class="ri-arrow-left-line"></i> Back</a>
                                    <a href="javascript:;" class="btn-next" id="nxt_2">Next <i class="ri-arrow-right-line"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                           <div class="crd-box">
                              <div class="tb-hd">
                                 <h3>Please select your preferred plan:</h3>
                                 <div class="br-line"></div>
                              </div>
                              <div class="row justify-content-center">
                                 @foreach(get_list('plan_categories') as $key => $plan_category)
                                 <div class="col-md-2">
                                    <div class="button-bx">
                                       <input type="radio" class="btn-check" id="btncheckPC{{ $key }}" autocomplete="off" value="{{ $plan_category->id }}" name="plan" @if($key == 0) checked @endif onchange="change_plan({{ $plan_category->id }})">
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
                                       <a href="javascript:;" class="btn-next" id="back_3"><i class="ri-arrow-left-line"></i> Back</a>
                                       <a href="javascript:;" class="btn-next" id="nxt_3">Next <i class="ri-arrow-right-line"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-step4" role="tabpanel" aria-labelledby="pills-step4-tab">
                           <div class="crd-box">
                              <div class="tb-hd">
                                 <h3>Please enter your details:</h3>
                                 <div class="br-line"></div>
                              </div>
                              <div class="form-sc">
            <form class="row g-3 needs-validation" novalidate>
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
            <div class="row mb-3">
            <div class="col-2">
            <label>CNIC Number:</label>
            </div>
            <div class="col-10">
            <input type="text" name="cnic" class="form-control @error('cnic')is-invalid @enderror" value="{{ old('cnic') }}">
            @error('cnic')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-2">
            <label>Phone Number:</label>
            </div>
            <div class="col-10">
            <input type="text" name="rda_account_number" class="form-control @error('rda_account_number')is-invalid @enderror" value="{{ old('rda_account_number') }}">
            @error('rda_account_number')
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
            <input type="text" name="b1_relation" class="form-control @error('b1_relation')is-invalid @enderror" value="{{ old('b1_relation') }}">
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
            <div class="row mb-3" hidden>
            <div class="col-2">
            <label>Contact Number:</label>
            </div>
            <div class="col-10">
            <input type="text" name="b1_contact" class="form-control @error('b1_contact')is-invalid @enderror" value="{{ old('b1_contact') }}">
            @error('b1_contact')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
            </div>
            </div>
            <div class="row mb-3" hidden>
            <div class="col-2">
            <label>Email Address:</label>
            </div>
            <div class="col-10">
            <input type="text" name="b1_email" class="form-control @error('b1_email')is-invalid @enderror" value="{{ old('b1_email') }}">
            @error('b1_email')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-2">
            <label>Age:</label>
            </div>
            <div class="col-10">
            <input type="text" name="b1_age" class="form-control @error('b1_age')is-invalid @enderror" value="{{ old('b1_age') }}">
            @error('b1_age')
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
            <input type="text" name="b2_relation" class="form-control @error('b2_relation')is-invalid @enderror" value="{{ old('b2_relation') }}">
            @error('b2_relation')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
            </div>
            </div>
            <div class="row mb-3" hidden>
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
            <div class="row mb-3" hidden>
            <div class="col-2">
            <label>Contact Number:</label>
            </div>
            <div class="col-10">
            <input type="text" name="b2_contact" class="form-control @error('b2_contact')is-invalid @enderror" value="{{ old('b2_contact') }}">
            @error('b2_contact')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-2">
            <label>Email Address:</label>
            </div>
            <div class="col-10">
            <input type="text" name="b2_email" class="form-control @error('b2_email')is-invalid @enderror" value="{{ old('b2_email') }}">
            @error('b2_email')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-2">
            <label>Age :</label>
            </div>
            <div class="col-10">
            <input type="text" name="b2_age" class="form-control @error('b2_age')is-invalid @enderror" value="{{ old('b2_age') }}">
            @error('b2_age')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
            </div>
            </div>
            <div class="col-12 text-center">
            <div class="text-center nxt-sc">
            <a href="javascript:;" class="btn-next" id="back_4"><i class="ri-arrow-left-line"></i> Back</a>
            <a href="javascript:;" class="btn-next" id="nxt_4">Next <i class="ri-arrow-right-line"></i></a>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="tab-pane fade" id="pills-step5" role="tabpanel" aria-labelledby="pills-step5-tab">
            <div class="crd-box">
            <div class="tb-hd">
            <h3>Please enter your details:</h3>
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
            <a href="javascript:;" class="btn-next" id="back_6"><i class="ri-arrow-left-line"></i> Back</a>
            <a href="javascript:;" class="btn-next" id="nxt_6">Next <i class="ri-arrow-right-line"></i></a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="tab-pane fade" id="pills-step6" role="tabpanel" aria-labelledby="pills-step6-tab">
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
            <p><span class="vl-hd">Phone Number</span> <span id="span_rda_account_number" class="vl-cn"></span></p>
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
            <p hidden><span class="vl-hd">Contact Number:</span> <span id="span_b1_contact" class="vl-cn"></span></p>
            <p hidden><span class="vl-hd">Email Address:</span> <span id="span_b1_email" class="vl-cn"></span></p>
            <p><span class="vl-hd">Age:</span> <span id="span_b1_age" class="vl-cn"></span></p>


            </div>
            </div>
            <div class="col-md-4">
            <h3 class="text-center">Beneficiary 2</h3>
            <div class="view-box">
            <p><span class="vl-hd">Full Name:</span> <span id="span_b2_full_name" class="vl-cn"></span></p>
            <p><span class="vl-hd">Date of Birth:</span> <span id="span_b2_dob" class="vl-cn"></span></p>
            <p><span class="vl-hd">Relation:</span> <span id="span_b2_relation" class="vl-cn"></span></p>
            <p><span class="vl-hd">CNIC Number:</span> <span id="span_b2_cnic" class="vl-cn"></span></p>
            <p hidden><span class="vl-hd">Contact Number:</span> <span id="span_b2_contact" class="vl-cn"></span></p>
            <p hidden><span class="vl-hd">Email Address:</span> <span id="span_b2_email" class="vl-cn"></span></p>
            <p><span class="vl-hd">Age:</span> <span id="span_b2_age" class="vl-cn"></span></p>
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
            <div class="col-12 text-center">
            <button class="btn btn-primary btn-lg" type="submit" id="submit">SUBMIT</button>
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
			$( "#nxt" ).click(function() {
			$( "#pills-home-tab" ).click();
			});
			
			$( "#back" ).click(function() {
			$( "#pills-profile-tab" ).click();
			});
				
			$( "#nxt_2" ).click(function() {
				$( "#pills-contact-tab" ).click();
			});
			
			$( "#back_3" ).click(function() {
			$( "#pills-home-tab" ).click();
			});
			
			$( "#nxt_3" ).click(function() {
				$( "#pills-step4-tab" ).click();
			});    
			
			$( "#nxt_4" ).click(function() {
			$.ajax({
				url: "{{ url('client/store') }}",
				type: 'POST',
				data: {
					full_name: $('input[name="full_name"]').val(),
					cnic: $('input[name="cnic"]').val(),
					rda_account_number: $('input[name="rda_account_number"]').val(),
					email: $('input[name="email"]').val(),
					_token: $('input[name="_token"]').val()
				},
				success: function (result) {
					console.log(result)
				}
			})
				$( "#pills-step5-tab" ).click();
			});
			
			$( "#back_4" ).click(function() {
				$( "#pills-contact-tab" ).click();
			});  
			
			$( "#nxt_6" ).click(function() {
				$( "#pills-step6-tab" ).click();
			});
			
			$( "#back_6" ).click(function() {
				$( "#pills-step4-tab" ).click();
			});
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
				'use strict'
				
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.querySelectorAll('.needs-validation')
				
				// Loop over them and prevent submission
				Array.prototype.slice.call(forms)
				.forEach(function (form) {
				form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				event.preventDefault()
				event.stopPropagation()
				}
				
				form.classList.add('was-validated')
				}, false)
				})
			})()
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
         alert(plan_amount)
			$('#plan_amount').text(plan_amount);
			$('#total_amount').text(plan_amount);
			}

         function change_plan(display_id){
            $('.list-box').css('display', 'none');
            console.log(display_id)
            $('#plan_detail'+display_id).css('display', 'inherit');
         }
		</script>
	</body>
</html>