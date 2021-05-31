<!doctype html>
<html lang="en">
<head>
  <title>{{$content->pg_page_name}}</title>
  <meta name="keywords" content="{{$content->pg_meta_tag}}">
  <meta name="description" content="{{$content->page_meta_desc_tag}}">
  @include('includes/links')


</head>
<body>
  @include('includes/header')

  <!-- Inside Banner -->
  @include('includes/inner-banner')
  <!--End Inside Banner -->

  <!--Page Background-->
  <div class="bg-sec application-form-main">
    <!-- Breadcrumbs -->
    <div class="breadcrumb-main">
      <h1 class="title black">Car Loan Application Form</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb af-breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Car loan application form</li>
        </ol>
      </nav>
    </div>
    <!-- End Breadcrumbs -->
    <?php
    $previous_url = url()->previous(); 
    $link_array = explode('/',$previous_url);
    $page = end($link_array);

/*Cookie::queue(Cookie::forget('application_data'));
Cookie::queue(Cookie::forget('application_quote_data'));*/
$object=  Cookie::get('application_data');
$object_quota =  Cookie::get('application_quote_data');
$first_form_data=json_decode($object);
$second_form_data=json_decode($object_quota);
if($page == 'index' ||$page == '' ){
  if( isset($first_form_data->name_of_applicant)){
   $first_name = $first_form_data->name_of_applicant;
 }

 if( isset($first_form_data->last_name)){
   $last_name = $first_form_data->last_name;
 }

  if( isset($first_form_data->phone_number)){
   $phone = $first_form_data->phone_number;
 }
  if( isset($first_form_data->email_of_applicant)){
   $email = $first_form_data->email_of_applicant;
 }

}else if($page == 'finance-quote'){
	if(isset($second_form_data->first_name)){
   $first_name = $second_form_data->first_name;
 }
 if(isset($second_form_data->last_name)){
   $last_name = $second_form_data->last_name;
 }
 if( isset($second_form_data->email_of_applicant)){
   $email = $second_form_data->email_of_applicant;
 }
  if( isset($second_form_data->phone_number)){
   $phone = $second_form_data->phone_number;
 }
}






?>
<!-- Application Form Section -->
<section class="application-form-sec">
  <div class="inner">
    <div class="row row-clr item-row">
      <div class="col-sm-12">
        <form action="" id="applicationform" enctype="multipart/form-data">
          {{ csrf_field() }}

          <input type="hidden" name="u" value="5" />
          <input type="hidden" name="f" value="5" />
          <input type="hidden" name="s" />
          <input type="hidden" name="c" value="0" />
          <input type="hidden" name="m" value="0" />
          <input type="hidden" name="act" value="sub" />
          <input type="hidden" name="v" value="2" />


          <div class="row">
            <div class="col-sm-12">
              <h3 class="form-in-title">About you</h3>  
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-sm-12">
                 <label for="email">Name *</label>
               </div>
               <div class="col-lg-6">
                <div class="row">
                 <div class="col-lg-4">
                  <div class="form-group select-group">
                    <select class="form-control RequiredField" name="name_title" id="name_title">
                      <option value="">
                        Title
                      </option>
                      <option value="Mr">
                        Mr
                      </option>
                      <option value="Mrs">
                        Mrs
                      </option>
                      <option value="Miss">
                        Miss
                      </option>
                      <option value="Ms">
                        Ms
                      </option>
                    </select>
                    <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <input type="text" class="form-control RequiredField name" id="first_name" placeholder="First name" name="field[21]" value="<?php if(isset($first_name)){echo $first_name; } ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control RequiredField name" id="last_name" placeholder="Last name" name="field[22]"  value="<?php if(isset($last_name)){echo $last_name; } ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-sm-12">
             <label for="email">E mail *</label>
           </div>
           <div class="col-lg-12">
            <div class="form-group">
              <input type="text" class="form-control RequiredField email"  id="email" placeholder="example@example.com" name="email" value="<?php if(isset($email)){echo $email; } ?>">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="spacer small"></div>

    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-sm-12">
               <label for="email">Phone number *</label>
             </div>
             <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control RequiredField areacode" id="area_code" placeholder="Area code" name="field[23]" maxlength="5" :minlength="3" >
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <input type="tel" class="form-control RequiredField phone" id="phone_number" placeholder="Phone number" name="field[25]" :maxlength="15" :minlength="7" value="<?php if(isset($phone)){echo $phone; } ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-sm-12">
             <label for="pwd">Date of birth *</label>
           </div>
           <div class="col-lg-12">
            <div class="form-group">
              <input type="text" class="form-control RequiredField" id="dob" placeholder="dd / mm / yyyy" name="field[1]">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group select-group">
          <label for="email">Gender *</label>
          <select class="form-control RequiredField" name="field[56]">
            <option value="Male">
              Male
            </option>
            <option value="Female">
              Female
            </option>
            <option value="Other">
              Other
            </option>
          </select>
          <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <label for="email">Best time to contact you? *</label>
        <div class="form-group">
          <input type="text" class="form-control RequiredField timepicker-time timepicker-with-dropdown"placeholder="Time" name="field[57]">
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group select-group">
          <label for="email">Marital status *</label>
          <select class="form-control RequiredField" id="marital_status" name="field[9]">
            <option value="Single" >
              Single
            </option>
            <option value="Married" >
              Married
            </option>
            <option value="Divorced" >
              Divorced
            </option>
            <option value="Widowed" >
              Widowed
            </option>
            <option value="Defacto" >
              Defacto
            </option>
          </select>
          <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label for="pwd">No. Children you still support *</label>
          <input type="text" class="form-control RequiredField" id="deependents_living_at_home" placeholder="3" name="field[10]" >
        </div>
      </div>
    </div>
  </div>
