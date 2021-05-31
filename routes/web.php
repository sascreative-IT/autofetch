<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//faqs
Route::resource('faq','FaqController');
Route::post('/getAllFaqs','FaqController@getAllFaqs');
Route::post('/getFaqById','FaqController@getFaqById');
Route::post('/store_or_update','FaqController@storeOrUpdate');

//pages
Route::resource('page','PageController');
Route::post('/getAllPages','PageController@getAllPages');
Route::post('/getPageById','PageController@getPageById');
Route::post('/store_or_update_page','PageController@storeOrUpdatePage');

//sliders
Route::get('/slider_index','SliderController@showSliderIndex');
Route::post('/store_or_update_slider','SliderController@storeOrUpdateSlider');
Route::post('/getAllSliders','SliderController@getAllSliders');
Route::post('/getSlidersById','SliderController@getSliderById');
Route::delete('/delete_slider/{id}','SliderController@deleteSlider');

Route::get('/application-form','SiteController@application_form');
Route::post('/application-post','ApplicationFormController@store');

Route::get('/test-application-form','ApplicationFormController@test');
Route::post('/index-form','ApplicationFormController@indexFormSubmit');

Route::post('/finance-quote-form','ApplicationFormController@financeQuoteSubmit');

Route::post('/vehicle_model_get','ApplicationFormController@getVehicleModel');

Route::get('/contactus-form','ContactusController@index');
Route::post('/contactus-post','ContactusController@store');

Route::get('faqs','SiteController@faq');
Route::get('index','SiteController@index');
Route::get('contact','SiteController@contact');
Route::get('car-loan-calculator','SiteController@finance_quote');
Route::get('/','SiteController@index_default');

// newsletter
Route::post('/newsletter-post','NewsLetterController@store');

Route::get('/about-us','SiteController@about_us');
Route::get('/terms-conditions','SiteController@termsConditions');
Route::get('/privacy-policy','SiteController@privacy_policy');
Route::get('/thank-you','SiteController@thankYou');

//Testimonials
Route::get('/testimonial_index','TestimonialController@index');
Route::post('/store_testimonial','TestimonialController@storeTestimonial');
Route::post('/getAllTestimonials','TestimonialController@getAllTestimonials');
Route::post('/getTestimonialsById','TestimonialController@getTestimonialById');
Route::delete('/delete_testimonials/{id}','TestimonialController@deleteTestimonial');
Route::get('/testimonial_create','TestimonialController@create');


Route::get('/z', function () {

    $exitCode = Artisan::call('config:cache');
    $exitCode_other = Artisan::call('cache:clear');




});

Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});
