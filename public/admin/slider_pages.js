var dataTable = $('#datatable').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: base_path + "/getAllSliders",
        type: "POST",
        data: {"_token": token}
    },
    "columnDefs": [
        {
            "targets": [0, 1],
            "orderable": false
        },
    ],

});

$(document).on('click', '.update', function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var id = $(this).attr("id");
    $.ajax({
        url: base_path + "/getSlidersById",
        method: "POST",
        data: {id: id},
        dataType: "json",
        success: function (data) {
            // console.log(data);

            $('#full-width-modal').modal('show');


            $('#page_id').val(data['sl_page_id']);
            //$('#banner_image').val(data['banner_image']);
            $('#slider_order').val(data['sl_slider_order']);
            $('#status1').val(data['status']);

     

            $('#id').val(data['id']);
            $('#operation').val("Edit");

        }
    })
});

$('#add_button').click(function () {
    $('#full-width-modal').modal('show');
    /*    $('.pmd-card-title-text').text("Add New Item");*/
    $('#slider_form')[0].reset();
    $('#id').val(null);
    $('#operation').val("Add");


});


$(document).on('submit', '#slider_form', function (event) {
    $('.text-danger').remove();

    let banner_type = $('#banner_type').val();
    let banner_image = $('#banner_image').val();
    let slider_order = $('#slider_order').val();
    let status1 = $('#status1').val();




    let ids = [
        '#banner_type',
        '#banner_image',
        '#slider_order',
        '#status1',
    ];

    let vals = [
        banner_type,
        banner_image,
        slider_order,
        status1,
    ];


    let valid = true;
    for (let i = 0; i > ids.length; i++) {

        if (vals[i] == "") {
            $(ids).closest('.form-group').addClass('has-error');
            $(ids).after('<p class="text-danger">This feild is required</p>');
            valid = false;
        } else {

            $(ids).closest('.form-group').removeClass('has-error');
            $(ids).closest('.form-group').addClass('has-success');
        }


    }

    if (valid == true) {

        $('#actions').attr('disabled', 'disabled');


        event.preventDefault();
        var data = new FormData(this);
        console.log(data);
        $.ajax({
            url: base_path + "/store_or_update_slider",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                let inser = $('#operation').val();
                if (inser == "Add") {
                    Swal.fire({
                        title: 'Data Saved Successfully',
                        text: "Do you want to add another record?",
                        type: 'success',
                        showCancelButton: true,
                        confirmButtonText: 'Exit',
                        cancelButtonText: 'Yes',
                        confirmButtonClass: 'btn btn-danger mt-2 new-class',
                        cancelButtonClass: 'btn  btn-warning ml-2 mt-2',
                        buttonsStyling: false
                    }).then(function (result) {
                        if (result.dismiss === Swal.DismissReason.cancel) {
                            $('#slider_form')[0].reset();
                        } else {

                            $('#full-width-modal').modal('toggle');
                        }
                    });
                } else {
                    Swal.fire(
                        {
                            title: 'Success',
                            text: 'Data Saved Succssfully',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        }
                    )
                    $('#full-width-modal').modal('toggle');
                }

                dataTable.ajax.reload();


            }
        });
    }
    return false;

});


$(document).on('click', '.delete', function () {
    var id = $(this).attr("id");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then(function (result) {

            if (result.value) {

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: id,
                        _method: 'DELETE'
                    },
                    url: base_path + "/page" + "/" + id,
                    success: function (data) {
                        Swal.fire(
                            {
                                title: 'Success',
                                text: 'Data Deleted Succssfully',
                                type: 'success',
                                confirmButtonClass: 'btn btn-confirm mt-2'
                            }
                        );
                        dataTable.ajax.reload();
                    }
                });
            }
        },
        function () {
            return false;
        });
});
