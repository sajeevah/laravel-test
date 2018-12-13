<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\requests;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = [
            '0' => [
                'first_name' => 'Sajeeva',
                'last_name' => 'Hasith',
                'location' => 'Colombo'
            ],
            '1' => [
                'first_name' => 'Thisitha',
                'last_name' => 'Manaram',
                'location' => 'Monaragala'
            ],
        ];
        //return $users;

        return view('admin.users.index', compact('users'));
    }

    public function userlist(){
        //$users = User::all(); // without pagination
        $users = User::paginate(10);
        //$users = User::simplepaginate(10); // without page number
        //return $users;
        return view('admin.users.userlist', compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        User::create($request->all());
        return 'success';
        //return $request->all();
    }
}
