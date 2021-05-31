<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IFaqRepository;
use App\Models\Faq;

class FaqRepository implements IFaqRepository
{


    public function getFaqById($id)
    {
        return Faq::find($id);
    }

    public function createOrUpdate($id = null, $data = null)
    {

        if (is_null($id)) {
            // create after validation
            $faq = new Faq;
            $faq->faq_question = $data->faq_question;
            $faq->faq_answer = $data->faq_answer;
            $faq->status = $data->status;
            return $faq->save();
        } else {
            // update after validation
            $faq = Faq::find($id);
            $faq->faq_question = $data->faq_question;
            $faq->faq_answer = $data->faq_answer;
            $faq->status = $data->status;
            return $faq->save();
        }
    }

    public function deleteRecord($id)
    {
        $faq = new Faq;
        return $faq->destroy($id);
    }

    public function getAllFaqs($faq_detail)
    {
        /*dd($faq_detail->length);*/
        $search = isset($faq_detail->search['value']) ?
            $faq_detail->search['value'] : '';
        $order_by = isset($faq_detail->order) ? 'faq_question' : '';
        $order_by1 = isset($faq_detail->order) ?
            $faq_detail->order['0']['dir'] : '';


        $data = new Faq();

        if ($search) {
            $data->where('faq_question', 'like', '%' . $search . '%');
        } elseif ($faq_detail->length != -1) {
            $data->offset($faq_detail->start)
                ->limit($faq_detail->length);
        } elseif ($order_by) {
            $data->orderBy('faq_question', $order_by1);
        }

        $data = $data->get();

        $filtered_rows = $data->count();

        foreach ($data as $row) {
            $sub_array = array();
            $sub_array[] = $row->faq_question;
            $sub_array[] = $row->faq_answer;

            $class1 = "badge badge-success";
            $class2 = "badge badge-danger";
            $sub_array[] = '<div class="' .
                (($row->status == 1) ? $class1 : $class2) . '" >'
                . (($row->status == 1) ? "Active" : "Inactive") . '</div>';

            //$sub_array[] = $row->status;

            $sub_array[] = '<button type="button" name="update" id="'
                . $row->id . '" 
                            class="btn btn-outline-info waves-effect 
                            waves-light update">
                            Update</button>    
                            <button type="button" name="delete" id="'
                . $row->id . '" 
                            class="btn btn-outline-danger 
                            waves-effect waves-light delete">
                            Delete</button>';
            $data1[] = isset($sub_array)?$sub_array: '';
        }

        $output = array(
            "draw" => intval($faq_detail->draw),
            "recordsTotal" => $filtered_rows,
            "recordsFiltered" => self::getAllTotalRecords($faq_detail->id),
            "data" => isset($data1) ?$data1: ''
        );

        return $output;
    }

    public static function getAllTotalRecords()
    {
        $data = Faq::all();
        return $data->count();
    }

    public function getAllActiveFaqs()
    {
        return Faq::Where('status',1)->orderBy('order_by','asc')->get();

    }
}
