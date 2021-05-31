<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IApplicationFormRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;
class ApplicationFormController extends Controller
{
    protected $applicationform;

    public function __construct(IApplicationFormRepository $applicationform)
    {
        $this->applicationform = $applicationform;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('application-form');
    }

    public function indexFormSubmit(Request $request)
    {

        Session::put('application_datas', json_encode($request->paramObj));
        Cookie::queue('application_data', json_encode($request->paramObj), 120);
        //return $this->applicationform->create_api();
         return $this->applicationform->indexfrm_send_email();
       // return 1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// dd($request);
        $object=  Cookie::get('application_data');
        $object_quota=  Cookie::get('application_quote_data');
        $first_form_data=json_decode($object);
        $second_form_data=json_decode($object_quota);
        //dd($second_form_data);
        $public_url = public_path();
        //images
        // $licenseimages = array();
        // $seturl = array();
        // if ($files = $request->file('files')) {
        //     foreach ($files as $file) {
        //         $newfile = rand(456, 987) . time() . $file->getClientOriginalName();
        //         $file->move('images', $newfile);
        //         $licenseimages[] = $newfile;
        //         $seturl[] =$public_url.'/'.$newfile;

        //     }
        // }

     // change the date format
          // $array_convertstring = implode(',', $array_items)
        $date = str_replace("/","-",$request->field[1]);
        $newDate = date("Y-m-d", strtotime($date));

            // set the data into array
            $data_array = array(
                'name_title' => $request->name_title,
                'first_name' => $request->field[21],
                'last_name' => $request->field[22],
                'gender'=>$request->field[56],
                'email' => $request->email,
                'area_code' => $request->field[23],
                'phone_number' => $request->field[25],
                'best_contact_time'=>$request->field[57],
                //'best_contact_number'=>$request->field[59],
                'dob' => $newDate,
                'driver_license_type' => $request->field[2],
                'license_number' => $request->field[3],
                'license_version_number' => $request->field[4],
                // 'license' => json_encode($licenseimages),
                'current_employer' => $request->field[24],
                'employment_status' => $request->field[5],
                'approx_earning' => $request->field[6],
                'time_at_employer' => $request->field[8],
                // 'job_title' => $request->field[7],

                'working_year' => $request->field[61],
                'working_month' => $request->field[62],
                
                'credit_history' => $request->field[16],
                'marital_status' => $request->field[9],
                'deependents_living_at_home' => $request->field[10],
                'street_address1' => $request->field[26],
                // 'street_address2' => $request->field[27],
                'city' => $request->field[28],
                // 'state' => $request->field[29],
                // 'postal_zip_code' => $request->field[30],
                // 'citizenship' => $request->field[15],
                // 'credit_check_approval' => $request->field[18],
                // 'vechicle_required' => $request->field[17],
                'additional_comments' => $request->field[19],
                // 'hear_abt_autofetch' => $request->field[37],
                'property_status' => $request->field[31],
                // 'time_at_property' => $request->field[12],
                'time_at_property-years'=>$request->field[55],
                'time_at_property-months'=>$request->field[64],
                'housing_expnses_per_week' => $request->field[13],
                'previous_street_address1' => $request->field[32],
                'previous_street_address2' => $request->field[33],
                'previous_city' => $request->field[34],
                'previous_state' => $request->field[35],
                'previous_postal_zip_code' => $request->field[36],


            );
             $date2 = str_replace("/","-",$request->field[70]);
        $newDate2 = date("Y-m-d", strtotime($date));

            // set the data into array
            $data_array2 = array(
                'name_title2' => $request->name_title2,
                'first_name' => $request->field[65],
                'last_name' => $request->field[66],
                'gender'=>$request->field[73],
                'email' => $request->field[67],
                'area_code' => $request->field[68],
                'phone_number' => $request->field[69],
                'best_contact_time'=>$request->field[77],
                //'best_contact_number'=>$request->field[79],
                'dob' => $newDate2,
                'driver_license_type' => $request->field[74],
                'license_number' => $request->field[75],
                'license_version_number' => $request->field[76],
                'current_employer' => $request->field[80],
                'employment_status' => $request->field[81],
                'approx_earning' => $request->field[82],
                'time_at_employer' => $request->field[85],
                'working_year' => $request->field[83],
                'working_month' => $request->field[84],
                'credit_history' => $request->field[99],
                'marital_status' => $request->field[86],
                'deependents_living_at_home' => $request->field[87],
                'street_address1' => $request->field[88],
                'city' => $request->field[89],
                'additional_comments' => $request->field[100],
                'property_status' => $request->field[90],
                'time_at_property-years'=>$request->field[91],
                'time_at_property-months'=>$request->field[92],
                'housing_expnses_per_week' => $request->field[93],
                'previous_street_address1' => $request->field[94],
                'previous_street_address2' => $request->field[95],
                'previous_city' => $request->field[96],
                'previous_state' => $request->field[97],
                'previous_postal_zip_code' => $request->field[98],


            );
            // dd($data_array2);
           return $this->applicationform->create($data_array,$data_array2);

        }

      public function test()
      {
          return view('test-form');
      }

    public function getVehicleModel(Request $request)
    {
        $models=DB::table('model')->where('make_id',$request->id)->get();


        return response()->json($models);
    }

    public function financeQuoteSubmit(Request $request)
    {
        Session::put('application_quote_datas', json_encode($request->paramObj));

        Cookie::queue('application_quote_data', json_encode($request->paramObj), 120);
        //return $this->applicationform->finance_quote();
        return $this->applicationform->finance_quote_send_email();
    }

}
