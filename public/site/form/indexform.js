$(document).ready(function() {
    $('form#newsletterform').submit(function(e) {
        e.preventDefault();

        $("#waitingMsgnewsletter").css("display", "block");
        $("#news-letter-contact-submit").prop("disabled", true);

        $('form#newsletterform .error').remove();
        var hasError = false;
        $('.newsletterRequiredField').each(function() {
            if ($.trim($(this).val()) == '') {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Required Field</div>');
                $(this).addClass('inputError');
                hasError = true;
            }  else if ($(this).hasClass('email')) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test($.trim($(this).val()))) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<div class="error" style="text-align:right;color:#db2032;">Invalid email</div>');
                    $(this).addClass('inputError');
                    hasError = true;
                }
            }



        });


        if (!hasError) {

            var form = $('#newsletterform')[0]; // You need to use standard javascript object here
            var formData = new FormData(form);



            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            $.ajax({

                url: "newsletter-post",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                type: 'POST',
                success: function(msg) {

                    //if(msg == 1){
                    // do something
                    $('#newsletterform').slideUp("slow", function() {
                        $(this).before('<div class="info"  style="background:#f79727; padding:12px; width:300px; margin:0 auto; text-align:center;color:#fff">Thank You For Subscribing!</div>');
                    });
                    //}

                }
            });



        } else {
            $("#news-letter-contact-submit").prop("disabled", false);
            $("#waitingMsgnewsletter").css("display", "none");
        }
        return false;
    });
});