</div>


{{--      <div class="row">
<div class="col-lg-8">
  <div class="row">
    <div class="col-sm-12">
     <label for="email">Phone number *</label>
   </div>
   <div class="col-lg-6">
    <div class="form-group">
      <input type="tel" class="form-control RequiredField" placeholder="Phone number" name="field[59]">
    </div>
  </div>
</div>
</div>
</div>--}}

<div class="spacer big"></div>

<div class="row">
  <div class="col-sm-12">
    <h3 class="form-in-title">Employment Details</h3>  
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <label for="pwd">Occupation *</label>
      <input type="text" class="form-control RequiredField" id="current_employer" placeholder="xxxxxxxxxx" name="field[24]" >
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group select-group">
      <label for="email">Employment type *</label>
      <select class="form-control RequiredField" id="employment_status"  name="field[5]">
        <option value="Full-Time" >
          Full-time
        </option>
        <option value="Part-Time" >
          Part-time
        </option>
        <option value="Casual" >
          Casual 
        </option>
        <option value="Student" >
          Student
        </option>
        <option value="Work Visa" >
          Work visa
        </option>
        <option value="Self-Employed" >
          Self-employed
        </option>
        <option value="Contractor" >
          Contractor
        </option>
        <option value="Beneficiary" >
          Beneficiary
        </option>
        <option value="WINZ" >
          WINZ
        </option>
        <option value="ACC" >
          ACC
        </option>
        <option value="Retired" >
          Retired
        </option>

      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group">
      <label for="pwd">Income per week after tax *</label>
      <input type="text" class="form-control RequiredField" id="approx_earning" placeholder="NZD 1000" name="field[6]">
      <small class="form-text text-muted">This is before expenses</small>
    </div>
  </div>
