<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IFaqRepository;
use App\Repositories\Interfaces\IPageRepository;
use App\Repositories\Interfaces\ISliderRepository;
use App\Repositories\Interfaces\ITestimonialRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    protected $faq = null;
    private $page = null;
    private $slider = null;
    private $testimonial = null;

    public function __construct(IFaqRepository $faq, IPageRepository $page, ISliderRepository $slider,ITestimonialRepository $testimonial)
    {
        $this->faq = $faq;
        $this->page = $page;
        $this->slider = $slider;
        $this->testimonial = $testimonial;

    }

    public function faq()
    {
        // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl($url);
        if ($content->pg_banner_type == 'slider') {
            $sliders = $this->slider->getSliderByPageId($content->id);
        } else {
            $sliders = null;
        }
        $faqs = $this->faq->getAllActiveFaqs();

        return view('faq', compact('faqs', 'content', 'sliders'));
    }

    public function index()
    {
        // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl($url);
        $testimonials = $this->testimonial->getAllActiveTestimonials();
        if ($content->pg_banner_type == 'slider') {
            $sliders = $this->slider->getSliderByPageId($content->id);
        } else {
            $sliders = null;
        }

        return view('index',compact('content','sliders','testimonials'));
    }

    public function index_default()
    {
        // get last url
        $url = 'index';
        $content = $this->page->getPageByUrl($url);
        $testimonials = $this->testimonial->getAllActiveTestimonials();
        if ($content->pg_banner_type == 'slider') {
            $sliders = $this->slider->getSliderByPageId($content->id);
        } else {
            $sliders = null;
        }

        return view('index',compact('content','sliders','testimonials'));
    }

    public function contact()
    {
        // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl($url);
        if ($content->pg_banner_type == 'slider') {
            $sliders = $this->slider->getSliderByPageId($content->id);
        } else {
            $sliders = null;
        }


        return view('contact', compact('content', 'sliders'));
    }

    public function finance_quote()
    {
        // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl($url);
        if ($content->pg_banner_type == 'slider') {
            $sliders = $this->slider->getSliderByPageId($content->id);
        } else {
            $sliders = null;
        }
        $vehicle_makes=DB::table('make')->get();


        return view('finance_quote', compact('content', 'sliders','vehicle_makes'));
    }

    public function about_us()
    {
        // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl($url);
        if($content->pg_banner_type == 'slider')
        {
            $sliders = $this->slider->getSliderByPageId($content->id);
        }else{
            $sliders =NULL;
        }


        return view('about-us',compact('content','sliders'));
    }
    public function privacy_policy()
    {
        // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl($url);
        if($content->pg_banner_type == 'slider')
        {
            $sliders = $this->slider->getSliderByPageId($content->id);
        }else{
            $sliders =NULL;
        }


        return view('privacy-policy',compact('content','sliders'));
    }

    public function application_form()
    {
        // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl($url);
        if($content->pg_banner_type == 'slider')
        {
            $sliders = $this->slider->getSliderByPageId($content->id);
        }else{
            $sliders =NULL;
        }


        return view('application-form',compact('content','sliders'));
    }
	
	public function termsConditions(){
		     // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl('privacy-policy');
        if($content->pg_banner_type == 'slider')
        {
            $sliders = $this->slider->getSliderByPageId($content->id);
        }else{
            $sliders =NULL;
        }
		
		return view('terms-conditions',compact('content','sliders'));
	}

    public function thankYou()
    {
        // get last url
        $url = last(request()->segments());
        $content = $this->page->getPageByUrl($url);
        if($content->pg_banner_type == 'slider')
        {
            $sliders = $this->slider->getSliderByPageId($content->id);
        }else{
            $sliders =NULL;
        }


        return view('thank_you',compact('content','sliders'));
	}
}
