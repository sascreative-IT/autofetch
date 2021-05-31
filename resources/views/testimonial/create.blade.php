<div class="wrapper">
    <div class="container">
        <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
             aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
            <form id="testimonialform" method="post" action="{{ url('store_testimonial') }}">

                {{ csrf_field() }}
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="full-width-modalLabel">Testimonial</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="latitude">Rate<span class="text-danger">*</span></label>
                                <input type="text" name="rate" parsley-trigger="change" required
                                       class="form-control" id="rate" placeholder="Rate">

                            </div>

                            <input type="hidden" name="operation" parsley-trigger="change" required
                                   class="form-control" id="operation">
                            <input type="hidden" name="id" parsley-trigger="change" required
                                   class="form-control" id="id">
                            <div class="form-group">
                                <label for="latitude">Description <span class="text-danger">*</span></label>
                                <textarea rows="4" cols="50" name="description" parsley-trigger="change" required
                                          class="form-control" id="description" placeholder="Description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="location_type_status">Status<span class="text-danger">*</span></label>
                                <select class="form-control" name="status" id="status1">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="latitude">Sort<span class="text-danger">*</span></label>
                                <input type="text" name="sort" parsley-trigger="change" required
                                       class="form-control" id="sort" placeholder="Sort">

                            </div>

                            <div class="form-group" id="banner_formg" >
                                <label for="latitude">Thumbnail<span class="text-danger">*</span></label>
                                <input type="file" class="dropify" data-max-file-size="3M" name="thumb_image" id="thumb_image"/>
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