</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-lg-4">
          <!--<div class="form-group select-group">
            <label for="pwd">Time at Employer</label>
            <select name="field[8]" class="form-control RequiredField">
              <option value="0-6 Months" >
                0-6 Months
              </option>
              <option value="6-12 Months" >
                6-12 Months
              </option>
              <option value="1-2 Years" >
                1-2 Years
              </option>
              <option value="2-3 Years" >
                2-3 Years
              </option>
              <option value="3-4 Years" >
                3-4 Years
              </option>
              <option value="5-6 Years" >
                5-6 Years
              </option>
              <option value="6-7 Years" >
                6-7 Years
              </option>
              <option value="7-8 Years" >
                7-8 Years
              </option>
              <option value="8-9 Years" >
                8-9 Years
              </option>
              <option value="10+ Years" >
                10+ Years
              </option>
            </select>
            <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
          </div>-->
          <div class="row">
            <div class="col-lg-12">
              <label for="email">How long have you been working there? *</label>
            </div>
            <div class="col-lg-6">
              <div class="form-group select-group">

                <select class="form-control RequiredField" name="field[61]" onchange="" id="time_at_pro_sec">
                  <option value="">Select Year</option>
                  <option value="0">0 Years</option>
                  <option value="1">1 Years</option>
                  <option value="2">2 Years</option>
                  <option value="3">3 Years</option>
                  <option value="4">4 Years</option>
                  <option value="5">5 Years</option>
                  <option value="6">6 Years</option>
                  <option value="7">7 Years</option>
                  <option value="8">8 Years</option>
                  <option value="9">9 Years</option>
                  <option value="10">10 Years</option>
                  <option value="11">11 Years</option>
                  <option value="12">12 Years</option>
                  <option value="13">13 Years</option>
                  <option value="14">14 Years</option>
                  <option value="15">15 Years</option>
                  <option value="16">16 Years</option>
                  <option value="17">17 Years</option>
                  <option value="18">18 Years</option>
                  <option value="19">19 Years</option>
                  <option value="20">20 Years</option>

                </select>
                <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group select-group">
                <select class="form-control" name="field[62]" onchange="" >
                  <option value="0">Select Month</option>
                  <option value="0">0 Month</option>
                  <option value="1">1 Month</option>
                  <option value="2">2 Months</option>
                  <option value="3">3 Months</option>
                  <option value="4">4 Months</option>
                  <option value="5">5 Months</option>
                  <option value="6">6 Months</option>
                  <option value="7">7 Months</option>
                  <option value="8">8 Months</option>
                  <option value="9">9 Months</option>
                  <option value="10">10 Months</option>
                  <option value="11">11 Months</option>
                  <option value="12">12 Months</option>
                </select>
                <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
              </div>
            </div>
          </div>
        </div>


        <!--<div class="col-lg-4">
          <div class="form-group">
            <label for="pwd">Job Title</label>
            <input type="text" class="form-control RequiredField" id="job_title" name="field[7]" >
          </div>
        </div>-->
        <div class="col-lg-4">
         <div class="form-group select-group">
          <label for="pwd">Permanent employment *</label>
          <select name="field[8]" class="form-control RequiredField">
            <option value="Yes" >
              Yes
            </option>
            <option value="No" >
              No
            </option>
          </select>
          <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
        </div>
      </div>

      <div class="col-lg-4">
       <div class="form-group select-group">
        <label for="email">Driver license type *</label>
        <select class="form-control RequiredField" id="driver_license_type" name="field[2]" >
          <option value="Learners" >
            Learners
          </option>
          <option value="Restricted" >
            Restricted
          </option>
          <option value="Full" >
            Full
          </option>
          <option value="International" >
            International
          </option>
        </select>
        <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
      </div>
    </div>
  </div>

  <div class="spacer small"></div>

  <div class="row">
    <div class="col-lg-4">
     <div class="form-group">
      <label for="pwd">License number *</label>
      <input type="text" class="form-control RequiredField" id="license_number" placeholder="xxx - xxxxxxxxxx" name="field[3]" :maxlength="15" :minlength="7">
    </div>
  </div>

  <div class="col-lg-4">
   <div class="form-group">
    <label for="pwd">License version no. *</label>
    <input type="text" class="form-control RequiredField" id="license_version_number" placeholder="xxx - xxxxxxxxxx" name="field[4]">
  </div>
</div>
</div>


