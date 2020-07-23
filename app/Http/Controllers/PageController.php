<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

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
        $request = Request::create('/api/dining', 'GET');
        $olounge = json_decode(Route::dispatch($request)->getContent());
        return view('frontend.dining.olounge',['data' => $olounge]);
    }
    public function seafood()
    {
        $request = Request::create('/api/dining', 'GET');
        $seafood = json_decode(Route::dispatch($request)->getContent());
        return view('frontend.dining.seafood',['data' => $seafood]);
    }
    public function breakfast()
    {
        $request = Request::create('/api/special', 'GET');
        $special = json_decode(Route::dispatch($request)->getContent());
        return view('frontend.special.breakfast',['data' => $special]);
    }
    public function happyHour()
    {
        $request = Request::create('/api/special', 'GET');
        $special = json_decode(Route::dispatch($request)->getContent());
        return view('frontend.special.happyhour',['data' => $special]);
    }
    public function booking()
    {
        $request = Request::create('/api/special', 'GET');
        $special = json_decode(Route::dispatch($request)->getContent());
        return view('frontend.special.booking',['data' => $special]);
    }
    public function voucher()
    {
        $request = Request::create('/api/special', 'GET');
        $special = json_decode(Route::dispatch($request)->getContent());
        return view('frontend.special.voucher',['data' => $special]);
    }
    public function things()
    {
        $request = Request::create('/api/thingstodo', 'GET');
        $thingstodo = json_decode(Route::dispatch($request)->getContent());
        return view('frontend.things',['data' => $thingstodo]);
    }
    public function contact()
    {
        $request = Request::create('/api/contactus', 'GET');
        $contactus = json_decode(Route::dispatch($request)->getContent());
        return view('frontend.contact',['data' => $contactus]);
    }
    public function reserve()
    {
        return view('frontend.reserve.reserve');
    }
}
