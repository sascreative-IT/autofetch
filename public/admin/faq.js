var dataTable = $('#datatable').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: base_path + "/getAllFaqs",
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
        url: base_path + "/getFaqById",
        method: "POST",
        data: {id: id},
        dataType: "json",
        success: function (data) {
            // console.log(data);

            $('#full-width-modal').modal('show');

            $('#id').val(data['id']);
            $('#faq_question').val(data['faq_question']);
            $('#faq_answer').val(data['faq_answer']);
            $('#status').val(data['status']);
            $('#operation').val("Edit");

        }
    })
});

$('#add_button').click(function () {
    $('#full-width-modal').modal('show');
    /*    $('.pmd-card-title-text').text("Add New Item");*/
    $('#faq_form')[0].reset();

    $('#operation').val("Add");
    $('#id').val(null);


});


$(document).on('submit', '#faq_form', function (event) {
    $('.text-danger').remove();


    let faq_question = $('#faq_question').val();
    let faq_answer = $('#faq_answer').val();
    let status = $('#status1').val();

    let ids = ['#faq_question', '#faq_answer', '#status1'];
    let vals = [faq_question, faq_answer, status];


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
            url: base_path+"/store_or_update",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                let inser=$('#operation').val();
                if (inser=="Add") {
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
                            $('#faq_form')[0].reset();
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
                url: base_path+"/faq" + "/" + id,
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


