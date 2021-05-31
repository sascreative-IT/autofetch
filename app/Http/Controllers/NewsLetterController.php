<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\INewsLetterRepository;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    protected $newsLetter;

    public function __construct(INewsLetterRepository $newsLetter)
    {
        $this->newsLetter = $newsLetter;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_array = array(
          'email'        => $request->email,
        );

        return $this->newsLetter->create($data_array);
    }


}
