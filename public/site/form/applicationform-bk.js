$(function() {
    $("#dob").datepicker({

        changeMonth: true,
        changeYear: true,
        dateFormat: "dd/mm/yy",
        yearRange: "-55:-15"


    });
});

$(document).ready(function() {
    $('form#applicationform').submit(function(e) {
        e.preventDefault();

        $("#waitingMsg").css("display", "block");
        $("#contact-submit").prop("disabled", true);

        $('form#applicationform .error').remove();
        var hasError = false;
        $('.RequiredField').each(function() {
            if ($.trim($(this).val()) == '') {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Required Field</div>');
                $(this).addClass('inputError');
                hasError = true;
            } else if ($(this).hasClass('name')) {
                var phoneReg = /[a-zA-Z]+?$/;
                if (!phoneReg.test($.trim($(this).val()))) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Invalid name</div>');
                    $(this).addClass('inputError');
                    hasError = true;
                }
            } else if ($(this).hasClass('email')) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test($.trim($(this).val()))) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Invalid email</div>');
                    $(this).addClass('inputError');
                    hasError = true;
                }
            } else if ($(this).hasClass('phone')) {
                var phoneReg = /^[+]?([0-9])+?$/;
                if (!phoneReg.test($.trim($(this).val()))) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Invalid phone number</div>');
                    $(this).addClass('inputError');
                    hasError = true;
                }

            } else if ($(this).hasClass('areacode')) {
                var phoneReg = /^[+]?([0-9])+?$/;
                if (!phoneReg.test($.trim($(this).val()))) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Invalid area code</div>');
                    $(this).addClass('inputError');
                    hasError = true;
                }

            }



        });


        //title

        $('#jobcat').each(function() {
            if ($.trim($(this).val()) == '') {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Required Field</div>');
                $(this).addClass('inputError');
                hasError = true;
            }
        });


        // file

        $('.Required').each(function() {
            if ($.trim($(this).val()) == '') {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Required Field</div>');
                $(this).addClass('inputError');
                hasError = true;
            } else if ($(this).hasClass('file')) {

                var filename = $(this).val();
                var extension = filename.substring(filename.lastIndexOf('.') + 1);
                var extensionReg = /(pdf|doc|docx)/;
                if (!extensionReg.test(extension)) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<div class="error" >Invalid File Type! Only pdf and doc are accepted</div>');
                    $(this).addClass('inputError');
                    hasError = true;
                }


            }

        });


        if ($('#agree').is(':checked')) {


        } else {

            var labelText = $(this).prev('label').text();
            $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">please check terms & conditions</div>');
            $(this).addClass('inputError');
            hasError = true;



        }


        if (!hasError) {
            let image_upload = new FormData();

            let TotalImages = $('#license')[0].files.length; //Total Images
            let license = $('#license')[0];
            //var license = document.getElementById('license').[0];

            var first_name = document.getElementById('first_name').value;
            var last_name = document.getElementById('last_name').value;
            var email = document.getElementById('email').value;
            var area_code = document.getElementById('area_code').value;

            var phone_number = document.getElementById('phone_number').value;
            var dob = document.getElementById('dob').value;
            var driver_license_type = document.getElementById('driver_license_type').value;
            var license_number = document.getElementById('license_number').value;
            var license_version_number = document.getElementById('license_version_number').value;
            var current_employer = document.getElementById('current_employer').value;
            var employment_status = document.getElementById('employment_status').value;
            var time_at_employer = document.getElementById('time_at_employer').value;
            var approx_earning = document.getElementById('approx_earning').value;
            var job_title = document.getElementById('job_title').value;
            var credit_history = document.getElementById('credit_history').value;
            var marital_status = document.getElementById('marital_status').value;
            var deependents_living_at_home = document.getElementById('deependents_living_at_home').value;
            var city = document.getElementById('city').value;
            var state = document.getElementById('state').value;
            if (document.getElementById('postal_zip_code').value == "" || document.getElementById('postal_zip_code').value == "undefined") {
                var postal_zip_code = undefined;
            } else {
                var postal_zip_code = document.getElementById('postal_zip_code').value;
            }

            var street_address1 = document.getElementById('street_address1').value;
            var street_address2 = document.getElementById('street_address2').value;
            var citizenship = document.getElementById('citizenship').value;
            var credit_check_approval = document.getElementById('credit_check_approval').value;
            var vechicle_required = document.getElementById('vechicle_required').value;
            if (document.getElementById('additional_comments').value == "" || document.getElementById('additional_comments').value == "undefined") {
                var additional_comments = "undefined";
            } else {
                var additional_comments = document.getElementById('postal_zip_code').value;
            }
            var hear_abt_autofetch = document.getElementById('hear_abt_autofetch').value;

            var property_status = document.getElementById('property_status').value;
            var time_at_property = document.getElementById('time_at_property').value;
            var housing_expnses_per_week = document.getElementById('housing_expnses_per_week').value;
            var previous_street_address1 = document.getElementById('previous_street_address1').value;
            var previous_street_address2 = document.getElementById('previous_street_address2').value;
            var previous_city = document.getElementById('previous_city').value;
            var previous_state = document.getElementById('previous_state').value;
            if (document.getElementById('previous_postal_zip_code').value == "" || document.getElementById('previous_postal_zip_code').value == "undefined") {
                var previous_postal_zip_code = undefined;
            } else {
                var previous_postal_zip_code = document.getElementById('previous_postal_zip_code').value;
            }

            var formdata = new FormData();

            formdata.append("TotalImages", TotalImages);
            formdata.append("first_name", first_name);
            formdata.append("last_name", last_name);

            formdata.append("email", email);
            formdata.append("area_code", area_code);
            formdata.append("phone_number", phone_number);
            formdata.append("dob", dob);
            formdata.append("driver_license_type", driver_license_type);
            formdata.append("license_number", license_number);
            formdata.append("license_version_number", license_version_number);
            formdata.append("current_employer", current_employer);
            formdata.append("employment_status", employment_status);
            formdata.append("approx_earning", approx_earning);
            formdata.append("time_at_employer", time_at_employer);
            formdata.append("job_title", job_title);
            formdata.append("credit_history", credit_history);
            formdata.append("marital_status", marital_status);
            formdata.append("deependents_living_at_home", deependents_living_at_home);
            formdata.append("city", city);
            formdata.append("state", state);
            formdata.append("postal_zip_code", postal_zip_code);
            formdata.append("street_address1", street_address1);
            formdata.append("street_address2", street_address2);
            formdata.append("citizenship", citizenship);
            formdata.append("credit_check_approval", credit_check_approval);
            formdata.append("vechicle_required", vechicle_required);
            formdata.append("additional_comments", additional_comments);
            formdata.append("hear_abt_autofetch", hear_abt_autofetch);
            formdata.append("property_status", property_status);
            formdata.append("time_at_property", time_at_property);
            formdata.append("housing_expnses_per_week", housing_expnses_per_week);
            formdata.append("previous_street_address1", previous_street_address1);
            formdata.append("previous_street_address2", previous_street_address2);
            formdata.append("previous_city", previous_city);
            formdata.append("previous_state", previous_state);
            formdata.append("previous_postal_zip_code", previous_postal_zip_code);




            for (var x = 0; x < TotalImages; x++) {
                formdata.append("files[]", license.files[x]);
            }
            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            $.ajax({

                url: "application-post",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: formdata,
                type: 'POST',
                success: function(msg) {

                    //if(msg == 1){
                    // do something
                    $('#applicationform').slideUp("slow", function() {
                        $(this).before('<div class="info"  style="background:#f79727; padding:12px; width:300px; margin:0 auto; text-align:center;color:#fff">Your message has been sent. <br> Thank you!</div>');
                    });
                    //}

                }
            });



        } else {
            $("#contact-submit").prop("disabled", false);
            $("#waitingMsg").css("display", "none");
        }
        return false;
    });
});
