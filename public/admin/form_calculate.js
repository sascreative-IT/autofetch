jQuery("#finance_quote_form").validate({
    rules: {
        amount_borrow: {
            required: true
        },
        terms_borrow: {
            required: true
        },
        vehicle_make: {
            required: true
        },
        vehicle_model: {
            required: true
        },
        condition: {
            required: true
        },
        first_name:{
            required: true
        },
        last_name:{
            required: true
        },
        user_email:{
            required: true,
            email: true
        },
        phone_number:{
            required: true,
            number: true,
        minlength:6,
        maxlength:20
        },
    },

    messages: {
        amount_borrow: {
            required: "Please enter amount"
        },
        terms_borrow: {
            required: "Please select terms"
        },
        vehicle_make: {
            required: "Please select vehicle make"
        },
        vehicle_model: {
            required: "Please select vehicle model"
        },
        condition: {
            required: "Please select condition of vehicle"
        },
         first_name: {
            required: "Please enter first name"
        },
        last_name: {
            required: "Please enter last name"
        },
        user_email: {
            required: "Please enter email address"
        },
        phone_number: {
            required: "Please enter phone number"
        },

    },

    submitHandler: function (form) {
if ($("#finance_quote_form").valid()) {
        // start loaders
        var forms = $("#finance_quote_form");
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var paramObj = {
            amount_borrow: $('#amount_borrow').val(),
            terms_borrow: $('#terms_borrow').val(),
            vehicle_make: $('#vehicle_make option:selected').text(),
            vehicle_model: $('#vehicle_model').val(),
            first_name: $('#first_name').val(),
            last_name: $('#last_name').val(),
            user_email: $('#user_email').val(),
            phone_number: $('#phone_number').val(),
            condition: $('#condition').val(),
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

                let quotes = $('#quote').val();
                if (quotes == 1) {
                    $('#quote').val(0);

                } else {

                    window.location.href = base_path + "/application-form";
                }


            }
        });
    }
    }
});

$('.box').click(function () {

    let type = $(this).children('p.type').text()

});


$('#vehicle_make').change(function () {
    var id = $(this).val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax
    ({
        type: "POST",
        url: base_path + "/vehicle_model_get",
        data: {"id": id, "_token": token},
        success: function (data) {

            $('#vehicle_model').empty().append($('<option>', {
                value: '',
                text: 'Select One'
            }));


            for (var i = 0; i < data.length; i++) {


                $('#vehicle_model').append('</option><option value="' + data[i].title + '">' + data[i].title + '</option>');

            }
            $('#vehicle_model').append($('<option>', {
                value: 'other',
                text: 'other'
            }));
        }
    });
});


$('input.numbers_new').keyup(function (event) {

    $('#amount_borrow_hid').val($(this).val().replace(/,/g, '').replace(/[^\d\.]/g, ''));

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


$('#calculate_payment').on('click', function () {
    $('.text-danger').remove();
    let total_load_amount = $('#amount_borrow_hid').val();
    (/[^\d\.]/g, '');
    if (total_load_amount < 5000 || total_load_amount > 100000) {
        $('#amount_borrow').closest('.form-group').addClass('has-error');
        $('#amount_borrow').after('<p class="text-danger">The value should be between $ 5,000 and $ 100,000</p>');

    } else {
        $('#amount_borrow').closest('.form-group').removeClass('has-error');
        $('#amount_borrow').closest('.form-group').addClass('has-success');
        let loan_term = $('#terms_borrow').val();
        let monthly_pay = 0;
        if (total_load_amount !== "" && loan_term !== "") {
            let interest = parseFloat(8.95) / parseFloat(100);
            let without_monthly_pay = parseFloat(total_load_amount) / parseFloat(loan_term);
            monthly_pay = parseFloat(without_monthly_pay) + parseFloat(without_monthly_pay) * parseFloat(interest);
            let comma_seperate = Math.round(monthly_pay);
            total_load_amount = Math.round(total_load_amount);
            let weekly = Math.round(monthly_pay) / 4;
            let fortnightly = Math.round(monthly_pay) / 2;
            let monthly = Math.round(monthly_pay);
            $('#total_price_week').html('$' + weekly.toLocaleString());
            $('#total_price_fortnight').html('$' + fortnightly.toLocaleString());
            $('#total_price_month').html('$' + monthly.toLocaleString());
            $('.loan_amount_holder').html('FOR A $' + total_load_amount.toLocaleString() + ' LOAN');
            $('#quote').val(1);
            $("#finance_quote_form").submit();
        }
    }
});



