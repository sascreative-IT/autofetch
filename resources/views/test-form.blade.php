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

            <input type="hidden" name="u" value="5" />
            <input type="hidden" name="f" value="5" />
            <input type="hidden" name="s" />
            <input type="hidden" name="c" value="0" />
            <input type="hidden" name="m" value="0" />
            <input type="hidden" name="act" value="sub" />
            <input type="hidden" name="v" value="2" />
        <div class="row">
            <div class="col-sm-3">
        <div class="form-group">
            <label for="email">First Name:</label>
            <input type="text" class="form-control RequiredField name" id="first_name" placeholder="Enter First Name" name="field[21]">
        </div>
            </div>
            <div class="col-sm-3">
        <div class="form-group">
            <label for="pwd">Last Name:</label>
            <input type="text" class="form-control RequiredField name" id="last_name" placeholder="Enter Last Name" name="field[22]">
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
                    <input type="text" class="form-control RequiredField areacode" id="area_code" placeholder="Enter Area Code" name="field[23]" maxlength="5" :minlength="3">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Phone Number:</label>
                    <input type="text" class="form-control RequiredField phone" id="phone_number" placeholder="Enter Phone Number" name="field[25]" :maxlength="15" :minlength="7">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Date Of Birth:</label>
                    <input type="text" class="form-control RequiredField" id="dob" placeholder="DD/MM/YYYY" name="field[1]">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Driver License Type:</label>
                    <select class="form-control RequiredField" id="driver_license_type" name="field[2]" >
                        <option selected>
                        </option>
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

                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">License Number:</label>
                    <input type="text" class="form-control RequiredField" id="license_number" placeholder="Enter License Number" name="field[3]" :maxlength="15" :minlength="7">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">License Version Number:</label>
                    <input type="text" class="form-control RequiredField" id="license_version_number" placeholder="Enter License Version Number" name="field[4]">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-9">
                <div class="form-group">
                    <label for="pwd">Upload License:</label>
                    <input type="file" class="form-control Required files" id="license"  name="files" multiple>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Current Employer:</label>
                    <input type="text" class="form-control RequiredField" id="current_employer" placeholder="Enter Current Employer" name="field[24]" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                <label for="email">Employment Status:</label>
                <select class="form-control RequiredField" id="employment_status"  name="field[5]">

                        <option selected>
                        </option>
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

            </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Approx Earnings Per Week After Tax:</label>
                    <input type="text" class="form-control RequiredField" id="approx_earning" placeholder="NZD 1000" name="field[6]">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Time at Employer:</label>
                    <select name="field[8]" class="form-control RequiredField">
                        <option selected>
                        </option>
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

                </div>
            </div>


                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="pwd">Job Title:</label>
                        <input type="text" class="form-control RequiredField" id="job_title" placeholder="job title" name="field[7]" >
                    </div>
                </div>


            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Credit History:</label>
                    <select class="form-control RequiredField" id="credit_history" name="field[16]" >
                        <option selected>
                        </option>
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

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Marital Status:</label>
                    <select class="form-control RequiredField" id="marital_status" name="field[9]">
                        <option selected>
                        </option>
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

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Deependents Living at Home:</label>
                    <input type="text" class="form-control RequiredField" id="deependents_living_at_home" placeholder="Deependents Living at Home" name="field[10]" >
                </div>
            </div>



        </div>


        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Current Address1:</label>
                    <input type="text" class="form-control RequiredField" id="street_address1" placeholder="Stress Address" name="field[26]" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Current Address 2:</label>
                    <input type="text" class="form-control RequiredField" id="street_address2" placeholder="Street Address2" name="field[27]" >
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">City:</label>
                    <input type="text" class="form-control RequiredField" id="city" placeholder="City" name="field[28]" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">State /Province:</label>
                    <input type="text" class="form-control RequiredField" id="state" placeholder="State" name="field[29]" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Postal Zip Code:</label>
                    <input type="text" class="form-control" id="postal_zip_code" placeholder="Postal Zip Code" name="field[30]" >
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Property Status:</label>
                    <select class="form-control RequiredField" id="property_status" name="field[31]" >
                        <option selected>
                        </option>
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

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Time at Property:</label>
                    <select class="form-control RequiredField" id="time_at_property" name="field[12]" >

                            <option selected>
                            </option>
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

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Housing Expnses Per Week:</label>
                    <input type="text" class="form-control RequiredField" id="housing_expnses_per_week" placeholder="Rent/Board" name="field[13]" >
                </div>
            </div>



        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Previous Address1:</label>
                    <input type="text" class="form-control RequiredField" id="previous_street_address1" placeholder="Stress Address" name="field[32]" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Previous Address 2:</label>
                    <input type="text" class="form-control RequiredField" id="previous_street_address2" placeholder="Street Address2" name="field[33]" >
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">City:</label>
                    <input type="text" class="form-control RequiredField" id="previous_city" placeholder="City" name="field[34]" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">State /Province:</label>
                    <input type="text" class="form-control RequiredField" id="previous_state" placeholder="State" name="field[35]" >
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Postal Zip Code:</label>
                    <input type="text" class="form-control" id="previous_postal_zip_code" placeholder="Postal Zip Code" name="field[36]" >
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Citizenship:</label>
                    <select class="form-control RequiredField" id="citizenship" name="field[15]" data-name="citizenship">
                         <option selected>
                            </option>
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

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="email">Credit Check Approval:</label>
                    <select class="form-control RequiredField" id="credit_check_approval" name="field[18]" >
                        <option selected>
                        </option>
                        <option value="Yes" >
                            Yes
                        </option>
                        <option value="No" >
                            No
                        </option>

                    </select>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="pwd">Vechicle Required:</label>
                    <select name="field[17]" class="form-control RequiredField" id="vechicle_required">
                        <option selected>
                        </option>
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

                </div>
            </div>



        </div>

        <div class="row">

     <div class="col-sm-9">
                <div class="form-group">
                    <label for="pwd">Additional Comments:</label>
                    <textarea class="form-control" id="additional_comments" name="field[19]"></textarea>

                </div>
            </div>



        </div>

        <div class="col-sm-4">
            <div class="form-group">
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

            </div>
        </div>
            <input data-autofill="false" type="hidden" name="field[20][]" value="~|">

        <div class="col-sm-4">
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" value="yes" id="agree" class="agree" name="field[20][]">By Ticking This box you aggree</label>
                </div>


            </div>
        </div>


            <div class="_form-thank-you" style="display:none;"></div>

        <button type="submit" class="btn btn-primary" id="contact-submit">Apply Now</button>
        <div id="waitingMsg" style="color: #E6A833; margin-top:20px;   display:none">Please wait...</div>
    </form>
