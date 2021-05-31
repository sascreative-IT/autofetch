<?php

namespace App\Repositories;

use App\Repositories\Interfaces\INewsLetterRepository ;
use App\Models\NewsLetter;

class NewsLetterRepository implements INewsLetterRepository
{
    // model property on class instances
    protected $newsLetter;

    // Constructor to bind ApplicationForm to repository
    public function __construct(NewsLetter $newsLetter)
    {
        $this->newsLetter = $newsLetter;
    }

    public function create(array $data)
    {

         $this->newsLetter->create($data);
        return $this->connect_api($data);
    }

    public function connect_api(array $data)
    {

        // get global varibles
        $activecampaign  = config('services.activecampaign');
        $api_url = $activecampaign['url'];
        $api_key = $activecampaign['key'];
        $url = $api_url;
        $params = array(
            'api_key'      => $api_key,
            // this is the action that adds a contact
            'api_action'   => 'contact_add', //'contact_add',
            'api_output'   => 'serialize',
        );
        // here we define the data we are posting in order to perform an update
        $post = array(

        'email'                  => $data['email'],

            'status[123]'              => 1, // 1: active, 2: unsubscribed (REPLACE '123' WITH ACTUAL LIST ID, IE: status[5] = 1)
            'form'          => 11, // Subscription Form ID, to inherit those redirection settings
        );

        // This section takes the input fields and converts them to the proper format
        $query = "";
        foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';
        $query = rtrim($query, '& ');

// This section takes the input data and converts it to the proper format
        $data = "";
        foreach( $post as $key => $value ) $data .= urlencode($key) . '=' . urlencode($value) . '&';
        $data = rtrim($data, '& ');

// clean up the url
        $url = rtrim($url, '/ ');

// This sample code uses the CURL library for php to establish a connection,
// submit your request, and show (print out) the response.
        if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');

// If JSON is used, check if json_decode is present (PHP 5.2.0+)
        if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {
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

        if ( !$response ) {
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
         'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
         'Message: ' . $result['result_message'] . '<br />';

      return $result;

    }

}
