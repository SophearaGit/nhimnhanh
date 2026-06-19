<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Home',
        ];
        return view('frontend.pages.Home.index', $data);
    }

}