<div class="spacer big"></div>

      <!--<div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
             <label>Current Address *</label>
           </div>
           <div class="col-lg-6">
            <div class="form-group">
              <input type="text" class="form-control RequiredField" id="street_address1" placeholder="STREET ADDRESS" name="field[26]" >
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input type="text" class="form-control RequiredField" id="street_address2" placeholder="STREET ADDRESS 2" name="field[27]" >
            </div>
          </div>
        </div>
      </div>
    </div>-->
    
    <div class="row">
      <div class="col-sm-12">
        <h3 class="form-in-title">Address</h3>  
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label>Current address *</label>
          <input type="text" class="form-control RequiredField" id="street_address1" placeholder="Street Address" name="field[26]" >
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <label for="email">City *</label>
          <input type="text" class="form-control RequiredField" id="city" placeholder="Welligton" name="field[28]" >
        </div>
      </div>
    </div>
    
    <div class="spacer small"></div>
    
    <!--<div class="row">

      <div class="col-lg-4">
        <div class="form-group">
          <label for="email">City *</label>
          <input type="text" class="form-control RequiredField" id="city" placeholder="WELLIGTON" name="field[28]" >
        </div>
      </div>

      <div class="col-lg-4">
        <div class="form-group">
          <label for="pwd">State /Province *</label>
          <input type="text" class="form-control RequiredField" id="state" placeholder="WELLIGTON" name="field[29]" >
        </div>
      </div>

      <div class="col-lg-4">
        <div class="form-group">
          <label for="pwd">Postal Zip Code *</label>
          <input type="text" class="form-control" id="postal_zip_code" placeholder="XXXXX" name="field[30]" >
        </div>
      </div>
    </div>-->
    
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group select-group">
          <label for="email">Property status *</label>
          <select class="form-control RequiredField" id="property_status" name="field[31]" >
            <option value="Renting" >
              Renting
            </option>
            <option value="Boarding" >
              Boarding
            </option>
            <option value="Living With Parents" >
              Living with parents
            </option>
            <option value="Home Owner" >
              Home owner
            </option>
          </select>
          <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
        </div>
      </div>

      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <label for="email">Time at property *</label>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
             <div class="form-group select-group">

              <select class="form-control RequiredField" name="field[55]" onchange="" id="time_at_pro">
                <option value="">Select Year</option>
                <option value="0">0 Years</option>
                <option value="1">1 Years</option>
                <option value="2">2 Years</option>
                <option value="3">3 Years</option>
                <option value="4">4 Years</option>
                <option value="5">5 Years</option>
                <option value="6">6 Years</option>
                <option value="7">7 Years</option>
                <option value="8">8 Years</option>
                <option value="9">9 Years</option>
                <option value="10">10 Years</option>
                <option value="11">11 Years</option>
                <option value="12">12 Years</option>
                <option value="13">13 Years</option>
                <option value="14">14 Years</option>
                <option value="15">15 Years</option>
                <option value="16">16 Years</option>
                <option value="17">17 Years</option>
                <option value="18">18 Years</option>
                <option value="19">19 Years</option>
                <option value="20">20 Years</option>

              </select>
              <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group select-group">
            <select class="form-control RequiredField" name="field[64]" onchange="" id="time_at_months">
              <option value="0">Select Month</option>
              <option value="0">0 Month</option>
              <option value="1">1 Month</option>
              <option value="2">2 Months</option>
              <option value="3">3 Months</option>
              <option value="4">4 Months</option>
              <option value="5">5 Months</option>
              <option value="6">6 Months</option>
              <option value="7">7 Months</option>
              <option value="8">8 Months</option>
              <option value="9">9 Months</option>
              <option value="10">10 Months</option>
              <option value="11">11 Months</option>
              <option value="12">12 Months</option>
            </select>
            <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
          </div>
        </div>
      </div>
        <!--<div class="form-group select-group">
          <label for="email">Time at Property</label>
          <select class="form-control RequiredField" id="time_at_property" name="field[12]" >
            <option value="0-6 Months" >
              0-6 Months
            </option>
            <option value="6-12 Months" >
              6-12 Months
            </option>
            <option value="1-2 Years" >
              1-2 Years
            </option>
            <option value="2-3 Years" >
              2-3 Years
            </option>
            <option value="3-4 Years" >
              3-4 Years
            </option>
            <option value="4-5 Years" >
              4-5 Years
            </option>
            <option value="5-6 Years" >
              5-6 Years
            </option>
            <option value="6+ Years" >
              6+ Years
            </option>

          </select>
          <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
        </div>-->
      </div>

      <div class="col-lg-4">
        <div class="form-group">
          <label for="pwd">Rent/Mortgage/Board payments per week? *</label>
          <input type="text" class="form-control RequiredField" id="housing_expnses_per_week" placeholder="Rent/Mortgage/Board" name="field[13]" >
        </div>
      </div>
    </div>
    
    <div class="spacer small"></div>
    <div id="previous_add" style="display:none">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
             <label for="email">Previous address *</label>
           </div>
           <div class="col-lg-6">
            <div class="form-group">
              <input type="text" class="form-control" id="previous_street_address1" placeholder="Street address" name="field[32]" >
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input type="text" class="form-control" id="previous_street_address2" placeholder="Street address 2" name="field[33]" >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="spacer small"></div>
  </div>
  <div id="previous_add_city" style="display:none">

    <div class="row">

      <div class="col-lg-4">
        <div class="form-group">
          <label for="email">City *</label>
          <input type="text" class="form-control" id="previous_city" placeholder="Welligton" name="field[34]" >
        </div>
      </div>

      <div class="col-lg-4">
        <div class="form-group">
          <label for="pwd">State/Province *</label>
          <input type="text" class="form-control" id="previous_state" placeholder="Welligton" name="field[35]" >
        </div>
      </div>

      <div class="col-lg-4">
        <div class="form-group">
          <label for="pwd">Postal zip code *</label>
          <input type="text" class="form-control" id="previous_postal_zip_code" placeholder="xxxxx" name="field[36]" >
        </div>
      </div>
    </div>
    <div class="spacer small"></div>
  </div>
