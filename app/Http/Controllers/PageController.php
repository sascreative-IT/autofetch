<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IPageRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageController extends Controller
{
    private $page = null;

    public function __construct(IPageRepository $page)
    {
        $this->page = $page;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('main_pages.index');
    }

    /*
   * store or update data
   */
    public function storeOrUpdatePage(Request $request)
    {
        $store = $this->page->createOrUpdate($id = isset($request->id)?$request->id:null, $request);
        return json_encode($store);
    }


    public function getPageById(Request $request)
    {
        $pages = $this->page->getPageById(isset($request->id)?$request->id:null);
        return $pages;
    }


    public function getAllPages(Request $request)
    {

        $page_data = $this->page->getAllPages($request);

        return $page_data;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        $deleted = $this->page->deleteRecord($id);
        return $deleted;
    }
}
