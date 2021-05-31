<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ISliderRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SliderController extends Controller
{
    private $slider = null;

    public function __construct(ISliderRepository $slider)
    {
        $this->slider = $slider;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function showSliderIndex()
    {
        $pages = $this->slider->getPages();
        return view('sliders.index', compact('pages'));
    }

    /**
     * store or update data
     *
     * @param Request $request
     * @return false|string
     */
    public function storeOrUpdateSlider(Request $request)
    {
        $store = $this->slider->createOrUpdate(isset($request->id)?$request->id:null, $request);
        return json_encode($store);
    }


    public function getSliderById(Request $request)
    {
        $pages = $this->slider->getSliderById(isset($request->id)?$request->id:null);
        return $pages;
    }


    public function getAllSliders(Request $request)
    {
        $slider_data = $this->slider->getAllSliders($request);
        return $slider_data;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function deleteSlider($id)
    {
        $deleted = $this->slider->deleteRecord($id);
        return $deleted;
    }
}
