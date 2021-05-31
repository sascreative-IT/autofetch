jQuery("#find_my_car").validate({
    rules: {
        location_name: {
            required: true
        },
        name_of_applicant: {
            required: true
        },
        phone_number: {
            required: true
        },
        transmission_type: {
            required: true
        },
        fuel_type: {
            required: true
        },
        life_style: {
            required: true
        },
        email_of_applicant: {
            required: true
        }
    },

    messages: {
        location_name: {
            required: "Please select location name"
        },
        name_of_applicant: {
            required: "Please enter name of applicant"
        },
        phone_number: {
            required: "Please enter phone number"
        },
        transmission_type: {
            required: "Please select transmission type"
        },
        fuel_type: {
            required: "Please select fuel type"
        },
        life_style: {
            required: "Please select life style"
        },
        email_of_applicant: {
            required: "Please Enter Email"
        },


    },

    submitHandler: function (form) {

        // start loaders
        var forms = $("#find_my_car");
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var paramObj = {
            location_name: $('#location_name').val(),
            name_of_applicant: $('#name_of_applicant').val(),
            last_name: $('#last_name').val(),
            phone_number: $('#phone_number').val(),
            transmission_type: $('#transmission_type').val(),
            email_of_applicant: $('#email_of_applicant').val(),
            fuel_type: $('#fuel_type').val(),
            life_style: $('#life_style').val(),
            color: $('#color').val(),
            _token: token,
        };
        console.log(paramObj);

        jQuery.ajax({
            url: forms.attr('action'),
            type: forms.attr('method'),
            data: {"paramObj": paramObj, "_token": token},
            dataType: 'json',
            cache: false,
            success: function (response) {
                console.log("Success");
                swal({

                    title: 'Whats next...',
                    type: "success",
                    html: 'Thank you for taking the time to fill out fetch my ride! You\n' +
                        'are one step closer to the car of your dreams. One of our experienced Auto Fetch team members will be in touch to\n' +
                        'discuss your vehicle and finance options within the next 24 hours otherwise to speed up the process you can apply\n' +
                        'online now!' + "<br>" +
                        '<button type="button" role="button" tabindex="0" class="SwalBtn1 customSwalBtn1">' + 'Apply Now' + '</button>'+
                        '<button type="button" role="button" tabindex="0" class="SwalBtn2 customSwalBtn1">' + 'No Thanks' + '</button>',
                    showCancelButton: false,
                    showConfirmButton: false,
                    allowOutsideClick: false

                });


                $(document).on('click', '.SwalBtn1', function () {
                    window.location.href = base_path + "/application-form";
                    swal.close();

                });


                $(document).on('click', '.SwalBtn2', function () {
                    $('#fetchModal').modal('hide');
                    $('#find_my_car')[0].reset();
                    swal.close();

                });



            }
        });
    }
});

$('.box').click(function () {

    let type = $(this).children('p.type').text()

});


$('input.numberss').keyup(function (event) {

    $('#total_load_amount_hid').val($(this).val().replace(/,/g, '').replace(/[^\d\.]/g, ''));

    // skip for arrow keys
    if (event.which >= 37 && event.which <= 40) return;

    // format number
    $(this).val(function (index, value) {
        return '$ ' + value
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            ;
    });

});
$.validator.addMethod("checkValue", function (value, element) {
    return value.replace(/,/g, '').replace(/[^\d\.]/g, '') == 'This is what gets validated!';
});
jQuery("#calculate_form").validate({
    ignore: [],
    rules: {
        total_load_amount: {
            //checkValue:true,
            required: true,

        },
    },
    messages: {
        total_load_amount: {
            checkValue: "Please Enter Value"
        },

    },

    submitHandler: function (form) {
        $('.text-danger').remove();
        let total_load_amount = $('#total_load_amount_hid').val();
        (/[^\d\.]/g, '');
        if (total_load_amount < 5000 || total_load_amount > 100000) {
            $('#total_load_amount').closest('.form-group').addClass('has-error');
            $('#total_load_amount').after('<p class="text-danger">The value should be between $ 5,000 and $ 100,000</p>');

        } else {
            $('#total_load_amount').closest('.form-group').removeClass('has-error');
            $('#total_load_amount').closest('.form-group').addClass('has-success');
            let loan_term = parseInt($('#loan_term').val()) * 4;
            let monthly_pay = 0;
            if (total_load_amount !== "" && loan_term !== "") {
                let interest = parseFloat(8.95) / parseFloat(100);
                let without_monthly_pay = parseFloat(total_load_amount) / parseFloat(loan_term);
                monthly_pay = parseFloat(without_monthly_pay) + parseFloat(without_monthly_pay) * parseFloat(interest);
                let comma_seperate = Math.round(monthly_pay);
                total_load_amount = Math.round(total_load_amount);
                $('#pay_monthly').html('$' + comma_seperate.toLocaleString());
                $('#to_loan_amount').html('FOR A $' + total_load_amount.toLocaleString() + ' LOAN');
            }
        }

    }
});





