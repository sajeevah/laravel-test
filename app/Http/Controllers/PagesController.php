<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use View;

class PagesController extends Controller
{
    public function index(){
        if(View::exists('pages.index')){
            return view('pages.index')
                ->with('text', '<b>Laravel</b>')
                ->with('name', 'Sajeeva')
                ->with(['location' => 'Europe', 'planet' => 'Earth']);
            //return view('pages.index', ['text' => '<b>Laravel</b>'])
        }else{
            return 'No view available';
        }
    }

    public function profile(){
        if(View::exists('pages.profile')){
            return view('pages.profile');
        }else{
            return 'No view available';
        }
    }

    public function settings(){
        if(View::exists('pages.settings')){
            return view('pages.settings');
        }else{
            return 'No view available';
        }
    }

    public function blade(){
        if(View::exists('blade.bladetest')){
            $gender = 'female';
            $text = 'Hello there! ';
            return view('blade.bladetest')
                ->with('gender', $gender)
                ->with('text', $text);
        }else{
            return 'No view available';
        }
    }
    
}
