<?php

namespace App\Repositories;

use App\Models\Page;
use App\Repositories\Interfaces\IPageRepository;

class PageRepository implements IPageRepository
{


    public function getPageById($id)
    {
        return Page::find($id);
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
            $page = new Page();
            $page->pg_page_name = $data->page_title;
            $page->pg_banner_type = $data->banner_type;
            $page->slider_id = $data->slide_select;
            $page->pg_image_path = $banner_image;
            $page->pg_image_alt = $data->banner_image_alt;
            $page->pg_meta_tag = $data->meta_tag;
            $page->page_meta_desc_tag = $data->meta_description;
            $page->pg_url = $data->page_url;
            $page->status = $data->status;
            return $page->save();
        } else {
            // update after validation
            $page = Page::find($id);
            $page->pg_page_name = $data->page_title;
            $page->pg_banner_type = $data->banner_type;
            $page->slider_id = $data->slide_select;
            $page->pg_image_path = $banner_image==""?$page->pg_image_path:$banner_image;
            $page->pg_image_alt = $data->banner_image_alt;
            $page->pg_meta_tag = $data->meta_tag;
            $page->page_meta_desc_tag = $data->meta_description;
            $page->pg_url = $data->page_url;
            $page->status = $data->status;
            return $page->save();
        }
    }

    private function _uploadBannerImage($data)
    {
        $webimg = $data->file('banner_image');
        if (isset($webimg)) {
            $new_file = rand(10, 100) . 'banner_image_' .
                $webimg->getClientOriginalName();
            $webimg->move('uploads/banner_image/', $new_file);
        } else {
            $new_file = "NULL";
        }

        return $new_file;
    }

    public function deleteRecord($id)
    {
        $page = new Page();
        return $page->destroy($id);
    }

    public function getAllPages($page_detail)
    {
        /*dd($page_detail->length);*/
        $search = isset($page_detail->search['value']) ?
            $page_detail->search['value'] : '';
        $order_by = isset($page_detail->order)
            ? 'pg_page_name' : '';
        $order_by1 = isset($page_detail->order)
            ? $page_detail->order['0']['dir'] : '';


        $data = new Page();

        if ($search) {
            $data->where('pg_page_name', 'like', '%' . $search . '%');
        } elseif ($page_detail->length != -1) {
            $data->offset($page_detail->start)
                ->limit($page_detail->length);
        } elseif ($order_by) {
            $data->orderBy('pg_page_name', $order_by1);
        }

        $data = $data->get();

        $filtered_rows = $data->count();

        foreach ($data as $row) {
            $sub_array = array();
            $sub_array[] = $row->pg_page_name;


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
        $data = Page::all();
        return $data->count();
    }

    public function getPageByUrl($url)
    {
        return Page::Where('pg_url',$url)->Where('status',1)->first();
    }
}