<!--  <div class="row">
    <div class="col-lg-4">
      <div class="form-group select-group">
        <label for="email">Citizenship *</label>
        <select class="form-control RequiredField" id="citizenship" name="field[15]" data-name="citizenship">
          <option value="New Zealand Citizen" >
            New Zealand Citizen
          </option>
          <option value="New Zealand Resident" >
            New Zealand Resident
          </option>
          <option value="Work Visa" >
            Work Visa
          </option>
        </select>
      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group select-group">
      <label for="email">Credit Check Approval *</label>
      <select class="form-control RequiredField" id="credit_check_approval" name="field[18]" >
        <option value="Yes" >
          Yes
        </option>
        <option value="No" >
          No
        </option>

      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group select-group">
      <label for="pwd">Vechicle Required *</label>
      <select name="field[17]" class="form-control RequiredField" id="vechicle_required">
        <option value="Sedan" >
          Sedan
        </option>
        <option value="People Mover" >
          People Mover
        </option>
        <option value="Van" >
          Van
        </option>
        <option value="Ute" >
          Ute
        </option>
        <option value="Truck" >
          Truck
        </option>
        <option value="Motorbike" >
          Motorbike
        </option>
        <option value="Boat" >
          Boat
        </option>
      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>
</div>-->

<!-- <div class="spacer small"></div> -->

<div class="row">
  <div class="col-lg-4">
    <div class="form-group select-group">
      <label for="email">Credit history *</label>
      <select class="form-control RequiredField" id="credit_history" name="field[16]" >
        <option value="Good" >
          Good
        </option>
        <option value="Bad" >
          Bad
        </option>
        <option value="Average" >
          Average
        </option>
        <option value="Unsure" >
          Unsure
        </option>
        <option value="No Credit History" >
          No credit history
        </option>

      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>
</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-sm-12">
    <div class="form-group">
      <label for="pwd">Additional comments</label>
      <textarea class="form-control" id="additional_comments" name="field[19]" rows="3" placeholder="Please let us know if you have any other loans /HPS /Credit card debts"></textarea>
    </div>
  </div>
</div>
<!-- Second Application -->
<div class="second-applicant">
  <h2 class="title black">Second Application</h2>
  <div class="row">
    <div class="col-sm-12">
      <h3 class="form-in-title">About you</h3>  
    </div>
    <div class="col-lg-8">
      <div class="row">
        <div class="col-sm-12">
         <label for="email">Name *</label>
       </div>
       <div class="col-lg-6">
         <div class="row">
           <div class="col-lg-4">
            <div class="form-group select-group">
              <select class="form-control" name="name_title2" id="name_title2">
                <option value="">
                  Title
                </option>
                <option value="Mr">
                  Mr
                </option>
                <option value="Mrs">
                  Mrs
                </option>
                <option value="Miss">
                  Miss
                </option>
                <option value="Ms">
                  Ms
                </option>
              </select>
              <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
            </div>
          </div>
          <div class="col-lg-8">
            <div class="form-group">
              <input type="text" class="form-control " id="first_name" placeholder="First name" name="field[65]">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" class="form-control " id="last_name" placeholder="Last name" name="field[66]">
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="row">
      <div class="col-sm-12">
       <label for="email">E mail *</label>
     </div>
     <div class="col-lg-12">
      <div class="form-group">
        <input type="text" class="form-control  "  id="email2" placeholder="example@example.com" name="field[67]">
      </div>
    </div>
  </div>
