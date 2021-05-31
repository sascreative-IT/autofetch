$(function() {
    $("#dob").datepicker({

        changeMonth: true,
        changeYear: true,
        dateFormat: "dd/mm/yy",
        yearRange: "-55:-15"


    });
});

$(document).ready(function() {
    $('form#contactusid').submit(function(e) {
        e.preventDefault();

        $("#waitingMsg").css("display", "block");
        $("#contact-submit").prop("disabled", true);

        $('form#contactusid .error').remove();
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





        if (!hasError) {













            var form = $('#contactusid')[0]; // You need to use standard javascript object here
            var formData = new FormData(form);



            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            $.ajax({

                url: "contactus-post",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                type: 'POST',
                success: function(msg) {

                    //if(msg == 1){
                    // do something
                    $('#contactusid').slideUp("slow", function() {
                        $(this).before('<div class="info"  style="background:#01b3cf; padding:12px; width:300px; margin:0 auto; text-align:center;color:#fff">Your message has been sent. <br> Thank you!</div>');
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
