<div class="wrapper">
    <div class="container">
        <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
             aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
            <form id="page_form" method="post" action="" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="full-width-modalLabel">Main Pages</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="latitude">Page Title<span class="text-danger">*</span></label>
                                <input type="text" name="page_title" parsley-trigger="change" required
                                       class="form-control" id="page_title" placeholder="Page Title">


                                <input type="hidden" name="operation" parsley-trigger="change" required
                                       class="form-control" id="operation" >
                                <input type="hidden" name="id" parsley-trigger="change" required
                                       class="form-control" id="id" >
                            </div>


                            <div class="form-group">
                                <label for="location_type_status">Banner Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="banner_type" id="banner_type">
                                    <option value="">--Select Preferred--</option>
                                    <option value="image">Image</option>
                                    <option value="slider">Slider</option>
                                </select>
                            </div>


                            <div class="form-group" id="slider_formg" style="display: none">
                                <label for="location_type_status">Select Slider<span class="text-danger">*</span></label>
                                <select class="form-control" name="slide_select" id="slide_select">
                                    <option value="1">Slider 1</option>
                                    <option value="2">Slider 2</option>
                                </select>
                            </div>


                            <div class="form-group" id="banner_formg" style="display: none">
                                <label for="latitude">Page Banner Image<span class="text-danger">*</span></label>
                                <input type="file" class="dropify" data-max-file-size="3M" name="banner_image" id="banner_image"/>
                            </div>


                            <div class="form-group">
                                <label for="latitude">Banner Image Alt<span class="text-danger">*</span></label>
                                <input type="text"  class="form-control" name="banner_image_alt" id="banner_image_alt" placeholder="Banner Image Alt"/>
                            </div>

                            <div class="form-group">
                                <label for="latitude">Meta Tag<span class="text-danger">*</span></label>
                                <input type="text" name="meta_tag" parsley-trigger="change" required
                                          class="form-control" id="meta_tag" placeholder="Meta Tag">
                            </div>

                            <div class="form-group">
                                <label for="latitude">Meta Description<span class="text-danger">*</span></label>
                                <textarea rows="4" cols="50" name="meta_description" parsley-trigger="change" required
                                          class="form-control" id="meta_description" placeholder="Meta Description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="latitude">Page URL<span class="text-danger">*</span></label>
                                <input type="text" name="page_url" parsley-trigger="change" required
                                          class="form-control" id="page_url" placeholder="Page URL">
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