</div>
<script src="{{ asset('site/form/applicationform.js')}}"></script>
{{--<script type="text/javascript">--}}
    {{--window.cfields = {"1":"date_of_birth","2":"driver_license_type","3":"driver_license_number","4":"driver_license_version_number","5":"employment_status","6":"approx_earnings_per_week_after_tax_before_expenses","7":"job_title","8":"time_at_current_employer_if_applicable","9":"marital_status","10":"dependents_living_at_home","11":"address","12":"time_at_property","13":"housing_expenses_per_week","14":"previous_address","15":"citizenship","16":"credit_history","17":"vehicle_required","18":"credit_check_approval","19":"any_additional_comments","20":"i_agree_to_the_terms_conditions"};--}}
    {{--window._show_thank_you = function(id, message, trackcmp_url) {--}}
        {{--var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');--}}
        {{--form.querySelector('._form-content').style.display = 'none';--}}
        {{--thank_you.innerHTML = message;--}}
        {{--thank_you.style.display = 'block';--}}
        {{--if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {--}}
            {{--// Site tracking URL to use after inline form submission.--}}
            {{--_load_script(trackcmp_url);--}}
        {{--}--}}
        {{--if (typeof window._form_callback !== 'undefined') window._form_callback(id);--}}
    {{--};--}}
    {{--window._show_error = function(id, message, html) {--}}
        {{--var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');--}}
        {{--if (old_error) old_error.parentNode.removeChild(old_error);--}}
        {{--err.innerHTML = message;--}}
        {{--err.className = '_error-inner _form_error _no_arrow';--}}
        {{--var wrapper = document.createElement('div');--}}
        {{--wrapper.className = '_form-inner';--}}
        {{--wrapper.appendChild(err);--}}
        {{--button.parentNode.insertBefore(wrapper, button);--}}
        {{--document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;--}}
        {{--if (html) {--}}
            {{--var div = document.createElement('div');--}}
            {{--div.className = '_error-html';--}}
            {{--div.innerHTML = html;--}}
            {{--err.appendChild(div);--}}
        {{--}--}}
    {{--};--}}
    {{--window._load_script = function(url, callback) {--}}
        {{--var head = document.querySelector('head'), script = document.createElement('script'), r = false;--}}
        {{--script.type = 'text/javascript';--}}
        {{--script.charset = 'utf-8';--}}
        {{--script.src = url;--}}
        {{--if (callback) {--}}
            {{--script.onload = script.onreadystatechange = function() {--}}
                {{--if (!r && (!this.readyState || this.readyState == 'complete')) {--}}
                    {{--r = true;--}}
                    {{--callback();--}}
                {{--}--}}
            {{--};--}}
        {{--}--}}
        {{--head.appendChild(script);--}}
    {{--};--}}
    {{--(function() {--}}
        {{--if (window.location.search.search("excludeform") !== -1) return false;--}}
        {{--var getCookie = function(name) {--}}
            {{--var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));--}}
            {{--return match ? match[2] : null;--}}
        {{--}--}}
        {{--var setCookie = function(name, value) {--}}
            {{--var now = new Date();--}}
            {{--var time = now.getTime();--}}
            {{--var expireTime = time + 1000 * 60 * 60 * 24 * 365;--}}
            {{--now.setTime(expireTime);--}}
            {{--document.cookie = name + '=' + value + '; expires=' + now + ';path=/';--}}
        {{--}--}}
        {{--var addEvent = function(element, event, func) {--}}
            {{--if (element.addEventListener) {--}}
                {{--element.addEventListener(event, func);--}}
            {{--} else {--}}
                {{--var oldFunc = element['on' + event];--}}
                {{--element['on' + event] = function() {--}}
                    {{--oldFunc.apply(this, arguments);--}}
                    {{--func.apply(this, arguments);--}}
                {{--};--}}
            {{--}--}}
        {{--}--}}
        {{--var _removed = false;--}}
        {{--var form_to_submit = document.getElementById('_form_1_');--}}
        {{--var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;--}}

        {{--var getUrlParam = function(name) {--}}
            {{--var regexStr = '[\?&]' + name + '=([^&#]*)';--}}
            {{--var results = new RegExp(regexStr, 'i').exec(window.location.href);--}}
            {{--return results != undefined ? decodeURIComponent(results[1]) : false;--}}
        {{--};--}}

        {{--for (var i = 0; i < allInputs.length; i++) {--}}
            {{--var regexStr = "field\\[(\\d+)\\]";--}}
            {{--var results = new RegExp(regexStr).exec(allInputs[i].name);--}}
            {{--if (results != undefined) {--}}
                {{--allInputs[i].dataset.name = window.cfields[results[1]];--}}
            {{--} else {--}}
                {{--allInputs[i].dataset.name = allInputs[i].name;--}}
            {{--}--}}
            {{--var fieldVal = getUrlParam(allInputs[i].dataset.name);--}}

            {{--if (fieldVal) {--}}
                {{--if (allInputs[i].dataset.autofill === "false") {--}}
                    {{--continue;--}}
                {{--}--}}
                {{--if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {--}}
                    {{--if (allInputs[i].value == fieldVal) {--}}
                        {{--allInputs[i].checked = true;--}}
                    {{--}--}}
                {{--} else {--}}
                    {{--allInputs[i].value = fieldVal;--}}
                {{--}--}}
            {{--}--}}
        {{--}--}}

        {{--var remove_tooltips = function() {--}}
            {{--for (var i = 0; i < tooltips.length; i++) {--}}
                {{--tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);--}}
            {{--}--}}
            {{--tooltips = [];--}}
        {{--};--}}
        {{--var remove_tooltip = function(elem) {--}}
            {{--for (var i = 0; i < tooltips.length; i++) {--}}
                {{--if (tooltips[i].elem === elem) {--}}
                    {{--tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);--}}
                    {{--tooltips.splice(i, 1);--}}
                    {{--return;--}}
                {{--}--}}
            {{--}--}}
        {{--};--}}
        {{--var create_tooltip = function(elem, text) {--}}
            {{--var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};--}}
            {{--if (elem.type != 'radio' && elem.type != 'checkbox') {--}}
                {{--tooltip.className = '_error';--}}
                {{--arrow.className = '_error-arrow';--}}
                {{--inner.className = '_error-inner';--}}
                {{--inner.innerHTML = text;--}}
                {{--tooltip.appendChild(arrow);--}}
                {{--tooltip.appendChild(inner);--}}
                {{--elem.parentNode.appendChild(tooltip);--}}
            {{--} else {--}}
                {{--tooltip.className = '_error-inner _no_arrow';--}}
                {{--tooltip.innerHTML = text;--}}
                {{--elem.parentNode.insertBefore(tooltip, elem);--}}
                {{--new_tooltip.no_arrow = true;--}}
            {{--}--}}
            {{--new_tooltip.tip = tooltip;--}}
            {{--new_tooltip.elem = elem;--}}
            {{--tooltips.push(new_tooltip);--}}
            {{--return new_tooltip;--}}
        {{--};--}}
        {{--var resize_tooltip = function(tooltip) {--}}
            {{--var rect = tooltip.elem.getBoundingClientRect();--}}
            {{--var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));--}}
            {{--if (scrollPosition < 40) {--}}
                {{--tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';--}}
            {{--} else {--}}
                {{--tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';--}}
            {{--}--}}
        {{--};--}}
        {{--var resize_tooltips = function() {--}}
            {{--if (_removed) return;--}}
            {{--for (var i = 0; i < tooltips.length; i++) {--}}
                {{--if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);--}}
            {{--}--}}
        {{--};--}}
        {{--var validate_field = function(elem, remove) {--}}
            {{--var tooltip = null, value = elem.value, no_error = true;--}}
            {{--remove ? remove_tooltip(elem) : false;--}}
            {{--if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');--}}
            {{--if (elem.getAttribute('required') !== null) {--}}
                {{--if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {--}}
                    {{--var elems = form_to_submit.elements[elem.name];--}}
                    {{--if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {--}}
                        {{--no_error = elem.checked;--}}
                    {{--}--}}
                    {{--else {--}}
                        {{--no_error = false;--}}
                        {{--for (var i = 0; i < elems.length; i++) {--}}
                            {{--if (elems[i].checked) no_error = true;--}}
                        {{--}--}}
                    {{--}--}}
                    {{--if (!no_error) {--}}
                        {{--tooltip = create_tooltip(elem, "Please select an option.");--}}
                    {{--}--}}
                {{--} else if (elem.type =='checkbox') {--}}
                    {{--var elems = form_to_submit.elements[elem.name], found = false, err = [];--}}
                    {{--no_error = true;--}}
                    {{--for (var i = 0; i < elems.length; i++) {--}}
                        {{--if (elems[i].getAttribute('required') === null) continue;--}}
                        {{--if (!found && elems[i] !== elem) return true;--}}
                        {{--found = true;--}}
                        {{--elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');--}}
                        {{--if (!elems[i].checked) {--}}
                            {{--no_error = false;--}}
                            {{--elems[i].className = elems[i].className + ' _has_error';--}}
                            {{--err.push("Checking %s is required".replace("%s", elems[i].value));--}}
                        {{--}--}}
                    {{--}--}}
                    {{--if (!no_error) {--}}
                        {{--tooltip = create_tooltip(elem, err.join('<br/>'));--}}
                    {{--}--}}
                {{--} else if (elem.tagName == 'SELECT') {--}}
                    {{--var selected = true;--}}
                    {{--if (elem.multiple) {--}}
                        {{--selected = false;--}}
                        {{--for (var i = 0; i < elem.options.length; i++) {--}}
                            {{--if (elem.options[i].selected) {--}}
                                {{--selected = true;--}}
                                {{--break;--}}
                            {{--}--}}
                        {{--}--}}
                    {{--} else {--}}
                        {{--for (var i = 0; i < elem.options.length; i++) {--}}
                            {{--if (elem.options[i].selected && !elem.options[i].value) {--}}
                                {{--selected = false;--}}
                            {{--}--}}
                        {{--}--}}
                    {{--}--}}
                    {{--if (!selected) {--}}
                        {{--elem.className = elem.className + ' _has_error';--}}
                        {{--no_error = false;--}}
                        {{--tooltip = create_tooltip(elem, "Please select an option.");--}}
                    {{--}--}}
                {{--} else if (value === undefined || value === null || value === '') {--}}
                    {{--elem.className = elem.className + ' _has_error';--}}
                    {{--no_error = false;--}}
                    {{--tooltip = create_tooltip(elem, "This field is required.");--}}
                {{--}--}}
            {{--}--}}
            {{--if (no_error && elem.name == 'email') {--}}
                {{--if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {--}}
                    {{--elem.className = elem.className + ' _has_error';--}}
                    {{--no_error = false;--}}
                    {{--tooltip = create_tooltip(elem, "Enter a valid email address.");--}}
                {{--}--}}
            {{--}--}}
            {{--if (no_error && /date_field/.test(elem.className)) {--}}
                {{--if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {--}}
                    {{--elem.className = elem.className + ' _has_error';--}}
                    {{--no_error = false;--}}
                    {{--tooltip = create_tooltip(elem, "Enter a valid date.");--}}
                {{--}--}}
            {{--}--}}
            {{--tooltip ? resize_tooltip(tooltip) : false;--}}
            {{--return no_error;--}}
        {{--};--}}
        {{--var needs_validate = function(el) {--}}
            {{--return el.name == 'email' || el.getAttribute('required') !== null;--}}
        {{--};--}}
        {{--var validate_form = function(e) {--}}
            {{--var err = form_to_submit.querySelector('._form_error'), no_error = true;--}}
            {{--if (!submitted) {--}}
                {{--submitted = true;--}}
                {{--for (var i = 0, len = allInputs.length; i < len; i++) {--}}
                    {{--var input = allInputs[i];--}}
                    {{--if (needs_validate(input)) {--}}
                        {{--if (input.type == 'text') {--}}
                            {{--addEvent(input, 'blur', function() {--}}
                                {{--this.value = this.value.trim();--}}
                                {{--validate_field(this, true);--}}
                            {{--});--}}
                            {{--addEvent(input, 'input', function() {--}}
                                {{--validate_field(this, true);--}}
                            {{--});--}}
                        {{--} else if (input.type == 'radio' || input.type == 'checkbox') {--}}
                            {{--(function(el) {--}}
                                {{--var radios = form_to_submit.elements[el.name];--}}
                                {{--for (var i = 0; i < radios.length; i++) {--}}
                                    {{--addEvent(radios[i], 'click', function() {--}}
                                        {{--validate_field(el, true);--}}
                                    {{--});--}}
                                {{--}--}}
                            {{--})(input);--}}
                        {{--} else if (input.tagName == 'SELECT') {--}}
                            {{--addEvent(input, 'change', function() {--}}
                                {{--validate_field(this, true);--}}
                            {{--});--}}
                        {{--} else if (input.type == 'textarea'){--}}
                            {{--addEvent(input, 'input', function() {--}}
                                {{--validate_field(this, true);--}}
                            {{--});--}}
                        {{--}--}}
                    {{--}--}}
                {{--}--}}
            {{--}--}}
            {{--remove_tooltips();--}}
            {{--for (var i = 0, len = allInputs.length; i < len; i++) {--}}
                {{--var elem = allInputs[i];--}}
                {{--if (needs_validate(elem)) {--}}
                    {{--if (elem.tagName.toLowerCase() !== "select") {--}}
                        {{--elem.value = elem.value.trim();--}}
                    {{--}--}}
                    {{--validate_field(elem) ? true : no_error = false;--}}
                {{--}--}}
            {{--}--}}
            {{--if (!no_error && e) {--}}
                {{--e.preventDefault();--}}
            {{--}--}}
            {{--resize_tooltips();--}}
            {{--return no_error;--}}
        {{--};--}}
        {{--addEvent(window, 'resize', resize_tooltips);--}}
        {{--addEvent(window, 'scroll', resize_tooltips);--}}
        {{--window._old_serialize = null;--}}
        {{--if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;--}}
        {{--_load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {--}}
            {{--window._form_serialize = window.serialize;--}}
            {{--if (window._old_serialize) window.serialize = window._old_serialize;--}}
        {{--});--}}
        {{--_load_script("//cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js", function() {--}}
            {{--_load_script("//d3rxaij56vjege.cloudfront.net/pikaday/1.3.3/pikaday.js", function() {--}}
                {{--var dates = form_to_submit.querySelectorAll('.date_field');--}}
                {{--for (var i = 0; i < dates.length; i++) {--}}
                    {{--(function(date) {--}}
                        {{--var val = picker = null;--}}
                        {{--picker = new Pikaday({ field: date, yearRange: 100, onSelect: function(d) { date.value = moment(d).format('YYYY-MM-DD'); } });--}}
                    {{--})(dates[i]);--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
        {{--var form_submit = function(e) {--}}
            {{--e.preventDefault();--}}
            {{--if (validate_form()) {--}}
                {{--// use this trick to get the submit button & disable it using plain javascript--}}
                {{--document.querySelector('#_form_1_submit').disabled = true;--}}
                {{--var serialized = _form_serialize(document.getElementById('_form_1_'));--}}
                {{--var err = form_to_submit.querySelector('._form_error');--}}
                {{--err ? err.parentNode.removeChild(err) : false;--}}
                {{--_load_script('https://autofetch.activehosted.com/proc.php?' + serialized + '&jsonp=true');--}}
            {{--}--}}
            {{--return false;--}}
        {{--};--}}
        {{--addEvent(form_to_submit, 'submit', form_submit);--}}
    {{--})();--}}

{{--</script>--}}
</body>
</html>