</div>
</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-lg-8">
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-12">
           <label for="email">Phone number *</label>
         </div>
         <div class="col-lg-4">
          <div class="form-group">
            <input type="text" class="form-control " id="area_code" placeholder="Area code" name="field[68]" maxlength="5" :minlength="3">
          </div>
        </div>
        <div class="col-lg-8">
          <div class="form-group">
            <input type="tel" class="form-control " id="phone_number" placeholder="Phone number" name="field[69]" :maxlength="15" :minlength="7">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row">
        <div class="col-sm-12">
         <label for="pwd">Date of birth *</label>
       </div>
       <div class="col-lg-12">
        <div class="form-group">
          <input type="text" class="form-control" id="dob2" placeholder="dd / mm / yyyy" name="field[70]">
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-lg-4">
  <div class="row">
    <div class="col-lg-12">
      <div class="form-group select-group">
        <label for="email">Gender *</label>
        <select class="form-control" name="field[73]">
          <option>
            Male
          </option>
          <option>
            Female
          </option>
          <option>
            Other
          </option>
        </select>
        <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
      </div>
    </div>
  </div>
</div>

</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-lg-4">
   <label for="email">Best time to contact you? *</label>
   <div class="form-group">
    <input type="text" class="form-control timepicker-time2 timepicker-with-dropdown"placeholder="Time" name="field[77]">
  </div>
</div>

<div class="col-lg-4">
  <div class="form-group select-group">
    <label for="email">Marital status *</label>
    <select class="form-control" id="marital_status" name="field[86]">
      <option value="Single" >
        Single
      </option>
      <option value="Married" >
        Married
      </option>
      <option value="Divorced" >
        Divorced
      </option>
      <option value="Widowed" >
        Widowed
      </option>
      <option value="Defacto" >
        Defacto
      </option>
    </select>
    <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
  </div>
</div>

<div class="col-lg-4">
  <div class="form-group">
    <label for="pwd">No. Children you still support *</label>
    <input type="text" class="form-control" id="deependents_living_at_home" placeholder="3" name="field[87]" >
  </div>
</div>

</div>

<div class="spacer small"></div>

{{--<div class="row">
<div class="col-lg-4">
  <div class="form-group">
    <input type="tel" class="form-control" placeholder="Phone number" name="field[79]">
  </div>
</div>

</div>--}}

<div class="spacer big"></div>

<div class="row">
  <div class="col-sm-12">
    <h3 class="form-in-title">Employment Details</h3>  
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <label for="pwd">Occupation *</label>
      <input type="text" class="form-control" id="current_employer" placeholder="xxxxxxxxxx" name="field[80]" >
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group select-group">
      <label for="email">Employment type *</label>
      <select class="form-control" id="employment_status"  name="field[81]">
        <option value="Full-Time" >
          Full-time
        </option>
        <option value="Part-Time" >
          Part-time
        </option>
        <option value="Casual" >
          Casual 
        </option>
        <option value="Student" >
          Student
        </option>
        <option value="Work Visa" >
          Work visa
        </option>
        <option value="Self-Employed" >
          Self-employed
        </option>
        <option value="Contractor" >
          Contractor
        </option>
        <option value="Beneficiary" >
          Beneficiary
        </option>
        <option value="WINZ" >
          WINZ
        </option>
        <option value="ACC" >
          ACC
        </option>
        <option value="Retired" >
          Retired
        </option>

      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group">
      <label for="pwd">Income per week after tax *</label>
      <input type="text" class="form-control" id="approx_earning" placeholder="NZD 1000" name="field[82]">
      <small class="form-text text-muted">This is before expenses</small>
    </div>
  </div>
</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <label for="email">How long have you been working there? *</label>
      </div>
      <div class="col-lg-6">
          <!-- <div class="form-group">
            <input type="text" class="form-control" placeholder="Years" name="field[83]">
          </div> -->
          <div class="form-group select-group">
            <select class="form-control" name="field[83]" onchange="">
              <option value="">Select Year</option>
              <option value="0">0 Years</option>
              <option value="1">1 Years</option>
              <option value="2">2 Years</option>
              <option value="3">3 Years</option>
              <option value="4">4 Years</option>
              <option value="5">5 Years</option>
              <option value="6">6 Years</option>
              <option value="7">7 Years</option>
              <option value="8">8 Years</option>
              <option value="9">9 Years</option>
              <option value="10">10 Years</option>
              <option value="11">11 Years</option>
              <option value="12">12 Years</option>
              <option value="13">13 Years</option>
              <option value="14">14 Years</option>
              <option value="15">15 Years</option>
              <option value="16">16 Years</option>
              <option value="17">17 Years</option>
              <option value="18">18 Years</option>
              <option value="19">19 Years</option>
              <option value="20">20 Years</option>
            </select>
            <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
          </div>
        </div>
        <div class="col-lg-6">
          <!-- <div class="form-group">
            <input type="text" class="form-control" placeholder="Months" name="field[84]">
          </div> -->
          <div class="form-group select-group">
            <select class="form-control" name="field[84]" onchange="">
              <option value="0">Select Month</option>
              <option value="0">0 Month</option>
              <option value="1">1 Month</option>
              <option value="2">2 Months</option>
              <option value="3">3 Months</option>
              <option value="4">4 Months</option>
              <option value="5">5 Months</option>
              <option value="6">6 Months</option>
              <option value="7">7 Months</option>
              <option value="8">8 Months</option>
              <option value="9">9 Months</option>
              <option value="10">10 Months</option>
              <option value="11">11 Months</option>
              <option value="12">12 Months</option>
            </select>
            <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4">
     <div class="form-group select-group">
      <label for="pwd">Permanent employment *</label>
      <select name="field[85]" class="form-control">
        <option value="Yes" >
          Yes
        </option>
        <option value="No" >
          No
        </option>
      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group select-group">
      <label for="email">Driver license type *</label>
      <select class="form-control" id="driver_license_type" name="field[74]" >
        <option value="Learners" >
          Learners
        </option>
        <option value="Restricted" >
          Restricted
        </option>
        <option value="Full" >
          Full
        </option>
        <option value="International" >
          International
        </option>
      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>

