var dataTable = $('#datatable').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: base_path + "/getAllPages",
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
        url: base_path + "/getPageById",
        method: "POST",
        data: {id: id},
        dataType: "json",
        success: function (data) {
            // console.log(data);

            $('#full-width-modal').modal('show');


            $('#page_title').val(data['pg_page_name']);
            $('#banner_type').val(data['pg_banner_type']);
            $('#slide_select').val(data['slider_id']);
            $('#banner_image_alt').val(data['pg_image_alt']);
            $('#meta_tag').val(data['pg_meta_tag']);
            $('#meta_description').val(data['page_meta_desc_tag']);
            $('#page_url').val(data['pg_url']);
            $('#status1').val(data['status']);


            $('#id').val(data['id']);
            $('#operation').val("Edit");

        }
    })
});

$('#add_button').click(function () {
    $('#full-width-modal').modal('show');
    /*    $('.pmd-card-title-text').text("Add New Item");*/
    $('#page_form')[0].reset();
    $('#id').val(null);
    $('#operation').val("Add");


});


$(document).on('submit', '#page_form', function (event) {
    $('.text-danger').remove();

    let page_title = $('#page_title').val();
    let banner_type = $('#banner_type').val();
    //let slide_select = $('#slide_select').val();
    //let banner_image = $('#banner_image').val();
    let banner_image_alt = $('#banner_image_alt').val();
    let meta_tag = $('#meta_tag').val();
    let meta_description = $('#meta_description').val();
    let page_url = $('#page_url').val();
    let status1 = $('#status1').val();


    let ids = [
        '#page_title',
        '#banner_type',
        //'#slide_select',
        //'#banner_image',
        '#banner_image_alt',
        '#meta_tag',
        '#meta_description',
        '#page_url',
        '#status1',
    ];

    let vals = [
        page_title,
        banner_type,
        //slide_select,
        //banner_image,
        banner_image_alt,
        meta_tag,
        meta_description,
        page_url,
        status1,


    ];


    let valid = true;
    for (let i = 0; i > ids.length; i++) {
        if (vals[i] == "") {
            $(ids).closest('.form-group').addClass('has-error');
            $(ids).after('<p class="text-danger">This field is required</p>');
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
            url: base_path + "/store_or_update_page",
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
                            $('#page_form')[0].reset();
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

$('#banner_type').change(function () {
    let val = $(this).val();

    if (val == "slider") {
        $('#banner_formg').fadeOut();
        $('#slider_formg').fadeIn();
    } else {
        $('#slider_formg').fadeOut();
        $('#banner_formg').fadeIn();
    }
});
