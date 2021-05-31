<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ITestimonialRepository;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $testimonial = null;

    public function __construct(ITestimonialRepository $testimonial)
    {
        $this->testimonial = $testimonial;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeTestimonial(Request $request)
    {

        $store = $this->testimonial->createOrUpdate(isset($request->id)?$request->id:null, $request);
        return json_encode($store);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function deleteTestimonial($id)
    {
        $deleted = $this->testimonial->deleteRecord($id);
        return $deleted;
    }

    public function getAllTestimonials(Request $request)
    {
        $testimonial_data = $this->testimonial->getAllTestimonials($request);
        return $testimonial_data;
    }

    public function getTestimonialById(Request $request)
    {
        $testimonial = $this->testimonial->getTestimonialById(isset($request->id)?$request->id:null);
        return $testimonial;
    }
}
