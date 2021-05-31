<div class="wrapper">
    <div class="container">
        <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
             aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
            <form id="faq_form" method="post" action="{{ route('faq.store') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="full-width-modalLabel">FAQ</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="latitude">FAQ Question<span class="text-danger">*</span></label>
                                <input type="text" name="faq_question" parsley-trigger="change" required
                                       class="form-control" id="faq_question" placeholder="FAQ Question">


                                <input type="hidden" name="operation" parsley-trigger="change" required
                                       class="form-control" id="operation" >
                                <input type="hidden" name="id" parsley-trigger="change" required
                                       class="form-control" id="id" >
                            </div>
                            <div class="form-group">
                                <label for="latitude">FAQ Answer<span class="text-danger">*</span></label>
                                <textarea rows="4" cols="50" name="faq_answer" parsley-trigger="change" required
                                          class="form-control" id="faq_answer" placeholder="FAQ Answer"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="location_type_status">Status<span class="text-danger">*</span></label>
                                <select class="form-control" name="status" id="status1">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="form-group text-right m-b-0">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                    Submit
                                </button>
                                <button data-dismiss="modal" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </form>
        </div><!-- /.modal -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->




