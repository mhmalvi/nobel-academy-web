<?php

namespace App\Http\Controllers;

use App\Services\FAQDataService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Home
     */
    public function index()
    {
        return view('home');
    }


    /**
     * About us
     */
    public function about()
    {
        return view('pages.about');
    }


    /**
     * policies & forms
     */
    public function ourPolicies()
    {
        return view('pages.policies&Froms');
    }


    /**
     * Contact us
     */
    public function contactNta()
    {
        return view('pages.contact');
    }

    /**
     * FAQ page
     */
    public function faqPage()
    {
        $faq_data_service = new FAQDataService();
        $data = $faq_data_service->getData();

        return view('pages.faq', compact('data'));
    }
}
