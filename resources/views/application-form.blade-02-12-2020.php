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
      <h2 class="title black">Application Form</h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb af-breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Application Form</li>
        </ol>
      </nav>
    </div>
    <!-- End Breadcrumbs -->

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
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col-sm-12">
                     <label for="email">Name *</label>
                   </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control RequiredField name" id="first_name" placeholder="FIRST NAME" name="field[21]">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control RequiredField name" id="last_name" placeholder="LAST NAME" name="field[22]">
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
                    <input type="text" class="form-control RequiredField email"  id="email" placeholder="Example@example.com" name="email">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-sm-12">
                     <label for="email">Phone Number *</label>
                   </div>
                   <div class="col-lg-3">
                    <div class="form-group">
                      <input type="text" class="form-control RequiredField areacode" id="area_code" placeholder="AREA CODE" name="field[23]" maxlength="5" :minlength="3">
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="form-group">
                      <input type="text" class="form-control RequiredField phone" id="phone_number" placeholder="PHONE NUMBER" name="field[25]" :maxlength="15" :minlength="7">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-sm-12">
                   <label for="pwd">Date Of Birth *</label>
                 </div>
                 <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control RequiredField" id="dob" placeholder="DD / MM / YYYY" name="field[1]">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="spacer big"></div>
      
      
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group select-group">
            <label for="email">Driver License Type *</label>
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
        <div class="col-lg-4">
          <div class="form-group">
            <label for="pwd">License Number *</label>
            <input type="text" class="form-control RequiredField" id="license_number" placeholder="XXX - XXXXXXXXXX" name="field[3]" :maxlength="15" :minlength="7">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label for="pwd">License Version No. *</label>
            <input type="text" class="form-control RequiredField" id="license_version_number" placeholder="XXX - XXXXXXXXXX" name="field[4]">
          </div>
        </div>
      </div>
      
      <div class="spacer small"></div>
      
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group files-upload">
            <label for="pwd">Upload License *</label>
            <input type="file" class="form-control Required files license-upload" id="license"  name="files" multiple>
            <small class="form-text text-muted">MUST BE A CLEAR PICTURE OF THE FRONT AND BACK OF LICENSE</small>
          </div>
        </div>
      </div>
      
      <div class="spacer big"></div>
      
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <label for="pwd">Current Employer *</label>
            <input type="text" class="form-control RequiredField" id="current_employer" placeholder="XXXXXXXXXXXX" name="field[24]" >
          </div>
        </div>

        <div class="col-lg-4">
          <div class="form-group select-group">
            <label for="email">Employment Status *</label>
            <select class="form-control RequiredField" id="employment_status"  name="field[5]">
              <option value="Full-Time" >
                Full-Time
              </option>
              <option value="Part-Time" >
                Part-Time
              </option>
              <option value="Student" >
                Student
              </option>
              <option value="Work Visa" >
                Work Visa
              </option>
              <option value="Self-Employed" >
                Self-Employed
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
            <label for="pwd">Approx Earnings Per Week After Tax *</label>
            <input type="text" class="form-control RequiredField" id="approx_earning" placeholder="NZD 1000" name="field[6]">
            <small class="form-text text-muted">THIS IS BEFORE EXPENSES</small>
          </div>
        </div>
      </div>
      
      <div class="spacer small"></div>
      
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group select-group">
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
          </div>
        </div>


        <div class="col-lg-4">
          <div class="form-group">
            <label for="pwd">Job Title</label>
            <input type="text" class="form-control RequiredField" id="job_title" name="field[7]" >
          </div>
        </div>


        <div class="col-lg-4">
          <div class="form-group select-group">
            <label for="email">Credit History *</label>
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
                No Credit History
              </option>

            </select>
            <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}">
          </div>
        </div>
      </div>
      
      <div class="spacer big"></div>
      
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group select-group">
            <label for="email">Marital Status *</label>
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

        <div class="col-lg-4">
          <div class="form-group">
            <label for="pwd">Deependents Living at Home *</label>
            <input type="text" class="form-control RequiredField" id="deependents_living_at_home" placeholder="3" name="field[10]" >
          </div>
        </div>
      </div>
      
      <div class="spacer big"></div>
      
      
      <div class="row">
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
    </div>
    
    <div class="spacer small"></div>
    
    <div class="row">

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
    </div>
    
    <div class="spacer big"></div>
    
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group select-group">
          <label for="email">Property Status</label>
          <select class="form-control RequiredField" id="property_status" name="field[31]" >
            <option value="Renting" >
              Renting
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

      <div class="col-lg-4">
        <div class="form-group select-group">
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
        </div>
      </div>

      <div class="col-lg-4">
        <div class="form-group">
          <label for="pwd">Housing Expnses Per Week</label>
          <input type="text" class="form-control RequiredField" id="housing_expnses_per_week" placeholder="Rent/Board" name="field[13]" >
        </div>
      </div>
    </div>
    
    <div class="spacer big"></div>
    
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-12">
           <label for="email">Previous Address *</label>
         </div>
         <div class="col-lg-6">
          <div class="form-group">
            <input type="text" class="form-control RequiredField" id="previous_street_address1" placeholder="STREET ADDRESS" name="field[32]" >
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <input type="text" class="form-control RequiredField" id="previous_street_address2" placeholder="STREET ADDRESS 2" name="field[33]" >
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="spacer small"></div>
  
  <div class="row">

    <div class="col-lg-4">
      <div class="form-group">
        <label for="email">City *</label>
        <input type="text" class="form-control RequiredField" id="previous_city" placeholder="WELLIGTON" name="field[34]" >
      </div>
    </div>

    <div class="col-lg-4">
      <div class="form-group">
        <label for="pwd">State /Province *</label>
        <input type="text" class="form-control RequiredField" id="previous_state" placeholder="WELLIGTON" name="field[35]" >
      </div>
    </div>

    <div class="col-lg-4">
      <div class="form-group">
        <label for="pwd">Postal Zip Code *</label>
        <input type="text" class="form-control" id="previous_postal_zip_code" placeholder="XXXXX" name="field[36]" >
      </div>
    </div>
  </div>
  
  <div class="spacer big"></div>
  
  <div class="row">
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
</div>

<div class="spacer big"></div>



<div class="row">
  <div class="col-sm-12">
    <div class="form-group">
      <label for="pwd">Additional Comments</label>
      <textarea class="form-control" id="additional_comments" name="field[19]" rows="3" placeholder="PLEASE LET US KNOW IF YOU HAVE ANY OTHER LOANS /HPS /CREDIT CARD DEBTS"></textarea>
    </div>
  </div>
</div>

<div class="spacer big"></div>

<div class="row">
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
</div>
<input data-autofill="false" type="hidden" name="field[20][]" value="~|">

<div class="spacer small"></div>

<div class="row">
  <div class="col-sm-12">
    <div class="form-group">
      <!--<div class="checkbox">
        <label><input type="checkbox" value="yes" id="agree" class="agree" name="field[20][]"> By ticking this box you agree you've read and understood our terms and conditions & privacy policy</label>
      </div>-->
      <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input agree" value="yes" id="agree">
        <label class="custom-control-label" for="agree">By ticking this box you agree you've read and understood our terms and conditions & privacy policy</label>
      </div>


    </div>
  </div>
</div>


<div class="_form-thank-you" style="display:none;"></div>

<!--<button type="submit" class="btn btn-primary" id="contact-submit">Apply Now</button>-->
<div class="btn-cont">
  <p>Apply Now
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
<script src="{{ asset('site/form/applicationform.js')}}"></script>
</body>
</html>