/*  function myfunction(txt)
    {
   var type = txt.getAttribute("att");
  var vax = document.getElementById("time_at_pro").value;  
  var months1 = vax*12; 
var month2 =document.getElementById("time_at_months").value;  
 
	  var sum = parseInt(months1)+parseInt(month2);
	
	  if(sum <=24)
	  {
		  	$('#previous_add').show();
	$('#previous_add_city').show();
	  }else{
		  	$('#previous_add').hide();
	$('#previous_add_city').hide();
	  }
		  }
		  
		    function mysecfunction(txt)
    {
   var type = txt.getAttribute("att");
  var vax = document.getElementById("time_at_pro_sec").value;  
  var months1 = vax*12; 
var month2 =document.getElementById("time_at_months_sec").value;  
 
	  var sum = parseInt(months1)+parseInt(month2);
	
	  if(sum <=24)
	  {
		  	$('#secprevious_add').show();
	$('#secprevious_add_city').show();
	  }else{
		  	$('#secprevious_add').hide();
	$('#secprevious_add_city').hide();
	  }
		  }*/

$(function () {
    $("#dob").datepicker({

        changeMonth: true,
        changeYear: true,
        dateFormat: "dd/mm/yy",
        yearRange: "-55:-15"


    });

    $("#dob2").datepicker({

        changeMonth: true,
        changeYear: true,
        dateFormat: "dd/mm/yy",
        yearRange: "-55:-15"


    });
});

$(document).ready(function () {







    $('form#applicationform').submit(function (e) {
        // alert("done");
        e.preventDefault();

        $("#waitingMsg").css("display", "block");
        $("#contact-submit").prop("disabled", true);

        $('form#applicationform .error').remove();
        var hasError = false;
        $('.RequiredField').each(function () {
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

        $('#jobcat').each(function () {
            if ($.trim($(this).val()) == '') {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Required Field</div>');
                $(this).addClass('inputError');
                hasError = true;
            }
        });


        // file

        $('.Required').each(function () {
            if ($.trim($(this).val()) == '') {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Required Field</div>');
                $(this).addClass('inputError');
                hasError = true;
            }
            // } else if ($(this).hasClass('file')) {

            //     var filename = $(this).val();
            //     var extension = filename.substring(filename.lastIndexOf('.') + 1);
            //     var extensionReg = /(pdf|doc|docx)/;
            //     if (!extensionReg.test(extension)) {
            //         var labelText = $(this).prev('label').text();
            //         $(this).parent().append('<div class="error" >Invalid File Type! Only pdf and doc are accepted</div>');
            //         $(this).addClass('inputError');
            //         hasError = true;
            //     }


            // }

        });


        if ($('#agree').is(':checked')) {


        } else {

            var labelText = $(this).prev('label').text();
            $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">please check terms & conditions</div>');
            $(this).addClass('inputError');
            hasError = true;

            $('html, body').animate({
                scrollTop: $(".error").first().offset().top-300
            }, 2000);


        }


        if (!hasError) {

// alert("test 2");
            // let image_upload = new FormData();

            // let TotalImages = $('#license')[0].files.length; //Total Images
            // let license = $('#license')[0];


            var form = $('#applicationform')[0]; // You need to use standard javascript object here
            var formData = new FormData(form);


            // for (var x = 0; x < TotalImages; x++) {
            //     formData.append("files[]", license.files[x]);
            // }
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
                data: formData,
                type: 'POST',
                success: function (msg) {
                    window.location.replace("/thank-you");
                    //if(msg == 1){
                    // do something
            /*        $('#applicationform').slideUp("slow", function () {
                        $(this).before('<div class="info-af">Thank you for submitting your application with Auto Fetch. One of our experienced Auto Fetch team members will be in touch shortly to discuss your car loan application</div>');
                    });*/
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
