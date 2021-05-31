<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IFaqRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FaqController extends Controller
{

    protected $faq = null;

    public function __construct(IFaqRepository $faq)
    {
        $this->faq = $faq;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$faqs = $this->faq->getAllFaqs();
        return view('faq_pages.index');
    }

    /**
     * store or update data
     *
     * @param Request $request
     */
    public function storeOrUpdate(Request $request)
    {
        $this->faq->createOrUpdate($id = isset($request->id)?$request->id:null, $request);
    }


    public function getFaqById(Request $request)
    {
            $faqs = $this->faq->getFaqById(isset($request->id)?$request->id:null());
            return $faqs;
    }


    public function getAllFaqs(Request $request)
    {
        $faq_data = $this->faq->getAllFaqs($request);
        return $faq_data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        $deleted = $this->faq->deleteRecord($id);
        return $deleted;
    }
}