</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-lg-4">
    <div class="form-group">
      <label for="pwd">License number *</label>
      <input type="text" class="form-control" id="license_number" placeholder="xxx - xxxxxxxxxx" name="field[75]" :maxlength="15" :minlength="7">
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <label for="pwd">License version no. *</label>
      <input type="text" class="form-control" id="license_version_number" placeholder="xxx - xxxxxxxxxx" name="field[76]">
    </div>
  </div>
</div>

<div class="spacer big"></div>


<div class="row">
  <div class="col-sm-12">
    <h3 class="form-in-title">Address</h3>  
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <label>Current address *</label>
      <input type="text" class="form-control" id="street_address1" placeholder="Street Address" name="field[88]" >
    </div>
  </div>

  <div class="col-lg-6">
    <div class="form-group">
      <label for="email">City *</label>
      <input type="text" class="form-control" id="city" placeholder="Welligton" name="field[89]" >
    </div>
  </div>
</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-lg-4">
    <div class="form-group select-group">
      <label for="email">Property status *</label>
      <select class="form-control" id="property_status" name="field[90]" >
        <option value="Renting" >
          Renting
        </option>
        <option value="Boarding" >
          Boarding
        </option>
        <option value="Living With Parents" >
          Living with parents
        </option>
        <option value="Home Owner" >
          Home owner
        </option>
      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>

  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <label for="email">Time at property *</label>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <div class="form-group select-group">

            <select class="form-control" name="field[91]" onchange="" id="time_at_pro_sec">
              <option value="">Select Year</option>
              <option value="0">0 Years</option>
              <option value="1">1 Years</option>
              <option value="2">2 Years</option>
              <option value="3">3 Years</option>
              <option value="4">4 Years</option>
              <option value="5">5 Years</option>
              <option value="6">6 Years</option>
              <option value="7">7 Years</option>
              <option value="8">8 Years</option>
              <option value="9">9 Years</option>
              <option value="10">10 Years</option>
              <option value="11">11 Years</option>
              <option value="12">12 Years</option>
              <option value="13">13 Years</option>
              <option value="14">14 Years</option>
              <option value="15">15 Years</option>
              <option value="16">16 Years</option>
              <option value="17">17 Years</option>
              <option value="18">18 Years</option>
              <option value="19">19 Years</option>
              <option value="20">20 Years</option>

            </select>
            <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group select-group">
          <select class="form-control" name="field[92]" onchange=""  id="time_at_months_sec">
            <option value="0">Select Month</option>
            <option value="0">0 Month</option>
            <option value="1">1 Month</option>
            <option value="2">2 Months</option>
            <option value="3">3 Months</option>
            <option value="4">4 Months</option>
            <option value="5">5 Months</option>
            <option value="6">6 Months</option>
            <option value="7">7 Months</option>
            <option value="8">8 Months</option>
            <option value="9">9 Months</option>
            <option value="10">10 Months</option>
            <option value="11">11 Months</option>
            <option value="12">12 Months</option>
          </select>
          <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group">
      <label for="pwd">Rent/Mortgage/Board payments per week? *</label>
      <input type="text" class="form-control" id="housing_expnses_per_week" placeholder="Rent/Mortgage/Board" name="field[93]" >
    </div>
  </div>
