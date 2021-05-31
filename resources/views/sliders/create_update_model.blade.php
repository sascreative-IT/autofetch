<div class="wrapper">
    <div class="container">
        <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
             aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
            <form id="slider_form" method="post" action="" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="full-width-modalLabel">Sliders</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="location_type_status">Page Name<span class="text-danger">*</span></label>
                                <select class="form-control" name="page_id" id="page_id">
                                    <option value="">--Select Preferred--</option>
                                    @foreach($pages as $page)
                                        <option value="{{$page->id}}">{{$page->pg_page_name}}</option>
                                    @endforeach
                                </select>

                                <input type="hidden" name="operation" parsley-trigger="change" required
                                       class="form-control" id="operation">
                                <input type="hidden" name="id" parsley-trigger="change" required
                                       class="form-control" id="id">

                            </div>


                            <div class="form-group" id="banner_formg">
                                <label for="latitude">Page Banner Image<span class="text-danger">*</span></label>
                                <input type="file" class="dropify" data-max-file-size="3M" name="banner_image"
                                       id="banner_image"/>
                            </div>

                            <div class="form-group">
                                <label for="latitude">Slider Order<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="slider_order" id="slider_order"
                                       placeholder="Slider Order"/>
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




