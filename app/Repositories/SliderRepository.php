<?php

namespace App\Repositories;

use App\Models\Page;
use App\Models\Slider;
use App\Repositories\Interfaces\ISliderRepository;
use Illuminate\Support\Facades\DB;

class SliderRepository implements ISliderRepository
{


    public function getPages()
    {
        $pages = Page::all();

        return $pages;
    }

    public function getSliderById($id)
    {
        return Slider::find($id);
    }

    public function createOrUpdate($id = null, $data = null)
    {

        if (!is_null($data->banner_image)) {
            $banner_image = $this->_uploadBannerImage($data);
        } else {
            $banner_image = "";
        }

        if (is_null($id)) {
            // create after validation
            $slider = new Slider();
            $slider->sl_page_id = $data->page_id;
            $slider->sl_slider_order = $data->slider_order;
            $slider->sl_banner_image = $banner_image;
            $slider->status = $data->status;
            return $slider->save();
        } else {
            // update after validation
            $slider = Slider::find($id);
            $slider->sl_page_id = $data->page_id;
            $slider->sl_slider_order = $data->slider_order;
            $slider->sl_banner_image = $banner_image;
            $slider->status = $data->status;
            return $slider->save();
        }
    }

    private function _uploadBannerImage($data)
    {

        $webimg = $data->file('banner_image');
        if (isset($webimg)) {
            $newfile = rand(10, 100)
                . 'banner_image_' . $webimg->getClientOriginalName();
            $webimg->move('Uploads/sliders/', $newfile);
        } else {
            $newfile = "NULL";
        }

        return $newfile;
    }

    public function deleteRecord($id)
    {
        $slider = new Slider();
        return $slider->destroy($id);
    }

    public function getAllSliders($slider_detail)
    {
        /*dd($slider_detail->length);*/

        $search = isset($slider_detail->search['value'])
            ? $slider_detail->search['value'] : '';
        $order_by = isset($slider_detail->order) ? '' : '';
        $order_by1 = isset($slider_detail->order) ?
            $slider_detail->order['0']['dir'] : '';


        $data = DB::table('sliders');
        $data->select('sliders.*', 'pages.*', 'pages.id as page_id', 'sliders.id as slider_id');

        $data->join('pages', 'pages.id', '=', 'sliders.sl_page_id')->get();

        if ($search) {
            $data->where('pages.pg_page_name', 'like', '%' . $search . '%');
        } elseif ($slider_detail->length != -1) {
            $data->offset($slider_detail->start)
                ->limit($slider_detail->length);
        } elseif ($order_by) {
            $data->orderBy('pages.pg_page_name', $order_by1);
        }

        $data = $data->get();

        $filtered_rows = $data->count();

        foreach ($data as $row) {
            $sub_array = array();
            $sub_array[] = $row->pg_page_name;

            $class1 = "badge badge-success";
            $class2 = "badge badge-danger";

            $sub_array[] = '<img id="myImg' . $row->slider_id . '" 
            src="' . asset('Uploads/sliders/' . $row->sl_banner_image)
                . '"style="width:50px;height:50px">';

            $sub_array[] = $row->sl_slider_order;

            $sub_array[] = '<div class="' .
                (($row->status == 1) ? $class1 : $class2) . '" >
            ' . (($row->status == 1) ? "Active" : "Inactive") . '</div>';

            $sub_array[] = '<button type="button" name="update" 
            id="' . $row->slider_id . '" 
            class="btn btn-outline-info waves-effect waves-light update">
            Update</button>
            
            <button type="button" name="delete" id="' .
                $row->slider_id . '" 
            class="btn btn-outline-danger waves-effect waves-light delete">
            Delete</button>';

            $data1[] = isset($sub_array) ?: '';
        }

        $output = array(
            "draw" => intval($slider_detail->draw),
            "recordsTotal" => $filtered_rows,
            "recordsFiltered" => self::getTotalAllRecords($slider_detail->id),
            "data" => isset($data1) ?: ''
        );

        return $output;
    }

    public static function getTotalAllRecords()
    {
        $data = Slider::all();
        return $data->count();
    }

    public function getSliderByPageId($id)
    {
        return  Slider::Where('sl_page_id',$id)->Where('status',1)->orderBy('sl_slider_order')->get();

    }
}
