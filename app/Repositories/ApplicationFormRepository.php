<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IApplicationFormRepository;
use App\Models\ApplicationForm;
use App\Models\ApplicationSecondForm;
use App\Models\FindMyCar;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Mail;

class ApplicationFormRepository implements IApplicationFormRepository
{
    // model property on class instances
    protected $applicationform;

    // Constructor to bind ApplicationForm to repository
    public function __construct(
        ApplicationForm $applicationform,
        ApplicationSecondForm $applicationsecondform,
        FindMyCar $findmycar
    ) {
        $this->applicationform = $applicationform;
        $this->applicationsecondform = $applicationsecondform;
        $this->findmycar = $findmycar;
    }

    public function create(array $data, array $dat2)
    {
       ini_set('max_execution_time', 180); //3 minutes
        // dd($dat2);
        $this->applicationform->create($data);
        $this->applicationsecondform->create($dat2);

       // return $this->connect_api($data, $dat2);

         return $this->send_email($data, $dat2);
    }

    public function connect_api(array $data, array $dat2)
    {

        //passing frm vales
        $object = Session::get('application_datas');
        $first_form_data = json_decode($object);


        $object_quota = Cookie::get('application_quote_data');
        $second_form_data = json_decode($object_quota);

        // get global varibles
        $activecampaign = config('services.activecampaign');
        $api_url = $activecampaign['url'];
        $api_key = $activecampaign['key'];
        $url = $api_url;
        $params = array(
            'api_key' => $api_key,
            // this is the action that adds a contact
            'api_action' => 'contact_sync', //'contact_add',
            'api_output' => 'serialize',
        );
       // dd($data);
        Session::put('first_name_applicant',  $data['first_name']);
        // here we define the data we are posting in order to perform an update
        $post = array(
            'field[113]' => $data['name_title'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'field[21]' => $data['first_name'],
            'field[22]' => $data['last_name'],
            'field[56]' => $data['gender'],
            'field[23]' => $data['area_code'],
            'field[25]' => $data['phone_number'],

            'field[57]' => $data['best_contact_time'],
           // 'field[59]' => $data['best_contact_number'],

            'field[1]' => $data['dob'],
            'field[2]' => $data['driver_license_type'],
            'field[3]' => $data['license_number'],
            'field[4]' => $data['license_version_number'],
            'field[24]' => $data['current_employer'],
            'field[5]' => $data['employment_status'],
            'field[6]' => $data['approx_earning'],
            'field[8]' => $data['time_at_employer'],
            // 'field[7]'                  =>$data['job_title'],

            'field[61]' => $data['working_year'],
            'field[62]' => $data['working_month'],

            'field[16]' => $data['credit_history'],
            'field[9]' => $data['marital_status'],
            'field[10]' => $data['deependents_living_at_home'],
            'field[26]' => $data['street_address1'],
            // 'field[27]'                =>$data['street_address2'],
            'field[28]' => $data['city'],
            // 'field[29]'                =>$data['state'],
            // 'field[30]'                =>$data['postal_zip_code'],
            'field[31]' => $data['property_status'],
            // 'field[12]'                =>$data['time_at_property'],
            'field[55]' => $data['time_at_property-years'],
            'field[64]' => $data['time_at_property-months'],

            'field[13]' => $data['housing_expnses_per_week'],
            'field[32]' => $data['previous_street_address1'],
            'field[33]' => $data['previous_street_address2'],
            'field[34]]' => $data['previous_city'],
            'field[35]' => $data['previous_state'],
            'field[36]' => $data['previous_postal_zip_code'],
            // 'field[15]'                =>$data['citizenship'],
            // 'field[18]'                =>$data['credit_check_approval'],
            // 'field[17]'                =>$data['vechicle_required'],
            'field[19]' => $data['additional_comments'],
            // 'field[37]'                =>$data['hear_abt_autofetch'],
            // 'field[38]'                =>$data['license'],

            'field[40]' => isset($first_form_data->location_name) ? $first_form_data->location_name : '',
            'field[41]' => isset($first_form_data->name_of_applicant) ? $first_form_data->name_of_applicant : '',
            'field[42]' => isset($first_form_data->phone_number) ? $first_form_data->phone_number : '',
            'field[43]' => isset($first_form_data->transmission_type) ? $first_form_data->transmission_type : '',
            'field[44]' => isset($first_form_data->fuel_type) ? $first_form_data->fuel_type : '',
            'field[45]' => isset($first_form_data->life_style) ? $first_form_data->life_style : '',
            'field[46]' => isset($first_form_data->color) ? $first_form_data->color : '',

            'field[47]' => isset($second_form_data->amount_borrow) ? $second_form_data->amount_borrow : '',
            'field[48]' => isset($second_form_data->terms_borrow) ? $second_form_data->terms_borrow : '',
            'field[52]' => isset($second_form_data->vehicle_make) ? $second_form_data->vehicle_make : '',
            'field[53]' => isset($second_form_data->vehicle_model) ? $second_form_data->vehicle_model : '',
            'field[54]' => isset($second_form_data->condition) ? $second_form_data->condition : '',


            'status[123]' => 1, // 1: active, 2: unsubscribed (REPLACE '123' WITH ACTUAL LIST ID, IE: status[5] = 1)
            'form' => 5, // Subscription Form ID, to inherit those redirection settings
        );



        // This section takes the input fields and converts them to the proper format
        $query = "";
        foreach ($params as $key => $value) {
            $query .= urlencode($key) . '=' . urlencode($value) . '&';
        }
        $query = rtrim($query, '& ');

// This section takes the input data and converts it to the proper format
        $data = "";
        foreach ($post as $key => $value) {
            $data .= urlencode($key) . '=' . urlencode($value) . '&';
        }
        $data = rtrim($data, '& ');

// clean up the url
        $url = rtrim($url, '/ ');

// This sample code uses the CURL library for php to establish a connection,
// submit your request, and show (print out) the response.
        if (!function_exists('curl_init')) {
            die('CURL not supported. (introduced in PHP 4.0.2)');
        }

// If JSON is used, check if json_decode is present (PHP 5.2.0+)
        if ($params['api_output'] == 'json' && !function_exists('json_decode')) {
            die('JSON not supported. (introduced in PHP 5.2.0)');
        }

// define a final API request - GET
        $api = $url . '/admin/api.php?' . $query;

        $request = curl_init($api); // initiate curl object
        curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
        curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
//curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
        curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

        $response = (string)curl_exec($request); // execute curl post and store results in $response

// additional options may be required depending upon your server configuration
// you can find documentation on curl options at http://www.php.net/curl_setopt
        curl_close($request); // close curl object

        if (!$response) {
            die('Nothing was returned. Do you have a connection to Email Marketing server?');
        }

// This line takes the response and breaks it into an array using:
// JSON decoder
//$result = json_decode($response);
// unserializer
        $result = unserialize($response);
// XML parser...
// ...

// Result info that is always returned
        'Result: ' . ($result['result_code'] ? 'SUCCESS' : 'FAILED') . '<br />';
        'Message: ' . $result['result_message'] . '<br />';

        //return $result;


        $post_2 = array(
            'field[113]' => isset($dat2['name_title2']) ? $dat2['name_title2'] : '',
            'first_name' => isset($dat2['first_name']) ? $dat2['first_name'] : '',
            'last_name' => isset($dat2['last_name']) ? $dat2['last_name'] : '',

            'email' => $dat2['email'],

            'field[21]' => isset($dat2['first_name']) ? $dat2['first_name'] : '',
            'field[22]' => isset($dat2['last_name']) ? $dat2['last_name'] : '',
            'field[56]' => isset($dat2['gender']) ? $dat2['gender'] : '',
            'field[23]' => isset($dat2['area_code']) ? $dat2['area_code'] : '',
            'field[25]' => isset($dat2['phone_number']) ? $dat2['phone_number'] : '',

            'field[57]' => isset($dat2['best_contact_time']) ? $dat2['best_contact_time'] : '',
           // 'field[59]' => isset($dat2['best_contact_number']) ? $dat2['best_contact_number'] : '',

            'field[1]' => isset($dat2['dob']) ? $dat2['dob'] : '',
            'field[2]' => isset($dat2['driver_license_type']) ? $dat2['driver_license_type'] : '',
            'field[3]' => isset($dat2['license_number']) ? $dat2['license_number'] : '',
            'field[4]' => isset($dat2['license_version_number']) ? $dat2['license_version_number'] : '',
            'field[24]' => isset($dat2['current_employer']) ? $dat2['current_employer'] : '',
            'field[5]' => isset($dat2['employment_status']) ? $dat2['employment_status'] : '',
            'field[6]' => isset($dat2['approx_earning']) ? $dat2['approx_earning'] : '',
            'field[8]' => isset($dat2['time_at_employer']) ? $dat2['time_at_employer'] : '',
            // 'field[7]'                  =>$data['job_title'],

            'field[61]' => isset($dat2['working_year']) ? $dat2['working_year'] : '',
            'field[62]' => isset($dat2['working_month']) ? $dat2['working_month'] : '',

            'field[16]' => isset($dat2['credit_history']) ? $dat2['credit_history'] : '',
            'field[9]' => isset($dat2['marital_status']) ? $dat2['marital_status'] : '',
            'field[10]' => isset($dat2['deependents_living_at_home']) ? $dat2['deependents_living_at_home'] : '',
            'field[26]' => isset($dat2['street_address1']) ? $dat2['street_address1'] : '',
            // 'field[27]'                =>$data['street_address2'],
            'field[28]' => isset($dat2['city']) ? $dat2['city'] : '',
            // 'field[29]'                =>$data['state'],
            // 'field[30]'                =>$data['postal_zip_code'],
            'field[31]' => isset($dat2['property_status']) ? $dat2['property_status'] : '',
            // 'field[12]'                =>$data['time_at_property'],
            'field[55]' => isset($dat2['time_at_property-years']) ? $dat2['time_at_property-years'] : '',
            'field[64]' => isset($dat2['time_at_property-months']) ? $dat2['time_at_property-months'] : '',

            'field[13]' => isset($dat2['housing_expnses_per_week']) ? $dat2['housing_expnses_per_week'] : '',
            'field[32]' => isset($dat2['previous_street_address1']) ? $dat2['previous_street_address1'] : '',
            'field[33]' => isset($dat2['previous_street_address2']) ? $dat2['previous_street_address2'] : '',
            'field[34]]' => isset($dat2['previous_city']) ? $dat2['previous_city'] : '',
            'field[35]' => isset($dat2['previous_state']) ? $dat2['previous_state'] : '',
            'field[36]' => isset($dat2['previous_postal_zip_code']) ? $dat2['previous_postal_zip_code'] : '',
            // 'field[15]'                =>$data['citizenship'],
            // 'field[18]'                =>$data['credit_check_approval'],
            // 'field[17]'                =>$data['vechicle_required'],
            'field[19]' => isset($dat2['additional_comments']) ? $dat2['additional_comments'] : '',
            // 'field[37]'                =>$data['hear_abt_autofetch'],
            // 'field[38]'                =>$data['license'],

            'field[40]' => isset($first_form_data->location_name) ? $first_form_data->location_name : '',
            'field[41]' => isset($first_form_data->name_of_applicant) ? $first_form_data->name_of_applicant : '',
            'field[42]' => isset($first_form_data->phone_number) ? $first_form_data->phone_number : '',
            'field[43]' => isset($first_form_data->transmission_type) ? $first_form_data->transmission_type : '',
            'field[44]' => isset($first_form_data->fuel_type) ? $first_form_data->fuel_type : '',
            'field[45]' => isset($first_form_data->life_style) ? $first_form_data->life_style : '',
            'field[46]' => isset($first_form_data->color) ? $first_form_data->color : '',

            'field[47]' => isset($second_form_data->amount_borrow) ? $second_form_data->amount_borrow : '',
            'field[48]' => isset($second_form_data->terms_borrow) ? $second_form_data->terms_borrow : '',
            'field[52]' => isset($second_form_data->vehicle_make) ? $second_form_data->vehicle_make : '',
            'field[53]' => isset($second_form_data->vehicle_model) ? $second_form_data->vehicle_model : '',
            'field[54]' => isset($second_form_data->condition) ? $second_form_data->condition : '',


            'status[123]' => 1, // 1: active, 2: unsubscribed (REPLACE '123' WITH ACTUAL LIST ID, IE: status[5] = 1)
            'form' => 5, // Subscription Form ID, to inherit those redirection settings
        );


        if (isset($dat2['email'])) {
// This section takes the input data and converts it to the proper format
            $data_2 = "";
            foreach ($post_2 as $key_2 => $value_2) {
                $data_2 .= urlencode($key_2) . '=' . urlencode($value_2) . '&';
            }
            $data_2 = rtrim($data_2, '& ');


            $request_2 = curl_init($api); // initiate curl object
            curl_setopt($request_2, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
            curl_setopt($request_2, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
            curl_setopt($request_2, CURLOPT_POSTFIELDS, $data_2); // use HTTP POST to send form data
//curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
            curl_setopt($request_2, CURLOPT_FOLLOWLOCATION, true);

            $response_2 = (string)curl_exec($request_2); // execute curl post and store results in $response

// additional options may be required depending upon your server configuration
// you can find documentation on curl options at http://www.php.net/curl_setopt
            curl_close($request_2); // close curl object

            if (!$response_2) {
                die('Nothing was returned. Do you have a connection to Email Marketing server?');
            }

// This line takes the response and breaks it into an array using:
// JSON decoder
//$result = json_decode($response);
// unserializer
            $result_2 = unserialize($response_2);
// XML parser...
// ...
        }

// Result info that is always returned
        'Result: ' . ($result['result_code'] ? 'SUCCESS' : 'FAILED') . '<br />';
        'Message: ' . $result['result_message'] . '<br />';
        if (isset($dat2['email'])) {
            'Result2: ' . ($result_2['result_code'] ? 'SUCCESS' : 'FAILED') . '<br />';
            'Message2: ' . $result_2['result_message'] . '<br />';
            //return $result;
        }
        if (isset($dat2['email'])) {
            return compact('result', 'result_2');
        } else {
            return compact('result');
        }

    }

    public function create_api()
    {
        //passing frm vales
        $object = Session::get('application_datas');
        $first_form_data = json_decode($object);
        //dd($first_form_data);

        //$object_quota = Cookie::get('application_quote_data');
      //  $second_form_data = json_decode($object_quota);

        // get global varibles
        $activecampaign = config('services.activecampaign');
        $api_url = $activecampaign['url'];
        $api_key = $activecampaign['key'];
        $url = $api_url;
        $params = array(
            'api_key' => $api_key,
            // this is the action that adds a contact
            'api_action' => 'contact_sync', //'contact_add',
            'api_output' => 'serialize',
        );


        // here we define the data we are posting in order to perform an update
        $post = array(

           'first_name' => isset($first_form_data->name_of_applicant) ? $first_form_data->name_of_applicant : '',
            'last_name' => isset($first_form_data->last_name) ? $first_form_data->last_name : '',
            'email' => isset($first_form_data->email_of_applicant) ? $first_form_data->email_of_applicant : '',

            'field[25]' => isset($first_form_data->phone_number) ? $first_form_data->phone_number : '',
            'field[40]' => isset($first_form_data->location_name) ? $first_form_data->location_name : '',
            'field[41]' => isset($first_form_data->name_of_applicant) ? $first_form_data->name_of_applicant : '',
            'field[42]' => isset($first_form_data->phone_number) ? $first_form_data->phone_number : '',
            'field[43]' => isset($first_form_data->transmission_type) ? $first_form_data->transmission_type : '',
            'field[44]' => isset($first_form_data->fuel_type) ? $first_form_data->fuel_type : '',
            'field[45]' => isset($first_form_data->life_style) ? $first_form_data->life_style : '',
            'field[46]' => isset($first_form_data->color) ? $first_form_data->color : '',



            'status[123]' => 1, // 1: active, 2: unsubscribed (REPLACE '123' WITH ACTUAL LIST ID, IE: status[5] = 1)
            'form' => 5, // Subscription Form ID, to inherit those redirection settings
        );

        // This section takes the input fields and converts them to the proper format
        $query = "";
        foreach ($params as $key => $value) {
            $query .= urlencode($key) . '=' . urlencode($value) . '&';
        }
        $query = rtrim($query, '& ');

// This section takes the input data and converts it to the proper format
        $data = "";
        foreach ($post as $key => $value) {
            $data .= urlencode($key) . '=' . urlencode($value) . '&';
        }
        $data = rtrim($data, '& ');

// clean up the url
        $url = rtrim($url, '/ ');

// This sample code uses the CURL library for php to establish a connection,
// submit your request, and show (print out) the response.
        if (!function_exists('curl_init')) {
            die('CURL not supported. (introduced in PHP 4.0.2)');
        }

// If JSON is used, check if json_decode is present (PHP 5.2.0+)
        if ($params['api_output'] == 'json' && !function_exists('json_decode')) {
            die('JSON not supported. (introduced in PHP 5.2.0)');
        }

// define a final API request - GET
        $api = $url . '/admin/api.php?' . $query;

        $request = curl_init($api); // initiate curl object
        curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
        curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
//curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
        curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

        $response = (string)curl_exec($request); // execute curl post and store results in $response

// additional options may be required depending upon your server configuration
// you can find documentation on curl options at http://www.php.net/curl_setopt
        curl_close($request); // close curl object

        if (!$response) {
            die('Nothing was returned. Do you have a connection to Email Marketing server?');
        }

// This line takes the response and breaks it into an array using:
// JSON decoder
//$result = json_decode($response);
// unserializer
        $result = unserialize($response);
// XML parser...
// ...

// Result info that is always returned
        'Result: ' . ($result['result_code'] ? 'SUCCESS' : 'FAILED') . '<br />';
        'Message: ' . $result['result_message'] . '<br />';

        //return $result;



        return compact('result');

    }

    public function finance_quote()
    {
        //passing frm vales
        //$object = Cookie::get('application_data');
        //$first_form_data = json_decode($object);
        //dd($first_form_data);

        $object_quota = Session::get('application_quote_datas');
        $second_form_data = json_decode($object_quota);

        // get global varibles
        $activecampaign = config('services.activecampaign');
        $api_url = $activecampaign['url'];
        $api_key = $activecampaign['key'];
        $url = $api_url;
        $params = array(
            'api_key' => $api_key,
            // this is the action that adds a contact
            'api_action' => 'contact_sync', //'contact_add',
            'api_output' => 'serialize',
        );


        // here we define the data we are posting in order to perform an update
        $post = array(
            'first_name' => isset($second_form_data->first_name) ? $second_form_data->first_name : '',
            'last_name' => isset($second_form_data->last_name) ? $second_form_data->last_name : '',
            'email' => isset($second_form_data->user_email) ? $second_form_data->user_email : '',

            'field[25]' => isset($second_form_data->phone_number) ? $second_form_data->phone_number : '',

            'field[47]' => isset($second_form_data->amount_borrow) ? $second_form_data->amount_borrow : '',
            'field[48]' => isset($second_form_data->terms_borrow) ? $second_form_data->terms_borrow : '',
            'field[52]' => isset($second_form_data->vehicle_make) ? $second_form_data->vehicle_make : '',
            'field[53]' => isset($second_form_data->vehicle_model) ? $second_form_data->vehicle_model : '',
            'field[54]' => isset($second_form_data->condition) ? $second_form_data->condition : '',


            'status[123]' => 1, // 1: active, 2: unsubscribed (REPLACE '123' WITH ACTUAL LIST ID, IE: status[5] = 1)
            'form' => 5, // Subscription Form ID, to inherit those redirection settings

      );

        // This section takes the input fields and converts them to the proper format
        $query = "";
        foreach ($params as $key => $value) {
            $query .= urlencode($key) . '=' . urlencode($value) . '&';
        }
        $query = rtrim($query, '& ');

// This section takes the input data and converts it to the proper format
        $data = "";
        foreach ($post as $key => $value) {
            $data .= urlencode($key) . '=' . urlencode($value) . '&';
        }
        $data = rtrim($data, '& ');

// clean up the url
        $url = rtrim($url, '/ ');

// This sample code uses the CURL library for php to establish a connection,
// submit your request, and show (print out) the response.
        if (!function_exists('curl_init')) {
            die('CURL not supported. (introduced in PHP 4.0.2)');
        }

// If JSON is used, check if json_decode is present (PHP 5.2.0+)
        if ($params['api_output'] == 'json' && !function_exists('json_decode')) {
            die('JSON not supported. (introduced in PHP 5.2.0)');
        }

// define a final API request - GET
        $api = $url . '/admin/api.php?' . $query;

        $request = curl_init($api); // initiate curl object
        curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
        curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
//curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
        curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

        $response = (string)curl_exec($request); // execute curl post and store results in $response

// additional options may be required depending upon your server configuration
// you can find documentation on curl options at http://www.php.net/curl_setopt
        curl_close($request); // close curl object

        if (!$response) {
            die('Nothing was returned. Do you have a connection to Email Marketing server?');
        }

// This line takes the response and breaks it into an array using:
// JSON decoder
//$result = json_decode($response);
// unserializer
        $result = unserialize($response);
// XML parser...
// ...

// Result info that is always returned
        'Result: ' . ($result['result_code'] ? 'SUCCESS' : 'FAILED') . '<br />';
        'Message: ' . $result['result_message'] . '<br />';

        //return $result;



        return compact('result');
    }

    public function store_findmy_cars()
    {
        //passing frm vales
        $object = Cookie::get('application_data');
        $first_form_data = json_decode($object);
        $array = (array)$first_form_data;
        $this->findmycar->create($array);
    }

     public function send_email(array $data,$dat2)
    {
        Mail::send('emails.applicationfrm', ['data' => $data,'data2' => $dat2], function ($message) use ($data) {
          $message->to('dani@autofetch.co.nz')
            // $message->to('info@autofetch.co.nz')
                ->subject('Autofetch Application Form');
        });
        //$this->connect_api($data, $dat2);
    }

    public function finance_quote_send_email()
    {
        $object_quota = Session::get('application_quote_datas');
        $data = json_decode($object_quota);

        Mail::send('emails.finance_quote_frm', ['data' => $data], function ($message) use ($data) {
            $message->to('dani@autofetch.co.nz')
                //$message->to('palika@230i.com')
             //$message->to('info@autofetch.co.nz')
                ->subject('Autofetch Finance Quote Form');
        });
    }

    public function indexfrm_send_email()
    {
                 //passing frm vales
        $object = Session::get('application_datas');
        $data = json_decode($object);

        Mail::send('emails.index_frm', ['data' => $data], function ($message) use ($data) {
            // $message->to('palika@230i.com')
            $message->to('dani@autofetch.co.nz')
             //$message->to('info@autofetch.co.nz')
                ->subject('Find My Car');
        });

        return 1;
    }

}
