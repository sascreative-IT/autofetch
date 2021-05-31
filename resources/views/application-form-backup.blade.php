<?php
/**
 * Created by PhpStorm.
 * User: 230i-PC
 * Date: 1/20/2020
 * Time: 11:55 AM
 */

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<div class="container">
    <h2>Application form</h2>
    <form action="" id="applicationform" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-3">
        <div class="form-group">
            <label for="email">First Name:</label>
            <input type="text" class="form-control RequiredField name" id="first_name" placeholder="Enter First Name" name="firstname">
        </div>
            </div>
            <div class="col-sm-3">
        <div class="form-group">
            <label for="pwd">Last Name:</label>
            <input type="text" class="form-control RequiredField name" id="last_name" placeholder="Enter Last Name" name="lastname">
        </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="text" class="form-control RequiredField email"  id="email" placeholder="Enter Email" name="email">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Area Code:</label>
                    <input type="text" class="form-control RequiredField areacode" id="area_code" placeholder="Enter Area Code" name="area_code" maxlength="5" :minlength="3">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Phone Number:</label>
                    <input type="text" class="form-control RequiredField phone" id="phone_number" placeholder="Enter Phone Number" name="phone_number" :maxlength="15" :minlength="7">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Date Of Birth:</label>
                    <input type="text" class="form-control RequiredField" id="dob" placeholder="DD/MM/YYYY" name="dob">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Driver License Type:</label>
                    <select class="form-control RequiredField" id="driver_license_type" >
                        <option value="">Restricted</option>
                        <option value="option1">option1</option>
                        <option value="option2">option2</option>
                        <option value="option3">option3</option>
                    </select>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">License Number:</label>
                    <input type="text" class="form-control RequiredField" id="license_number" placeholder="Enter License Number" name="license_number" :maxlength="15" :minlength="7">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">License Version Number:</label>
                    <input type="text" class="form-control RequiredField" id="license_version_number" placeholder="Enter License Version Number" name="license_version_number">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-9">
                <div class="form-group">
                    <label for="pwd">Upload License:</label>
                    <input type="file" class="form-control Required files" id="license"  name="license" multiple>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Current Employer:</label>
                    <input type="text" class="form-control RequiredField" id="current_employer" placeholder="Enter Current Employer" name="current_employer" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                <label for="email">Employment Status:</label>
                <select class="form-control RequiredField" id="employment_status" >
                    <option value="full time">Full Time</option>
                    <option value="part time">Part Time</option>

                </select>

            </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Approx Earnings Per Week After Tax:</label>
                    <input type="text" class="form-control RequiredField" id="approx_earning" placeholder="NZD 1000" name="approx_earning">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Time at Employer:</label>
                    <input type="text" class="form-control RequiredField" id="time_at_employer" placeholder="0-6months" name="time_at_employer" >
                </div>
            </div>


                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="pwd">Job Title:</label>
                        <input type="text" class="form-control RequiredField" id="job_title" placeholder="job title" name="job_title" >
                    </div>
                </div>


            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Credit History:</label>
                    <select class="form-control RequiredField" id="credit_history" >
                        <option value="good">Good</option>
                        <option value="bad">Bad</option>

                    </select>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Marital Status:</label>
                    <select class="form-control RequiredField" id="marital_status" >
                        <option value="Single">Single</option>
                        <option value="option">option</option>

                    </select>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Deependents Living at Home:</label>
                    <input type="text" class="form-control RequiredField" id="deependents_living_at_home" placeholder="Deependents Living at Home" name="deependents_living_at_home" >
                </div>
            </div>



        </div>


        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Current Address1:</label>
                    <input type="text" class="form-control RequiredField" id="street_address1" placeholder="Stress Address" name="street_address1" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Current Address 2:</label>
                    <input type="text" class="form-control RequiredField" id="street_address2" placeholder="Street Address2" name="street_address2" >
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">City:</label>
                    <input type="text" class="form-control RequiredField" id="city" placeholder="City" name="city" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">State /Province:</label>
                    <input type="text" class="form-control RequiredField" id="state" placeholder="State" name="state" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Postal Zip Code:</label>
                    <input type="text" class="form-control" id="postal_zip_code" placeholder="Postal Zip Code" name="postal_zip_code" >
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Property Status:</label>
                    <select class="form-control RequiredField" id="property_status" >
                        <option value="Renting">Renting</option>
                        <option value="Own">Own</option>

                    </select>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Time at Property:</label>
                    <select class="form-control RequiredField" id="time_at_property" >
                        <option value="06monts-1year">06monts-1year</option>
                        <option value="1year-2year">1year-2year</option>
                        <option value="more than 5 years">more than 5 years</option>

                    </select>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Housing Expnses Per Week:</label>
                    <input type="text" class="form-control RequiredField" id="housing_expnses_per_week" placeholder="Rent/Board" name="housing_expnses_per_week" >
                </div>
            </div>



        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Previous Address1:</label>
                    <input type="text" class="form-control RequiredField" id="previous_street_address1" placeholder="Stress Address" name="previous_street_address1" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Previous Address 2:</label>
                    <input type="text" class="form-control RequiredField" id="previous_street_address2" placeholder="Street Address2" name="previous_street_address2" >
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">City:</label>
                    <input type="text" class="form-control RequiredField" id="previous_city" placeholder="City" name="previous_city" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">State /Province:</label>
                    <input type="text" class="form-control RequiredField" id="previous_state" placeholder="State" name="previous_state" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Postal Zip Code:</label>
                    <input type="text" class="form-control" id="previous_postal_zip_code" placeholder="Postal Zip Code" name="previous_postal_zip_code" >
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Citizenship:</label>
                    <select class="form-control RequiredField" id="citizenship" >
                        <option value="Work visa">Work visa</option>
                        <option value="option">option</option>

                    </select>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Credit Check Approval:</label>
                    <select class="form-control RequiredField" id="credit_check_approval" >
                         <option value="option1">option1</option>
                        <option value="option2">option2</option>
                        <option value="option3">option3</option>

                    </select>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Vechicle Required:</label>
                    <input type="text" class="form-control RequiredField" id="vechicle_required" placeholder="Vechicle Required" name="vechicle_required" >
                </div>
            </div>



        </div>

        <div class="row">

     <div class="col-sm-9">
                <div class="form-group">
                    <label for="pwd">Additional Comments:</label>
                    <textarea class="form-control" id="additional_comments"></textarea>

                </div>
            </div>



        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="email">Where Did You Hear About AutoFetch</label>
                <select class="form-control RequiredField" id="hear_abt_autofetch" >
                    <option value="facebook">facebook</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>

                </select>

            </div>
        </div>


        <div class="col-sm-4">
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" value="agree" id="agree" class="agree">By Ticking This box you aggree</label>
                </div>


            </div>
        </div>




        <button type="submit" class="btn btn-primary" id="contact-submit">Apply Now</button>
        <div id="waitingMsg" style="color: #E6A833; margin-top:20px;   display:none">Please wait...</div>
    </form>
</div>
<script src="{{ asset('site/form/applicationform.js')}}"></script>
</body>
</html>