</div>

<div id="secprevious_add" style="display:none">
  <div class="spacer small"></div>
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-12">
         <label for="email">Previous address *</label>
       </div>
       <div class="col-lg-6">
        <div class="form-group">
          <input type="text" class="form-control" id="previous_street_address1" placeholder="Street address" name="field[94]" >
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" class="form-control" id="previous_street_address2" placeholder="Street address 2" name="field[95]" >
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="secprevious_add_city" style="display:none">
  <div class="spacer small"></div>
  
  <div class="row">

    <div class="col-lg-4">
      <div class="form-group">
        <label for="email">City *</label>
        <input type="text" class="form-control" id="previous_city" placeholder="Welligton" name="field[96]" >
      </div>
    </div>

    <div class="col-lg-4">
      <div class="form-group">
        <label for="pwd">State/Province *</label>
        <input type="text" class="form-control" id="previous_state" placeholder="Welligton" name="field[97]" >
      </div>
    </div>

    <div class="col-lg-4">
      <div class="form-group">
        <label for="pwd">Postal zip code *</label>
        <input type="text" class="form-control" id="previous_postal_zip_code" placeholder="xxxxx" name="field[98]" >
      </div>
    </div>
  </div>
</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-lg-4">
    <div class="form-group select-group">
      <label for="email">Credit history *</label>
      <select class="form-control" id="credit_history" name="field[99]" >
        <option value="Good" >
          Good
        </option>
        <option value="Bad" >
          Bad
        </option>
        <option value="Average" >
          Average
        </option>
        <option value="Unsure" >
          Unsure
        </option>
        <option value="No Credit History" >
          No credit history
        </option>

      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>
</div>

<div class="spacer small"></div>

<div class="row">
  <div class="col-sm-12">
    <div class="form-group">
      <label for="pwd">Additional comments</label>
      <textarea class="form-control" id="additional_comments" name="field[100]" rows="3" placeholder="Please let us know if you have any other loans /HPS /Credit card debts"></textarea>
    </div>
  </div>
</div>
</div>

<a class="normal-btn" id="second-applicant-btn" href="#">Add Second Applicant</a>

<!--<div class="spacer big"></div>-->

<!--<div class="row">
  <div class="col-lg-4 col-sm-12">
    <div class="form-group select-group">
      <label for="email">Where Did You Hear About AutoFetch</label>
      <select class="form-control RequiredField" id="hear_abt_autofetch" name="field[37]" >
        <option selected>
        </option>
        <option value="Facebook" >
          Facebook
        </option>
        <option value="Option 2" >
          Option 2
        </option>
        <option value="Option 3" >
          Option 3
        </option>

      </select>
      <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
    </div>
  </div>
</div>-->
<input data-autofill="false" type="hidden" name="field[20][]" value="~|">

<div class="spacer small"></div>

<div class="row">
  <div class="col-sm-12">
    <div class="form-group">
      <!--<div class="checkbox">
        <label><input type="checkbox" value="yes" id="agree" class="agree" name="field[20][]"> By ticking this box you agree you've read and understood our terms and conditions & privacy policy</label>
      </div>-->
      <div class="custom-control custom-checkbox checkbox-txt mb-3">
        <input type="checkbox" class="custom-control-input agree" value="yes" id="agree">
        <label class="custom-control-label" for="agree">By ticking this box you agree you've read and understood our <a href="{{url('terms-conditions')}}" target="_blank"> terms and conditions</a> & <a href="{{url('privacy-policy')}}" target="_blank">privacy policy</a></label>
      </div>
    </div>
  </div>
</div>

<div class="_form-thank-you" style="display:none;"></div>

<!--<button type="submit" class="btn btn-primary" id="contact-submit">Apply Now</button>-->
<div class="btn-cont">
  <p>Submit now
    <span>
      <button type="submit" id="contact-submit">
        <img src="{{ asset('assets/site/img/arrow-dark.svg')}}" class="dark">
        <img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
      </button>
    </span>
  </p>
</div>
<div id="waitingMsg" style="color: #E6A833; margin-top:20px;   display:none">Please wait...</div>
</form>
</div>
</div>
</div>
</section>
<!-- End Application Form Section -->

</div>
<!--End Page Background-->

@include('includes/footer')
<script src="{{ asset('site/form/applicationform.js?adasdas')}}"></script>

</body>
</html>
