<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to RSM';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    // public function view(){
    //     $title = 'view';
    //     return view('pages.view')->with('title', $title);
    // }

    // public function ticket(){
    //     $title = 'ticket';
    //     return view('pages.ticket')->with('title', $title);
    // }

    // public function service(){
    //     $title = 'service';
    //     return view('pages.service')->with('title', $title);
    // }

    // public function order(){
    //     $title = 'order';
    //     return view('pages.order')->with('title', $title);
    // }

    // public function device(){
    //     $title = 'device';
    //     return view('pages.device')->with('title', $title);
    // }

    // public function item(){
    //     $title = 'item';
    //     return view('pages.item')->with('title', $title);
    // }

    // public function invoice(){
    //     $title = 'invoice';
    //     return view('pages.invoice')->with('title', $title);
    // }

}
