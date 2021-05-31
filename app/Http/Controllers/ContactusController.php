<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IContactusFormRepository;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    protected $contactus;

    public function __construct(IContactusFormRepository $contactusform)
    {
        $this->contactusform = $contactusform;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactus-form');
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
            'full_name'    => $request->fullname,
            'email'        => $request->email,
            'phone_number' => $request->field[25],
            'message'      => $request->field[39],
            );

        return $this->contactusform->create($data_array);
    }


}
