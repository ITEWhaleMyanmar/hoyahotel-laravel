<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function indexPage()
    {
        return view('frontend.index');
    }
    public function overview()
    {
        return view('frontend.overview');
    }
    public function superior()
    {
        return view('frontend.room.superior');
    }
    public function deluxe()
    {
        return view('frontend.room.deluxe');
    }
    public function premier()
    {
        return view('frontend.room.premier');
    }
    public function executive()
    {
        return view('frontend.room.executive');
    }
    public function business()
    {
        return view('frontend.room.business');
    }
    public function suite()
    {
        return view('frontend.room.hoya-suite');
    }
    public function businessCenter()
    {
        return view('frontend.business-center');
    }
    public function shoppingComplex()
    {
        return view('frontend.shopping-complex');
    }
    public function olounge()
    {
        return view('frontend.dining.olounge');
    }
    public function seafood()
    {
        return view('frontend.dining.seafood');
    }
    public function breakfast()
    {
        return view('frontend.special.breakfast');
    }
    public function happyHour()
    {
        return view('frontend.special.happyhour');
    }
    public function booking()
    {
        return view('frontend.special.booking');
    }
    public function voucher()
    {
        return view('frontend.special.voucher');
    }
    public function things()
    {
        return view('frontend.things');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function reserve()
    {
        return view('frontend.reserve.reserve');
    }
}
