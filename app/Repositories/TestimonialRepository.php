<?php

namespace App\Repositories;


use App\Models\Testimonial;
use App\Repositories\Interfaces\ITestimonialRepository;
use Illuminate\Support\Facades\DB;

class TestimonialRepository implements ITestimonialRepository
{
    // model property on class instances
    protected $testimonial;

    // Constructor to bind ApplicationForm to repository
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function getTestimonialById($id)
    {
        return Testimonial::find($id);
    }

    private function _uploadThumbImage($data)
    {
        $webimg = $data->file('thumb_image');
        if (isset($webimg)) {
            $new_file = rand(10, 100) . 'thumb_image_' .
                $webimg->getClientOriginalName();
            $webimg->move('uploads/thumb_image/', $new_file);
        } else {
            $new_file = "NULL";
        }

        return $new_file;
    }

    public function createOrUpdate($id = null, $data = null)
    {

        if (!is_null($data->thumb_image)) {
            $thumb_image = $this->_uploadThumbImage($data);
        } else {
            $thumb_image = "";
        }

        if (is_null($id)) {
            // create after validation
            $testimonial = new Testimonial();
            $testimonial->rate = $data->rate;
            $testimonial->description = $data->description;
            $testimonial->sort = $data->sort;
            $testimonial->thumb_image = $thumb_image;
            $testimonial->status = $data->status;
            return $testimonial->save();
        } else {
            // update after validation
            $testimonial = Testimonial::find($id);

            $testimonial->rate = $data->rate;
            $testimonial->description = $data->description;
            $testimonial->sort = $data->sort;
            $testimonial->status = $data->status;
            $testimonial->thumb_image = $thumb_image==""?$testimonial->thumb_image:$thumb_image;
            return $testimonial->save();

        }
    }



    public function deleteRecord($id)
    {
        $testimonial = new Testimonial();
        return $testimonial->destroy($id);
    }

    public function getAllTestimonials($page_detail)
    {
        /*dd($page_detail->length);*/
        $search = isset($page_detail->search['value']) ?
            $page_detail->search['value'] : '';
        $order_by = isset($page_detail->order)
            ? 'rate' : '';
        $order_by1 = isset($page_detail->order)
            ? $page_detail->order['0']['dir'] : '';


        $data = new Testimonial();

        if ($search) {
            $data->where('rate', 'like', '%' . $search . '%');
        } elseif ($page_detail->length != -1) {
            $data->offset($page_detail->start)
                ->limit($page_detail->length);
        } elseif ($order_by) {
            $data->orderBy('rate', $order_by1);
        }

        $data = $data->get();

        $filtered_rows = $data->count();

        foreach ($data as $row) {
            $sub_array = array();
            $sub_array[] = $row->rate;
            $sub_array[] =  $row->description;


            $class1 = "badge badge-success";
            $class2 = "badge badge-danger";
            $sub_array[] = '<div class="' . (($row->status == 1)
                    ? $class1 : $class2) . '" >'
                . (($row->status == 1) ? "Active" : "Inactive") . '</div>';

            //$sub_array[] = $row->status;

            $sub_array[] = '<button type="button" 
                            name="update" id="' . $row->id . '" 
            class="btn btn-outline-info waves-effect 
            waves-light update">Update</button>
            <button type="button" name="delete" id="' . $row->id . '" 
            class="btn btn-outline-danger waves-effect
             waves-light delete">Delete</button>';
            $data1[] = isset($sub_array) ? $sub_array : '';
        }

        $output = array(
            "draw" => intval($page_detail->draw),
            "recordsTotal" => $filtered_rows,
            "recordsFiltered" => self::getTotalAllRecords($page_detail->id),
            "data" => isset($data1) ? $data1 : ''
        );

        return $output;
    }

    public static function getTotalAllRecords()
    {
        $data = Testimonial::all();
        return $data->count();
    }

    public function getAllActiveTestimonials()
    {
        return Testimonial::Where('status',1)->orderBy('sort')->get();
    }
}
